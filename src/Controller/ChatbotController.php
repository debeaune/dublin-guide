<?php

namespace App\Controller;

use App\Repository\LieuRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ChatbotController extends AbstractController
{
    #[Route('/chatbot', name: 'app_chatbot')]
    public function index(Request $request, LieuRepository $lieuRepository): Response
    {
        $question = $request->query->get('q', '');
        $resultats = [];

        if ($question) {
            $resultats = $lieuRepository->findByTag($question);
        }

        return $this->render('chatbot/index.html.twig', [
            'question' => $question,
            'resultats' => $resultats,
        ]);
    }
}
