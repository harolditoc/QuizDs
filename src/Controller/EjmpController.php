<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EjmpController extends AbstractController
{
    #[Route('/ejmp', name: 'app_ejmp')]
    public function index(): Response
    {
        return $this->render('ejmp/index.html.twig', [
            'controller_name' => 'EjmpController',
        ]);
    }
}
