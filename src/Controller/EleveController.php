<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EleveController extends AbstractController
{
    #[Route('/eleve', name: 'eleve')]
    public function displayEleve(): Response
    {
        return $this->render('Admin/les eleves.html.twig', [
            'controller_name' => 'EleveController',
        ]);
    }


    #[Route('/eleve/addEleve', name: 'addEleve')]
    public function addEleve(): Response
    {
        return $this->render('Admin/ajoutEleve.html.twig', [
            'controller_name' => 'EleveController',
        ]);
    }
}
