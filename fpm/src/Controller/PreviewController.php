<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PreviewController extends AbstractController
{
    #[Route('/', name: 'app_root')]
    public function previewRoot(): Response
    {
        return $this->render('preview/root.html.twig', [
            'controller_name' => 'PreviewController',
        ]);
    }

    #[Route('/preview', name: 'app_preview')]
    public function index(): Response
    {
        return $this->render('preview/index.html.twig', [
            'controller_name' => 'PreviewController',
        ]);
    }
}
