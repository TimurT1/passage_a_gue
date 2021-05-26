<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PassageController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index()
    {
        return $this->render('passage/index.html.twig');
    }


/**
     *@Route("/creation", name="creation")
     *@Route("/{id}/edit", name="edition")
     */
    public function creation()
    {
        return $this->render('passage/creation.html.twig');
    }

    /**
     *@Route("/recherche", name="recherche")     
     */
    public function recherche()
    {
        return $this->render('passage/recherche.html.twig');
    }

}