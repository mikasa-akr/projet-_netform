<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class AcceuilController extends AbstractController
{
    #[Route('/', name:'app_acceuil')]
    public function acceuil(): Response
    {
        return $this->render('acceuil/acceuil.html.twig', [
        ]);
    }
    #[Route('/contact', name: 'app_acceuil_contact')]
    public function contact(): Response
    {
        return $this->render('acceuil/contact.html.twig', [
        ]);
    }
    #[Route('/signIn', name: 'app_acceuil_signIn')]
    public function signIn(): Response
    {
        return $this->render('acceuil/login.html.twig', [
        ]);
    }
    #[Route('/signUp', name: 'app_acceuil_signUp')]
    public function signUp(): Response
    {
        return $this->render('acceuil/register.html.twig', [
        ]);
    }

}
