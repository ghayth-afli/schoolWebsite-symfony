<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ParentController extends AbstractController
{
    #[Route('/parent', name: 'parent')]
    public function index(): Response
    {
        return $this->render('Admin/les parents.html.twig', [
            'controller_name' => 'ParentController',
        ]);
    }
}
