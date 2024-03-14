<?php

namespace App\Twig\Runtime;

use App\Form\GameBuilderType;
use App\Form\GameCreateType;
use App\Form\GameInviteType;
use App\Form\GameSearchType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Twig\Extension\RuntimeExtensionInterface;

class GameRuntime extends AbstractController implements RuntimeExtensionInterface
{
    public function __construct()
    {

    }

    public function getGameBuilderForm()
    {
        $form = $this->createForm(GameBuilderType::class);
        return $form->createView();
    }

    public function getGameCreateForm()
    {
        $form = $this->createForm(GameCreateType::class);
        return $form->createView();
    }

    public function getGameSearchForm()
    {
        $form = $this->createForm(GameSearchType::class);
        return $form->createView();
    }
}
