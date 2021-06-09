<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoyenneController extends AbstractController
{
    #[Route('/moyenne', name: 'moyenne')]
    public function index(): Response
    {
        return $this->render('Admin/les moyennes.html.twig', [
            'controller_name' => 'MoyenneController',
        ]);
    }
}
