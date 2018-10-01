<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 26-9-2018
 * Time: 09:56
 */

namespace App\Entity;


class Album{
    private $album;


    public function __construct($albums)
    {
        $this->album = $albums;
    }

    public function Retun(){
        echo $this->album;
    }
}