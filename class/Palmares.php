<?php

/**
 * Created by PhpStorm.
 * User: !l-PazZ0
 * Date: 16/05/2016
 * Time: 13:01
 */
class Palmares
{
    public static function DisplayTtitles($bd)
    {
        $sql="SELECT nomEquipe, COUNT(*) as somme FROM `palmares` WHERE titre='championnat' GROUP BY (nomEquipe) ORDER BY (somme) DESC";
        $res=$bd->getAll($sql);
        return $res;
    }
    public static function championnat_ChaqueEquipe($bd,$equipe)
    {

        $sql="SELECT saison FROM palmares where titre='championnat' and nomEquipe='".$equipe."' ";

        $res=$bd->getAll($sql);

        return $res;
    }
}