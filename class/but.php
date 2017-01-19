<?php
class But
{

    private $id;
    private $idjoueur;
    private $tempbut;
    private $idpartie;

    public function __construct($id,$idjoueur,$tempbut,$idpartie)
    {
        $this->id=$id;
        $this->idjoueur=$idjoueur;
        $this->tempbut=$tempbut;
        $this->idpartie=$idpartie;

    }

    public static function getButeurs($bd){

        $res=$bd->cnx->query("SELECT idjoueur, COUNT(*) as marque FROM but GROUP by idjoueur order BY marque DESC LiMIT 9");
        $res->setFetchMode(PDO::FETCH_OBJ);
        return $res;

    }
    public static function getNombredeButsMarques($bd,$idequipe,$idpartie){

        $res=$bd->cnx->query("SELECT COUNT(*) as nbrbut FROM `but` WHERE idjoueur in (SELECT id FROM joueur WHERE idequipe='".$idequipe."') and idpartie='".$idpartie."'");
        $res->setFetchMode(PDO::FETCH_OBJ);
        return $res;
    }
    public static function EquipesAppartenance($bd,$idjoueur){

        $res=$bd->cnx->query("select nom,Logo FROM equipe WHERE id=(SELECT idequipe FROM joueur WHERE id='".$idjoueur."')");
        $res->setFetchMode(PDO::FETCH_OBJ);
        return $res;
    }

}
?>