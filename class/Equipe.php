<?php

/**
 * Created by PhpStorm.
 * User: !l-PazZ0
 * Date: 09/05/2016
 * Time: 02:55
 */
class Equipe
{
    private $id;
    private $nom;
    private $ville;
    private $stade;
    public static $somMatch;
    public function __construct($id,$nom,$ville,$stade)
    {
        $this->id=$id;
        $this->nom=$nom;
        $this->ville=$ville;
        $this->stade=$stade;

    }
    public static function getEquipeById($bd,$id){

        $res=$bd->cnx->query("select * from Equipe where id='".$id."'");
        $res->setFetchMode(PDO::FETCH_OBJ);
        return $res;
    }
    public static function AllTeam($bd){

        $res=$bd->cnx->query("select * from Equipe");
        $res->setFetchMode(PDO::FETCH_OBJ);
        return $res;
    }
    public static function classement_Equipes($bd)
    {
        $sql="SELECT `points`,`butsplus`,`butsmoin`,`gains`,`perdus`,`Egalite`,`Matches_jouee`,equipe.nom,equipe.Logo FROM `calendrier`,equipe WHERE equipe.id=calendrier.idequipe order by points DESC";
        $res=$bd->cnx->query($sql);
        return $res;
    }

    public static function calender($bd,$som)
    {
        $sql="SELECT partie.id,`journee`,`date`,e1.nom as eq1,e1.Logo as log1,(SELECT count(*) from but where but.idpartie=partie.id AND ( partie.idequipeRec in (SELECT 				idequipe from joueur WHERE joueur.id=but.idjoueur))) as BUT1,e2.nom as eq2,e2.Logo as log2,(SELECT count(*) from but where but.idpartie=partie.id AND 			     ( partie.idequipeInv in (SELECT idequipe from joueur WHERE joueur.id=but.idjoueur))) as BUT2 FROM `partie`, equipe e1, equipe e2 WHERE 				e1.id=`idequipeRec` and e2.id=`idequipeInv` ORDER BY `partie`.`id` ASC LIMIT ".$som.",8";
        //echo $sql;
        $res=$bd->cnx->query($sql);
        return $res;
    }

    public static function maxIdMatch($bd)
    {
        $sql="SELECT MAX(idpartie) as val FROM `but`";
        $res=$bd->getall($sql);
        return $res;
    }
    public static function somMatch($bd)
    {
        $sql="SELECT sum(`Matches_jouee`) as val FROM `calendrier`";
        $res=$bd->getall($sql);
        return $res;
    }
    public static function effectif($bd,$idequipe)
    {
        $sql="SELECT * FROM `joueur` WHERE `idequipe`='".$idequipe."'";
        $res=$bd->getAll($sql);
        return $res;
    }

    public static function butJoueur($bd,$idjoueur)
    {
        $sql="SELECT count(*) as val FROM `but` WHERE `idjoueur`='".$idjoueur."'";
        $res=$bd->getAll($sql);
        return $res;
    }

    public static function nbrTousTitres($bd,$nomEquipe)
    {
        $sql="SELECT count(*) as val FROM `palmares` WHERE `nomEquipe`='".$nomEquipe."'";
        $res=$bd->getAll($sql);
        return $res;
    }



    public static function nbrTitres($bd,$nomEquipe,$comp)
    {
        $sql="SELECT count(*) as val FROM `palmares` WHERE `nomEquipe`='".$nomEquipe."' and titre='".mysql_real_escape_string($comp)."'";
        $res=$bd->getAll($sql);
        return $res;
    }

    public static function saisonsTitres($bd,$nomEquipe,$comp)
    {
        $sql="SELECT saison FROM `palmares` WHERE `nomEquipe`='".$nomEquipe."' and titre='".mysql_real_escape_string($comp)."'";
        $res=$bd->getAll($sql);
        return $res;
    }


    public static function competitions($bd)
    {
        $sql="SELECT DISTINCT `titre` FROM `palmares`";
        $res=$bd->getAll($sql);
        return $res;
    }
}
?>