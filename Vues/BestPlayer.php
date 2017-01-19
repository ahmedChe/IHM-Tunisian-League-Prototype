<?php
include("../Include/db.php");
include ("../Class/but.php");
include ("../Class/Equipe.php");
include ("../Class/Partie.php");
include ("../Class/Calendrier.php");
include ("../Class/Joueur.php");
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
                                <div class="panel-heading">Meilleurs Buteurs</div>
                                <div class="list-group">
                                    <div class="list-group-item">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>
                                                    Rank
                                                </th>
                                                <th>
                                                    Player
                                                </th>
                                                <th>
                                                    Team
                                                </th>
                                                <th>
                                                    Goals
                                                </th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $cpt=1;
                                            $res=but::getButeurs($db);
                                            while ($resultat=$res->fetch())
                                            {
                                                $res2=Joueur::getJoueurById($db,$resultat->idjoueur);
                                                $resultat2=$res2->fetch();
                                                $res3=But::EquipesAppartenance($db,$resultat->idjoueur);
                                                $resultat3=$res3->fetch();
                                                echo "<tr><td style='line-height: 60px';>".$cpt."</td><td style='line-height: 60px';>".$resultat2->nom." ".$resultat2->prenom."</td><td style='line-height: 60px';><img src='".$resultat3->Logo."'> ".$resultat3->nom."</td><td style='line-height: 60px';>".$resultat->marque."</td></tr>";
                                                $cpt++;
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
</body>
</html>
