<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfController extends AbstractController
{
    #[Route('/prof', name: 'prof')]
    public function index(): Response
    {
        return $this->render('Admin/les profes.html.twig', [
            'controller_name' => 'ProfController',
        ]);
    }
}
