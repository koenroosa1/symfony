<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/bazinga")
 */
class BazingaController extends AbstractController
{
    /**
     * @Route("/{number}", name="bazinga", methods="GET")
     * @param int $number
     *
     * @return Response
     */
    public function run(int $number): Response
    {
        return $this->render('bazinga/run.html.twig', ['number' => $number]);
    }
}
