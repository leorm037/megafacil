<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/', name: 'app_bolao_')]
final class BolaoController extends AbstractController
{
    
    #[Route('', name: 'index')]
    public function index(): Response
    {
        return $this->render('bolao/index.html.twig', [
            'controller_name' => 'BolaoController',
        ]);
    }
}
