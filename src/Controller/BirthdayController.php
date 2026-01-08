<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BirthdayController extends AbstractController
{
    #[Route('/birthday', name: 'get_birthday')]
    public function index(): Response
    {
        return $this->render('birthday/index.html.twig', [
            'controller_name' => 'BirthdayController',
        ]);
    }
}
