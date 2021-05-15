<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/index', name: 'index')]
    public function index(): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        if ($this->getUser()) {
        return $this->render('Admin/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
    else{
        return $this->render('security/login.html.twig'); 
    }
    }
}
