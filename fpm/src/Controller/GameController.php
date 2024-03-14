<?php

namespace App\Controller;

use App\Entity\Game;
use App\Entity\Shuffle;
use App\Entity\User;
use App\Form\GameBuilderType;
use App\Form\GameCreateType;
use App\Form\GameEnterType;
use App\Form\GameInviteType;
use App\Form\GameSearchType;
use App\Form\InviteType;
use App\Service\MailerHandler;
use App\Service\UserHandler;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\UX\Turbo\TurboBundle;

class GameController extends AbstractController
{
    #[Route('/game/build', name: 'app_game_build')]
    public function gameBuild(Request $request, ManagerRegistry $registry): Response
    {
        $form = $this->createForm(GameBuilderType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $manager = $registry->getManager();
            $task = $form->getData();

            $userPassport = $this->getUser();
            $user = $registry->getRepository(User::class)
                ->findOneBy(['email' => $userPassport->getUserIdentifier()]);

            $identifier = hash('sha256', uniqid());

            $game = new Game();
            $game->setIdentifier($identifier);
            $game->setName($task->getName());
            $game->setStart($task->getStart());
            $game->setEnd($task->getEnd());
            $game->setOwner($user);
            $game->setShuffled(false);

            $manager->persist($game);

            $shuffle = new Shuffle();
            $shuffle->setGame($game);
            $shuffle->setUser($user);

            $manager->persist($shuffle);

            $manager->flush();

            return $this->redirectToRoute('app_game_identifier', ['identifier' => $identifier]);
        }

        return $this->render('game/preview.html.twig', [
            'controller_name' => 'GameController',
        ]);
    }

    #[Route('/game/{identifier}', name: 'app_game_identifier')]
    public function gameIdentifier($identifier, ManagerRegistry $registry, Request $request, MailerInterface $mailer): Response
    {
        $options = [];
        $userHandler = new UserHandler($registry);
        $user = $userHandler->getUserByEmail($this->getUser()->getUserIdentifier());
        $game = $registry->getRepository(Game::class)->findOneBy(['identifier' => $identifier]);
        $shuffleRepository = $registry->getRepository(Shuffle::class);
        $shuffled = $shuffleRepository->findOneBy(['game' => $game, 'user' => $user]);

        $options['owner'] = false;
        $options['game_name'] = $game->getName();

        if (is_null($shuffled)) {
            $enterForm = $this->createForm(GameEnterType::class);
            $enterForm->handleRequest($request);

            if ($enterForm->isSubmitted()) {
                $manager = $registry->getManager();

                $shuffle = new Shuffle();
                $shuffle->setGame($game);
                $shuffle->setUser($user);

                $manager->persist($shuffle);
                $manager->flush();

                return $this->redirectToRoute('app_game_identifier', ['identifier' => $identifier]);
            }

            return $this->render('game/enter.html.twig', [
                'game_name' => $game->getName(),
                'enter_form' => $enterForm
            ]);
        }

        $target = $shuffleRepository->findOneBy(['game' => $game, 'giver' => $user]);

        $options['user_name'] = $user->getUsername();
        $options['user_wish'] = empty($shuffled->getWish()) ? '' : $shuffled->getWish();

        $options['target_name'] = is_null($target) ? 'Ещё неизвестен :(' : $target->getUser()->getUsername();
        $options['target_wish'] = is_null($target) ? 'Надо подумать...' : $target->getWish();

        $options['users'] = $shuffleRepository->findBy(['game' => $game]);

        if ($user->getId() == $game->getOwner()->getId()) {
            $inviteForm = $this->createForm(GameInviteType::class);
            $inviteForm->handleRequest($request);

            if ($inviteForm->isSubmitted()) {
                $task = $inviteForm->getData();

                $mailerHandler = new MailerHandler($mailer);
                $mailerHandler->sendInviteToGame($task['email']);
            }

            $options['owner'] = true;
            $options['invite_form'] = $inviteForm;
        }

        return $this->render('game/view.html.twig', $options);
    }

    #[Route('/search', name: 'app_search')]
    public function search(Request $request, ManagerRegistry $registry): Response
    {
        $form = $this->createForm(GameSearchType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if (TurboBundle::STREAM_FORMAT === $request->getPreferredFormat()) {
                $request->setRequestFormat(TurboBundle::STREAM_FORMAT);

                $userPassport = $this->getUser();

                $games = [];

                if (!is_null($userPassport)) {
                    $user = $registry->getRepository(User::class)
                        ->findOneBy(['email' => $this->getUser()->getUserIdentifier()]);

                    $shuffles = $registry->getRepository(Shuffle::class)
                        ->findBy(['user' => $user->getId()]);

                    foreach ($shuffles as $shuffle) {
                        $games[] = $registry->getRepository(Game::class)
                            ->findOneBy(['id' => $shuffle->getGame()]);
                    }
                }

                return $this->render('game/search.stream.html.twig', [
                    'games' => $games
                ]);
            }
        }

        return $this->render('game/preview.html.twig');
    }

    #[Route('/create', name: 'app_create')]
    public function create(Request $request): Response
    {
        $form = $this->createForm(GameCreateType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if (TurboBundle::STREAM_FORMAT === $request->getPreferredFormat()) {
                $request->setRequestFormat(TurboBundle::STREAM_FORMAT);
                return $this->render('game/create.stream.html.twig');
            }
        }

        return $this->render('game/preview.html.twig');
    }
}
