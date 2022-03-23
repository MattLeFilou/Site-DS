<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ActualiteController extends AbstractController
{
    #[Route('/liste-actualite', name: 'liste-actualite')]
    public function listeContatcts(): Response
    {
        return $this->render('actualite/index.html.twig', [
        ]);
    }
}
