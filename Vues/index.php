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
    <meta charset="UTF-8">
    <title>Index</title>

    <link rel="stylesheet"href="../Web/css/equipe.css">
    <link rel="stylesheet"href="../Web/css/bootstrap.css">
    <link rel="stylesheet"href="../Web/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Web/css/bootstrap-theme.css">
    <link rel="stylesheet" href="../Web/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../Web/js/bootstrap.js">
    <link rel="stylesheet" href="../Web/js/bootstrap.min.js">
    <link rel="stylesheet" href="../Web/js/npm.js">
    <link rel="stylesheet" href="../Web/js/draw.js">
    <link rel="stylesheet" href="../Web/js/activePersonalise.js">

</head>
<body id="index">
<?php include("Entete.php"); ?>
<div class="container-fluid">
    <div class="row" >
        <div class="col-md-1">
        </div>
        <div class="col-md-10">
            <div class="jumbotron" style="margin-bottom: 0px;padding-top: 15px;" >
                <?php
                $res=News::TopNews($db);
                $resultat=$res->fetch();
                ?>
                <h1 style="margin-top: 0px;margin-bottom: 35px;color: #C2C3C3">Derniers News</h1>
                <h3><?php echo  $resultat->titre ?> </h3>
                <h4><?php echo  $resultat->Recapitulation ?><br>
                    <a class="btn btn-default" href="LastNews.php" role="button" style="position:relative;left: 85%;margin-top: 18px;">Lire la suite</a>
                </h4>

            </div>
            <div class="row">
                <div class="col-md-7" style="padding-right:1px">

                    <div class="panel panel-default" style="margin-bottom: 0px;" >
                    <div class="panel-heading">FIXTURES</div>
                    <div class="list-group">
                        <?php
                        $res=Calendrier::SomeParties($db);
                        $resultat=$res->fetch();
                        $somme=$resultat->somme;
                        $res2=Partie::getJournees($db,$somme);
                        $date=0;
                        while ($resultat2=$res2->fetch())
                        {
                            if ($date!=$resultat2->date)
                            {
                                echo'<div class="panel-heading" style="background-color: #C2C3C3;height: 47px;">'.$resultat2->date.'</div>';
                                $date=$resultat2->date;
                            }
                            $res3=Equipe::getEquipeById($db,$resultat2->idequipeRec);
                            $resultat3=$res3->fetch();
                            $res4=Equipe::getEquipeById($db,$resultat2->idequipeInv);
                            $resultat4=$res4->fetch();
                            $res5=Designation::TimePartie($db,$resultat2->id);
                            $resultat5=$res5->fetch();
                            echo"<div class='list-group-item'>";
                            echo'<p class="list-group-item-text" style="background-color: red">';
                            echo'<div class="container-fluid">';
                            echo'<div class="row" style="height:35px;" >';
                            echo'<div class="col-md-4">';

                            echo '<img style="height:40px;margin-right:15px" src="'.$resultat3->Logo.'"></img>';
                            echo $resultat3->nom;
                                echo'</div>';
                            echo'<div class="col-md-4">';
                            echo '<img style="height:40px;margin-right:15px" src="'.$resultat4->Logo.'"></img>';
                            echo $resultat4->nom;
                            echo'</div>';
                            echo'<div class="col-md-4" style="background-color: #C2C3C3;border-radius:5px;height: 38px;width: 52px; line-height: 3em;margin-left: 80px;padding-left:7px;margin-top: 4px;">';
                            echo substr($resultat5->temp_depart,0,5);
                            echo'</div>';

                            echo'</div></p></div>';
                             echo "</div>";
                        }
                        ?>

                    </div>
                        </div>

                </div>
                <br>
                <br>

                <div class="col-md-5" style="padding-left: 0px;margin-top: -37px;">
                    <div class="panel panel-default" style="margin-bottom: 0px;">
                        <div class="panel-heading">Classement de la Ligue</div>
                    <div class="list-group" >
                        <div class="list-group-item">
                            <table class="table" style="height: 450px;margin-bottom: 0px;">
                                <thead>
                                <tr>
                                    <th>
                                        Rank
                                    </th>
                                    <th>
                                        Team
                                    </th>
                                    <th>
                                        Pld
                                    </th>
                                    <th>
                                        Points
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $cpt=1;
                                $res=Calendrier::getAllTeam($db);
                                while ($resultat=$res->fetch())
                                {
                                    $res2=Equipe::getEquipeById($db,$resultat->idequipe);
                                    $resultat2=$res2->fetch();
                                    echo "<tr><td>".$cpt."</td><td>".$resultat2->nom."</td><td>".$resultat->Matches_jouee."</td><td>".$resultat->points."</td></tr>";
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
        <div class="col-md-1">
        </div>
    </div>
</div>

</body>
</html>