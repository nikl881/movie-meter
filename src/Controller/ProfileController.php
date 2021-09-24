<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends AbstractController
{
    /**
     * @Route("/profile", name="profile")
     */
    public function show(): Response
    {
        $user = $this->getUser();

        return $this->render('profile/showx.html.twig', [
            'controller_name' => 'ProfileController',
            'user' => $user,
        ]);
    }

    /**
     * @Route("/profile/edit", name="edit_profile")
     */
    public function edit(): Response
    {
        dd('user editpage');
    }

    /**
     * @Route("/user-details", name="user_details")
     */
    public function details(): Response
    {
        dd('user detailpage');
    }
}
