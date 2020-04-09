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
    public function index(): Response
    {
        $user = [
            'user1' => [
                'name' => 'David',
                'age' => 35
            ],
            'user2' => [
                'name' => 'Arnaud',
                'age' => 25
            ], 
            'user3' => [
                'name' => 'Quentin',
                'age' => 25
            ],
        ];

        $test = 'un message de test';

        return $this->render('home/home.html.twig', [
            'user' => $user,
            'test' => ucfirst($test)
        ]);
    }
}
