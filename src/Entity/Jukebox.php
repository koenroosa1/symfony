<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\JukeboxRepository")
 */

/**
 * Class Jukebox
 * @package App\Entity
 */



class Jukebox
{
    private $album;

    public function __construct(Album $album)
    {
        $this->album = $album;
    }

    public function play(){

        return $this->album->Retun();

    }
}


//
//$jukebox = new Jukebox(["test1 ", "test2 ", "test3 ", "test4 "]);
//$jukebox->play();
