<?php
include("../Include/db.php");
include ("../Class/but.php");
include ("../Class/Equipe.php");
include ("../Class/Partie.php");
include ("../Class/Calendrier.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>Last Week</title>
    <link rel="stylesheet"href="../Web/css/equipe.css">
    <link rel="stylesheet"href="../Web/css/bootstrap.css">
    <link rel="stylesheet"href="../Web/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Web/css/bootstrap-theme.css">
    <link rel="stylesheet" href="../Web/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../Web/js/bootstrap.js">
    <link rel="stylesheet" href="../Web/js/bootstrap.min.js">
    <link rel="stylesheet" href="../Web/js/npm.js">
    <link rel="stylesheet" href="../Web/js/draw.js">
</head>
<body style="font-weight: bold">
<?php include("Entete.php"); ?>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-10">
                        <div class="panel panel-default">
                        <div class="panel-heading">Derniére Semaine</div>
                    <div class="list-group" style="margin-top: 8px;">
                        <?php
                        $res=Calendrier::SomeParties($db);
                        $resultat=$res->fetch();
                        $partie=$resultat->somme-8;
                        $res2=Partie::getJournees($db,$partie);
                        while ($resultat2=$res2->fetch())
                        {
                            $res3=Equipe::getEquipeById($db,$resultat2->idequipeRec);
                            $resutat3=$res3->fetch();
                            $res4=Equipe::getEquipeById($db,$resultat2->idequipeInv);
                            $resutat4=$res4->fetch();
                            $res5=But::getNombredeButsMarques($db,$resultat2->idequipeRec,$resultat2->id);
                            $resultat5=$res5->fetch();
                            $res6=But::getNombredeButsMarques($db,$resultat2->idequipeInv,$resultat2->id);
                            $resultat6=$res6->fetch();
                            echo '<div class="row" style="height: 85px;padding-top: 15px;"><div class="col-md-5" style="padding-left: 140px;" >';
                            echo '<img style="height:40px;margin-right:15px" src="'.$resutat3->Logo.'"></img>'.$resutat3->nom;
                            echo '</div><div class="col-md-4" style="background-color: #C2C3C3;margin-left:20px;border-radius:5px;height: 35px;width: 52px; line-height: 3em;text-align:center;">';
                            echo $resultat5->nbrbut.'-'.$resultat6->nbrbut;
                            echo '</div><div class="col-md-5" style="padding-left:300px;margin-bottom: 12px;padding-right: 0px;">';
                            echo '<img style="height:40px;margin-right:15px" src="'.$resutat4->Logo.'"></img>'.$resutat4->nom;
                            echo '</div></div>';
                        }
                        ?>
                        </div>
                            <div class="col-md-1">
                            </div>
                        </div></div>
</div>
</div>
</body>
</html>
