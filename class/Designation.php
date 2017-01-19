<?php

/**
 * Created by PhpStorm.
 * User: !l-PazZ0
 * Date: 15/05/2016
 * Time: 01:26
 */
class Designation
{
    private $id_designation;
    private $id_partie;
    private $temp_depart;
    private $arbitre;

    public function __construct($id_designation,$id_partie,$temp_depart,$arbitre)
    {
        $this->id_designation=$id_designation;
        $this->id_partie=$id_partie;
        $this->temp_depart=$temp_depart;
        $this->arbitre=$arbitre;
    }
    public static function TimePartie($bd,$id){

        $res=$bd->cnx->query("select * from designation where id_partie='".$id."'");
        $res->setFetchMode(PDO::FETCH_OBJ);
        return $res;
    }
}