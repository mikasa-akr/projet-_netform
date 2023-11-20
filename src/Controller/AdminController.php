<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin', name: 'app_admin')]
class AdminController extends AbstractController
{
    #[Route('/', name: 'app_admin_login')]
    public function login(): Response
    {
        return $this->render('admin/login.html.twig', [
        ]);
    }
    #[Route('/home', name: 'app_admin_home')]
    public function home(): Response
    {
        return $this->render('admin/pageH.html.twig', [
        ]);
    }

}
