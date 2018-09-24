<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    /**
     * D.m.v. onderstaande annotation maakt Symfony een route aan /hello met de
     * naam hello. Wanneer je in de browser naar localhost:8000/hello gaat, weet
     * Symfony dat onderstaande functie uitgevoerd moet worden.
     *
     * @Route("/hello", name="hello")
     */
    public function index()
    {
        // de render functie zorgt ervoor dat het Twig template index.html.twig
        // gerenderd wordt, waarna deze via een http response terug gestuurd
        // wordt naar de browser
        return $this->render('hello/index.html.twig', [
            // is als variable beschikbaar in de template, verander
            // de waarde en herlaad de pagina om het resultaat te zien
            'name' => 'Alfa student',
        ]);
    }
}
