<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class MembreController extends AbstractController
{
    #[Route('/membre', name: 'app_membre_home')]
    public function Home(): Response
    {
        return $this->render('membre/pageH.html.twig', [
        ]);
    }
}
