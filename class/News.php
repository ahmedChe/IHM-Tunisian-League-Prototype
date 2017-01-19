<?php

/**
 * Created by PhpStorm.
 * User: !l-PazZ0
 * Date: 15/05/2016
 * Time: 14:47
 */
class News
{
    private $id_article;
    private $titre;
    private $contenu;
    private $image;

    public function __construct($id_article,$titre,$contenu,$image)
    {
        $this->id_article=$id_article;
        $this->titre=$titre;
        $this->contenu=$contenu;
        $this->image=$image;
    }
    public static function TopNews($bd){

        $res=$bd->cnx->query("SELECT * FROM news ORDER BY id_article DESC LIMIT 1");
        $res->setFetchMode(PDO::FETCH_OBJ);

        return $res;
    }

    public static function LastNews($bd,$limite){

        $res=$bd->cnx->query("SELECT * FROM news ORDER BY id_article DESC LIMIT 1,".$limite);
        $res->setFetchMode(PDO::FETCH_OBJ);
        return $res;
    }
    public static function SpecifiedNews($bd,$id){

        $res=$bd->cnx->query("SELECT * FROM news where id_article='".$id."' ORDER BY id_article");
        $res->setFetchMode(PDO::FETCH_OBJ);
        return $res;
    }
    public static function AllNews($bd){

        $res=$bd->cnx->query("SELECT * FROM news ORDER BY id_article");
        $res->setFetchMode(PDO::FETCH_OBJ);
        return $res;
    }
    public static function LastSixNews($bd){

        $res=$bd->cnx->query("SELECT * FROM news ORDER BY id_article DESC LIMIT 0,6");
        $res->setFetchMode(PDO::FETCH_OBJ);
        return $res;
    }
}