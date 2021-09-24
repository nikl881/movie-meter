<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LandingController extends AbstractController
{
    /**
     * @Route("/", name="landing_page")
     */
    public function index(): Response
    {
        return $this->render('landing_page/show.html.twig', [
            'controller_name' => 'LandingController',
        ]);
    }
}
