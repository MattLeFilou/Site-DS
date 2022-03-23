<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ActualiteType;
use App\Entity\Actualite;
 


class BaseController extends AbstractController
{
    #[Route('/index', name: 'index')]
    public function index(): Response
    {
        $repoactu = $this->getDoctrine()->getRepository(Actualite::class);
        $actu = $repoactu->findAll();
        return $this->render('base/index.html.twig', [
            'actu' => $actu
               ]);
    }

    #[Route('/actualite', name: 'actualite')]
    public function Actualite (): Response
    {
        $actu = new Actualite();
        $form = $this->createForm(ActualiteType::class, $actu);
        return $this->render('base/actualite.html.twig', [
            'form' => $form->createView()
        ]);

        $em = $this->getDoctrine()->getManager();
                $em->persist($actu);
                $em->flush();
    }
}
