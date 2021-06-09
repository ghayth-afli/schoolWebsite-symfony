<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EmploiController extends AbstractController
{
    #[Route('/emploi', name: 'emploi')]
    public function index(): Response
    {
        return $this->render('Admin/emplois.html.twig', [
            'controller_name' => 'EmploiController',
        ]);
    }
}
