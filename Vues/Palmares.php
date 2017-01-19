<?php
include("../Include/db.php");
include ("../Class/but.php");
include ("../Class/Joueur.php");
include ("../Class/Equipe.php");
include ("../Class/Partie.php");
include ("../Class/Calendrier.php");
include ("../Class/Designation.php");
include ("../Class/News.php");
include("../Class/Palmares.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>Classement</title>

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
<body>
<?php include("Entete.php"); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-10">
            <div class="panel panel-default" style="margin-bottom: 0px;">
                <div class="panel-heading">Palmares des Equipes</div>
                <div class="list-group" >
                    <div class="list-group-item">
                        <table class="table" style="height: 450px;margin-bottom: 0px;">
                            <thead>
                            <tr>
                                <th style= 'padding-left:80px;font-size: 1.3em;font-weight: bold'>Equipe</th>
                                <th style= 'padding-left:80px;font-size: 1.3em;font-weight: bold'>Titres</th>
                                <th style= 'padding-left:180px;font-size: 1.3em;font-weight: bold'>Années</th>
                            </tr>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $equipes=Palmares::DisplayTtitles($db);
                            foreach ($equipes as $data)
                            {
                            $nomequipe=$data['nomEquipe'];
                            $somme=$data['somme'];
                            $retour = Palmares::championnat_ChaqueEquipe($db,$nomequipe);
                            $saison="";
                            foreach ($retour as $donnees)
                            {
                                $saison=$saison." ".$donnees['saison'];
                            }

                            ?>
                            <tr>
                                <td style= 'padding-left:80px;font-weight: bold'><?php echo stripslashes($nomequipe); ?></td>
                                <td style= 'padding-left:90px;font-weight: bold'><?php echo stripslashes($somme); ?></td>
                                <td style= 'padding-left:180px;padding-right: 220px;font-weight: bold;vertical-align:middle; '><?php echo stripslashes($saison); ?></td>

                                <?php

                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-1">
</div>
</div>
</div>
</div>
</div>
</body>
</html>