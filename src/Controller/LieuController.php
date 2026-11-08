<?php

namespace App\Controller;

use App\Repository\LieuRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Lieu;

final class LieuController extends AbstractController
{
   #[Route('/', name: 'app_home')]
    public function home(LieuRepository $lieuRepository): Response
    {
        $totalLieux = count($lieuRepository->findAll());
    
        return $this->render('home/index.html.twig', [
            'totalLieux' => $totalLieux,
        ]);
    }

    #[Route('/lieux', name: 'app_lieu_index')]
    public function index(LieuRepository $lieuRepository): Response
    {
        $lieux = $lieuRepository->findAll();

        return $this->render('lieu/index.html.twig', [
            'lieux' => $lieux,
        ]);
    }

    #[Route('/lieu/{id}', name: 'app_lieu_show')]
    public function show(Lieu $lieu): Response
    {
        return $this->render('lieu/show.html.twig', [
            'lieu' => $lieu,
        ]);
    }
}
