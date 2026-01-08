<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/security', name: 'security_')]
final class SecurityController extends AbstractController
{
    /**
     * Inscription
     */
    #[Route('/user', name: 'register', methods: ['POST'])]
    public function index(): Response
    {
        

        return $this->json([
            "success" => "l'utilisateur à bien été créer"
        ],
        201
        );
    }
}
