<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TwigController extends AbstractController
{
    /**
     * @Route("/twig", name="twig")
     */
    public function index()
    {
        return $this->render('twig/index.html.twig', [
            'controller_name' => 'TwigController',
            'Number' => 15
        ]);
    }
}
