<?php

namespace App\Controller;


use App\Entity\Recette;
use App\Repository\RecetteRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RecetteController extends AbstractController
{
    #[Route('/recette', name: 'app_recettes')]
    public function index(RecetteRepository $recetteRepository): Response
    {
        $recettes = $recetteRepository->findAll();

        return $this->render('recettes/index.html.twig', [
            'recettes' => $recettes
        ]);
    }

    #[Route('/recette/{title}', name: 'app_recette')]
    public function show(string $title, RecetteRepository $recetteRepository): Response
    {
        $recette = $recetteRepository->findOneBy(['title' => $title]);

        return $this->render('recette/index.html.twig', [
            'recette' => $recette
        ]);
    }
}
