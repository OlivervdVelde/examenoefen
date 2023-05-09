<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function homepage(): Response
    {
        return $this->render('index.html.twig');
    }

    /**
     * @Route("/contact", name="app_contact")
     */
    public function contact()
    {
        return $this->render("contact.html.twig");
    }
}