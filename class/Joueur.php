<?php

/**
 * Created by PhpStorm.
 * User: !l-PazZ0
 * Date: 09/05/2016
 * Time: 02:57
 */
class Joueur
{
    private $id;
    private $nom;
    private $prenom;
    private $idequipe;

    public function __construct($id,$nom,$prenom,$idequipe)
    {
        $this->id=$id;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->idequipe=$idequipe;

    }
    public static function getJoueurById($bd,$id){

        $res=$bd->cnx->query("select * from Joueur where id='".$id."'");
        $res->setFetchMode(PDO::FETCH_OBJ);
        return $res;
    }

}