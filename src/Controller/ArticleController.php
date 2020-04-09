<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/article")
 */
class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="article")
     */
    public function index(Request $request)
    {
        // dd($request);

        return $this->render('front/article.html.twig', [
            'controller_name' => 'ArticleController',
        ]);
    }
}
