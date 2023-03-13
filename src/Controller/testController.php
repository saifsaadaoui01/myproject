<?php


namespace App\Controller;
use App\taxes\calculateur;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class testController extends AbstractController
{ private $calcul;

    #[Route('/test5', name: 'test')]
    function index(calculateur $calcul)
    {
        $tva=$calcul->prixTVA(100);
        $ttc=$calcul->prixTTC(100);

        dd("le mTVA est ",$tva,"et le TTC est ",$ttc);



    }

    function test()
    {
        return new Response("<h1>test</h1>");
    }


    #[Route('/test2', name: 'test2')]
    function test2()
    {
        dd("ca fonctionne");
    }
#[Route('/test3',name: 'test3')]
    function test3()
    {
        return $this->render("test/test3.html.twig");
    }
}