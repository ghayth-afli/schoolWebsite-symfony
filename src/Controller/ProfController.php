<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Entity\Prof;
class ProfController extends AbstractController
{
    #[Route('/prof', name: 'prof')]
    public function displayProf(): Response
    {
        return $this->render('Admin/les profes.html.twig', [
            'controller_name' => 'ProfController',
        ]);
    }

    #[Route('/addProf', name: 'addProf')]
    public function addProf(): Response
    {
        return $this->render('Admin/ajoutProfe.html.twig', [
            'controller_name' => 'ProfController',
        ]);
    }
}