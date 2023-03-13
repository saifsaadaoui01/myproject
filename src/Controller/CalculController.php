<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalculController extends AbstractController
{
    #[Route('calcul/somme/{a}/{b}', name: 'app_somme')]
    public function index($a,$b): Response
    {
        $s=$a+$b;

        return $this->render('calcul/somme.html.twig',['a'=>$a,'b'=>$b,'s'=>$s,
        ]);
    }
    #[Route('calcul/sous/{a}/{b}', name: 'app_sous')]
    public function sous($a,$b): Response
    {
        $s=$a-$b;

        return $this->render('calcul/sous.html.twig',['a'=>$a,'b'=>$b,'s'=>$s,
        ]);
    }
    #[Route('/home', name: 'app_home')]
    public function acceuil(): Response
    {
$x=100;
$y=2;
        return $this->render('calcul/home.html.twig',['x'=>$x,'y'=>$y]
        );
    }
}
