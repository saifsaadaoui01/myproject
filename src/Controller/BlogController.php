<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route('/blog', name: 'app_blog')]
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    #[Route('blogliste', name: 'blogliste')]
    public function list(): Response
    {
        return new Response("<h1>Liste des articles</h1>");


    }




    #[Route('blog/show/{id}/{name?vide}', name: 'blogliste')]
    public function show($id,$name): Response
    {


    return $this->render('blog/show.html.twig',['a'=>$id,'b'=>$name]);

    }
    #[Route('blog/show/{id?2}', name: 'blogliste1',priority: 1)]
    public function detail($id): Response
    {$name="introduction au symfony";

        return $this->render('blog/show.html.twig',['a'=>$id,'b'=>$name]);

    }
    #[Route('blog/', name: 'blogtest')]
    public function test(): Response
    {
       # $url=$this->generateUrl('blogliste1',['id'=>300]);
        #dd($url);
        #return $this->redirect($url);
        return $this->redirectToRoute('blogliste1',['id'=>300]);
    }
}