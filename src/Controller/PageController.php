<?php

namespace App\Controller;

use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    #[Route('/', name: 'app_page')]
    public function index(): Response
    {
        return $this->render('page/index.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
    /* Ici on créer une nouvelle route pour lapage blog
    On a besoin de créer une nouvelle page pour le blog.html.twig
     */
    #[Route('/blog', name: 'app_blog')]
    public function blog(PostRepository $posts): Response
    {
        return $this->render('page/blog.html.twig', [
            'title' => 'Tous les articles du blog',  // Variable
            'posts' => $posts->findAll(),  // Tableau des articles
        ]);
    }
    
}
