<?php
include("../Include/db.php");
include ("../Class/but.php");
include ("../Class/Joueur.php");
include ("../Class/Equipe.php");
include ("../Class/Partie.php");
include ("../Class/Calendrier.php");
include ("../Class/Designation.php");
include ("../Class/News.php");
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
                    <div class="panel-heading">Classement de la Ligue</div>
                    <div class="list-group" >
                        <div class="list-group-item">
                            <table class="table" style="height: 450px;margin-bottom: 0px;">
                                <thead>
                                <tr>
                                    <th>Equipe</th>
                                    <th>Points</th>
                                    <th>Jouées</th>
                                    <th>gains</th>
                                    <th>Pertes</th>
                                    <th>Egalités</th>
                                    <th>Buts+</th>
                                    <th>Buts-</th>
                                    <th>Difference</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $retour = Equipe::classement_Equipes($db);
                                foreach ($retour as $donnees)
                                {
                                    $equipe = $donnees['nom'];
                                    $Logos = $donnees['Logo'];
                                    $points = $donnees['points'];
                                    $butsplus = $donnees['butsplus'];
                                    $butsmoin = $donnees['butsmoin'];
                                    $gains = $donnees['gains'];
                                    $Egalite = $donnees['Egalite'];
                                    $perdus = $donnees['perdus'];
                                    $Matches = $donnees['Matches_jouee'];

                                ?>
                                <tr>
                                    <td><?php echo '<img src="'.stripslashes($Logos).'">  '. stripslashes($equipe); ?></td>
                                    <td style="line-height: 50px;padding-left: 25px;"><?php echo stripslashes($points); ?></td>
                                    <td style="line-height: 50px;padding-left: 25px;"><?php echo stripslashes($Matches); ?></td>
                                    <td style="line-height: 50px;padding-left: 25px;"><?php echo stripslashes($gains); ?></td>
                                    <td style="line-height: 50px;padding-left: 25px;"><?php echo stripslashes($perdus); ?></td>
                                    <td style="line-height: 50px;padding-left: 25px;"><?php echo stripslashes($Egalite); ?></td>
                                    <td style="line-height: 50px;padding-left: 25px;"><?php echo stripslashes($butsplus); ?></td>
                                    <td style="line-height: 50px;padding-left: 25px;"><?php echo stripslashes($butsmoin); ?></td>
                                    <td style="line-height: 50px;padding-left: 25px;"><?php
                                        if (($butsplus-$butsmoin)>0)
                                        {
                                            echo '+';

                                         }
                                            echo stripslashes($butsplus)- stripslashes($butsmoin);
                                        ?></td>


                                </tr>
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