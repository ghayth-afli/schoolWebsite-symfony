<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Parents;
use App\Repository\ParentsRepository;
class ParentController extends AbstractController
{
    #[Route('/parent', name: 'parent')]
    public function displayParent(ParentsRepository $Parents): Response
    {
        $Parent=$Parents->findAll();


        return $this->render('Admin/les parents.html.twig', [
            'controller_name' => 'ParentController',
            'Parent' => $Parent
        ]);
    }

    #[Route('/addParent', name: 'addParent')]
    public function addParent(Request $req): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        
        $Parents = new Parents();
        $Parents->setNom(strval($req->get("Nom")));
        $Parents->setPrenom(strval($req->get("Prenom")));
        $Parents->setCin(strval($req->get("CIN")));
        $Parents->setEmail(strval($req->get("Email")));
        $Parents->setPassword(strval($req->get("password")));

        $Parents->setNumInscFils(strval($req->get("Numero_inscription")));
        $Parents->setVille(strval($req->get("Ville")));
        $Parents->setAdresse(strval($req->get("Adresse")));
        $Parents->setCodePostal(intval($req->get("Code_postal")));
        $Parents->setNumTel(strval($req->get("telephone")));
        $Parents->setSexe(strval($req->get("status")));

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($Parents);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();



        return $this->render('Admin/ajoutParent.html.twig', [
            'controller_name' => 'ParentController',
        ]);
    }
}
