<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class gammeController extends AbstractController
{
    #[Route('/gamme', name: 'app_gamme')]
    public function index(): Response
    {
        $tab=['imprimante','accessoire','ordinateur','videoprojecteur'];
        return $this->render('gamme/lister.html.twig', [
            'gamme'=> $tab
        ]);
    }
}
