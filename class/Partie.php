<?php

/**
 * Created by PhpStorm.
 * User: !l-PazZ0
 * Date: 09/05/2016
 * Time: 03:00
 */
class Partie
{
    private $id;
    private $idequiperec;
    private $idequipeinv;
    private $date;
    private $journee;
    private $saison;

    public function __construct($id,$idequiperec,$idequipeinv,$date,$journee,$saison)
    {
        $this->id=$id;
        $this->idequiperec=$idequiperec;
        $this->idequipeinv=$idequipeinv;
        $this->date=$date;
        $this->journee=$journee;
        $this->saison=$saison;
    }
    public static function getJournees($bd,$limite){

        $res=$bd->cnx->query("select * from Partie limit ".$limite.",8");
        $res->setFetchMode(PDO::FETCH_OBJ);
        return $res;
    }
    public static function JourneePasse($bd,$idEquipe){

        $res=$bd->cnx->query("SELECT * FROM partie WHERE (idequipeRec='".$idEquipe."' or idequipeInv='".$idEquipe."') and journee <= (SELECT Matches_jouee FROM calendrier WHERE idequipe='".$idEquipe."')");
        $res->setFetchMode(PDO::FETCH_OBJ);
        return $res;
    }
    public static function JourneesProchaines($bd,$idEquipe){

        $res=$bd->cnx->query("SELECT * FROM partie WHERE (idequipeRec='".$idEquipe."' or idequipeInv='".$idEquipe."') and journee > (SELECT Matches_jouee FROM calendrier WHERE idequipe='".$idEquipe."')");
        $res->setFetchMode(PDO::FETCH_OBJ);
        return $res;
    }


}