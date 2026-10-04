<?php

namespace App\Controller;

use App\Repository\LieuRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class LieuController extends AbstractController
{
    #[Route('/lieux', name: 'app_lieu_index')]
    public function index(LieuRepository $lieuRepository): Response
    {
        $lieux = $lieuRepository->findAll();

        return $this->render('lieu/index.html.twig', [
            'lieux' => $lieux,
        ]);
    }
}
