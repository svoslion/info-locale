<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ArticleRepository;



class ArticleController extends AbstractController
{

    #[Route('/article', name: 'app_article')]
    public function index(): Response
    {
        return $this->render('article/index.html.twig', [
            'controller_name' => 'HomeController',
            
        ]); 
    }

    #[Route('/show', name: 'app_show' )]
    public function show(): Response
    {
        return $this->render('article/show.html.twig');
        
    }
}
