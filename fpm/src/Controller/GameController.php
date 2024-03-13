<?php

namespace App\Controller;

use App\Entity\Game;
use App\Entity\Shuffle;
use App\Entity\User;
use App\Form\GameBuilderType;
use App\Form\GameCreateType;
use App\Form\GameSearchType;
use App\Form\InviteType;
use App\Service\MailerHandler;
use App\Service\UserHandler;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\UX\Turbo\TurboBundle;

class GameController extends AbstractController
{
    #[Route('/game/create', name: 'app_game_create')]
    public function gameCreate(Request $request): Response
    {
        $form = $this->createForm(GameCreateType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if (TurboBundle::STREAM_FORMAT === $request->getPreferredFormat()) {
                $request->setRequestFormat(TurboBundle::STREAM_FORMAT);
                return $this->render('game/create.stream.html.twig');
            }
        }

        return $this->render('game/preview.html.twig', [
            'controller_name' => 'GameController',
        ]);
    }

    #[Route('/game/search', name: 'app_game_search')]
    public function gameSearch(Request $request, ManagerRegistry $registry): Response
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

        return $this->render('game/preview.html.twig', [
            'controller_name' => 'GameController',
        ]);
    }

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
        $game = $registry->getRepository(Game::class)->findOneBy(['identifier' => $identifier]);

        $inviteForm = $this->createForm(InviteType::class);
        $inviteForm->handleRequest($request);

        if ($inviteForm->isSubmitted()) {
            $task = $inviteForm->getData();

            $mailerHandler = new MailerHandler($mailer);
            $mailerHandler->sendInviteToGame($task['email']);
        }

        return $this->render('game/view.html.twig', [
            'game_name' => $game->getName(),
        ]);
    }
}
