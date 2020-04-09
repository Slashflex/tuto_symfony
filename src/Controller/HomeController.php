<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index() :Response
    {
        $user = [
            'user1' => 'david',
            'user2' => 'arnaud',
            'user3' => 'quentin'
        ];

        $test = 'un message de test';

        return $this->render('home/home.html.twig', [
            'user' => $user,
            'test' => $test
        ]);
    }
}
