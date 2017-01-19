<?php

/**
 * Created by PhpStorm.
 * User: !l-PazZ0
 * Date: 08/05/2016
 * Time: 22:32
 */
class Calendrier
{
    private $id;
    private $annee;
    private $idequipe;
    private $matches_jouee;
    private $points;
    private $butplus;
    private $butmoins;
    private $gains;
    private $egalite;
    private $perdus;

    public function __construct($id,$annee,$idequipe,$matches_jouee,$points,$butplus,$butmoins,$gains,$egalite,$perdus)
    {
        $this->id=$id;
        $this->annee=$annee;
        $this->idequipe=$idequipe;
        $this->matches_jouee=$matches_jouee;
        $this->points=$points;
        $this->butplus=$butplus;
        $this->butmoins=$butmoins;
        $this->gains=$gains;
        $this->egalite=$egalite;
        $this->perdus=$perdus;

    }
    public static function getAllTeam($bd)
    {

        $res=$bd->cnx->query("select * from Calendrier");
        $res->setFetchMode(PDO::FETCH_OBJ);
        return $res;
    }
    public static function SomeParties($bd)
    {

        $res=$bd->cnx->query("select count(Matches_jouee) as somme from Calendrier");
        $res->setFetchMode(PDO::FETCH_OBJ);
        return $res;
    }
}
?>