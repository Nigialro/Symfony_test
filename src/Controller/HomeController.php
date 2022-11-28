<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', 'home.index', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('home.html.twig');
    }

    #[Route('/nobuo_uematsu', 'nobuo_uematsu', methods: ['GET'])]
    public function uematsu():Response
    {
        return $this->render('composers/uematsu.html.twig');
    }

    #[Route('/gustavo_santaolalla', 'gustavo_santaolalla', methods: ['GET'])]
    public function santaolalla():Response
    {
        return $this->render('composers/santaolalla.html.twig');
    }

    #[Route('/amin_bhatia', 'amin_bhatia', methods: ['GET'])]
    public function bhatia():Response
    {
        return $this->render('composers/bhatia.html.twig');
    }

    #[Route('/joe_hisaishi', 'joe_hisaishi', methods: ['GET'])]
    public function hisaishi():Response
    {
        return $this->render('composers/hisaishi.html.twig');
    }

    #[Route('/ari_posner', 'ari_posner', methods: ['GET'])]
    public function posner():Response
    {
        return $this->render('composers/posner.html.twig');
    }
}