<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AutresElementsController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index(): Response
    {
        return $this->render('autres_elements/index.html.twig');
    }

    /**
     *@Route("/parametrage", name="parametrage")     
     */
    public function parametrage()
    {
        return $this->render('autres_elements/parametrage.html.twig');
    }

    /**
     * @Route("/portail", name="portail")
     */
    public function portail(): Response
    {
        return $this->render('autres_elements/portail.html.twig');
    }

    /**
     * @Route("/mention", name="mention")
     */
    public function mention(): Response
    {
        return $this->render('autres_elements/mention.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact(): Response
    {
        return $this->render('autres_elements/contact.html.twig');
    }

    
}
