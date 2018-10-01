<?php

namespace App\Controller;

use App\Entity\Album;
use App\Entity\Jukebox;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("/jukebox")
 */

class JukeboxController extends AbstractController
{
    /**
     * @Route("/play", name="jukebox", methods="GET")
     */

    public function run() : Response
    {


    }
}
