<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ParentController extends AbstractController
{
    #[Route('/parent', name: 'parent')]
    public function displayParent(): Response
    {
        return $this->render('Admin/les parents.html.twig', [
            'controller_name' => 'ParentController',
        ]);
    }

    #[Route('/addParent', name: 'addParent')]
    public function addParent(): Response
    {
        return $this->render('Admin/ajoutParent.html.twig', [
            'controller_name' => 'ParentController',
        ]);
    }
}
