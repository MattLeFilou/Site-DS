<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ActualiteType;

class BaseController extends AbstractController
{
    #[Route('/index', name: 'index')]
    public function index(): Response
    {
        return $this->render('base/index.html.twig', [
        ]);
    }

    #[Route('/actualite', name: 'actualite')]
    public function Actualite (): Response
    {
        $form = $this->createForm(ActualiteType::class);
        return $this->render('base/actualite.html.twig', [
            'form' => $form->createView()
        ]);
    }
}