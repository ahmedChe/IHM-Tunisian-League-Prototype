<?php

/**
 * Created by PhpStorm.
 * User: !l-PazZ0
 * Date: 09/05/2016
 * Time: 02:59
 */
class Saison
{
    private $id_saison;
    private $saison_sportif;
    public function __construct($id_saison,$saison_sportif)
    {
        $this->id_saison=$id_saison;
        $this->saison_sportif=$saison_sportif;

    }
}