<?php
include("../Include/db.php");
include("../Class/but.php");
include("../Class/Joueur.php");
include("../Class/Equipe.php");
include("../Class/Partie.php");
include("../Class/Calendrier.php");
include("../Class/Designation.php");
include("../Class/News.php");
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>EQUIPE</title>

    <link rel="stylesheet" href="../Web/css/equipe.css">
    <link rel="stylesheet" href="../Web/css/bootstrap.css">
    <link rel="stylesheet" href="../Web/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Web/css/bootstrap-theme.css">
    <link rel="stylesheet" href="../Web/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../Web/js/bootstrap.js">
    <link rel="stylesheet" href="../Web/js/bootstrap.min.js">
    <script src="../web/Jquery/Jquery1-12-2.js"></script>
    <script src="../web/Jquery/Bootstrap3-3-6.min.js"></script>
</head>
<body>
<?php include("Entete.php"); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-10">
            <div class="panel panel-default" style="margin-bottom: 0px;">
                <div class="panel-heading" style="font-weight: bolder;font-size: 1.2em;">INFO</div>
            </div>
            <div class="row">
                <div class="col-md-6" style="padding-right: 0px;">
                    <div class="panel panel-default" style="margin-bottom: 0px;height: 279px;">
                        <?php
                        $id = $_GET['id'];
                        $res = Equipe::getEquipeById($db, $id);
                        $resultat = $res->fetch();
                        echo '<img src="' . $resultat->Sigle . '" style="height:250px;width:250px;margin-top:13px;margin-left:195px;">';
                        $nomEquipe = $resultat->nom;
                        ?>
                    </div>
                </div>


                <div class="col-md-6" style="padding-left: 0px;">
                    <div class="panel panel-default"
                         style="margin-bottom: 0px;padding: 30px;padding-top: 6px;padding-bottom: 5px;">
                        <?php

                        echo ' <table class="table"><tr style="font-size: 1.4em"><td style="font-weight: bold;">Couleurs :</td><td>' . $resultat->Couleurs . '</td></tr>';
                        echo '<tr style="font-size: 1.4em"><td style="font-weight: bold;">Abréviation :</td><td>' . $resultat->Abreviation . '</td></tr>';
                        echo '<tr style="font-size: 1.4em"><td style="font-weight: bold;">Fondation :</td><td>' . $resultat->Fondation . '</td></tr>';
                        echo '<tr style="font-size: 1.4em"><td style="font-weight: bold;">Stade :</td><td>' . $resultat->stade . '</td></tr>';
                        echo '<tr style="font-size: 1.4em"><td style="font-weight: bold;">Président :</td><td>' . $resultat->Président . '</td></tr>';
                        echo '<tr style="font-size: 1.4em"><td style="font-weight: bold;">Entraîneur :</td><td>' . $resultat->Entraîneur . '</td></tr></table>';

                        ?>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-left: 0px;margin-right: 0px;">
                <ul class="nav nav-tabs" style="background-color: #f5f5f5">
                    <li class="active"><a data-toggle="tab" href="#effectif">Effectif</a></li>
                    <li><a data-toggle="tab" href="#matches">Matches</a></li>
                    <?php
                    $somme=0;
                    $comps = Equipe::competitions($db);
                    foreach ($comps as $compit)
                    {
                        $comp = $compit['titre'];
                        $somme=$somme+Equipe::nbrTitres($db, $nomEquipe, $comp)[0]['val'];

                    }
                    if ($somme>0)
                    {
                        echo '<li><a data-toggle="tab" href="#Palmares">Palmares</a></li>';
                    }
                    ?>

                </ul>
                <div class="tab-content">
                    <div id="effectif" class="tab-pane fade in active">
                        <div class="list-group">
                            <div class="list-group-item">
                                <table class="table" style="margin-top: 30px;">
                                    <thead>
                                    <tr>
                                    <tr>
                                        <th style="font-weight: bolder;font-size: 1.3em;">Nom</
                                        >
                                        <th style="font-weight: bolder;font-size: 1.3em;">Prenom</th>
                                        <th style="font-weight: bolder;font-size: 1.3em;">
                                            <center>Nationalite</center>
                                        </th>
                                        <th style="font-weight: bolder;font-size: 1.3em;">
                                            <center>Poste</center>
                                        </th>
                                        <th style="font-weight: bolder;font-size: 1.3em;">
                                            <center>Numero</center>
                                        </th>
                                        <th style="font-weight: bolder;font-size: 1.3em;">
                                            <center>Buts</center>
                                        </th>

                                    </tr>
                                    </thead>

                                    <tbody>

                                    <?php


                                    $retour = Equipe::effectif($db, $id);
                                    foreach ($retour as $donnees) {
                                        $idj = $donnees['id'];
                                        $nom = $donnees['nom'];
                                        $prenom = $donnees['prenom'];
                                        $pays = $donnees['pays'];
                                        $poste = $donnees['poste'];
                                        $numero = $donnees['numero'];
                                        $but = Equipe::butJoueur($db, $idj)[0]['val'];
                                        ?>

                                        <tr>
                                            <td style=" width:160px;font-weight: bold; "><?php echo stripslashes($nom); ?></td>
                                            <td style=" width:140px;font-weight: bold; "><?php echo stripslashes($prenom); ?></td>
                                            <td style=" width:110px;font-weight: bold; ">
                                                <center><?php echo stripslashes($pays); ?></center>
                                            </td>
                                            <td style=" width:110px;font-weight: bold; ">
                                                <center><?php echo stripslashes($poste); ?></center>
                                            </td>
                                            <td style=" width:110px;font-weight: bold; ">
                                                <center><?php echo stripslashes($numero); ?></center>
                                            </td>
                                            <td style=" width:110px;font-weight: bold; ">
                                                <center><?php echo stripslashes($but); ?></center>
                                            </td>

                                        </tr>

                                        <?php
                                    }
                                    ?>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                    <div id="Palmares" class="tab-pane fade">
                        <div class="list-group">
                            <div class="list-group-item">
                                <table class="table" style="margin-top: 30px;font-weight: bold">
                                    <thead>
                                    <tr>
                                    <tr>

                                        <th style="font-size: 1.2em;line-height: 30px;">Competition</th>
                                        <th style="font-size: 1.2em;line-height: 30px;">Titres</th>
                                        <th style="font-size: 1.2em;line-height: 30px;"><center>Saisons</center></th>
                                    </tr>
                                    </thead>

                                    <tbody>

                                    <?php

                                    $comps = Equipe::competitions($db);
                                    foreach ($comps as $compit) {
                                        $comp = $compit['titre'];
                                        $titres = Equipe::nbrTitres($db, $nomEquipe, $comp)[0]['val'];
                                        if ($titres > 0) {
                                            $ret = Equipe::saisonsTitres($db, $nomEquipe, $comp);
                                            $saisons = "";
                                            foreach ($ret as $don) {
                                                $saisons .= $don['saison'] . ' ';
                                            }

                                            ?>

                                            <tr>

                                                <td style="padding-left: 15px;"><?php echo stripslashes($comp); ?></td>
                                                <td style="padding-left: 25px;"><?php echo stripslashes($titres); ?></td>
                                                <td><center><?php echo stripslashes($saisons); ?></center></td>
                                            </tr>
                                            <?php


                                        }
                                    }


                                    ?>

                                    </tbody>
                                </table>
                                </di>
                            </div>
                        </div>

                    </div>
                    <div id="matches" class="tab-pane fade">
                        <div class="list-group" style="margin-bottom: 0px;">
                            <div class="list-group-item">
                                <table class="table" style="font-weight: bold" >
                                    <?php

                                    $res=Partie::JourneePasse($db,$id);
                                    while ($resultat=$res->fetch())
                                    {
                                        $res3=Equipe::getEquipeById($db,$resultat->idequipeRec);
                                        $resultat3=$res3->fetch();
                                        $res4=Equipe::getEquipeById($db,$resultat->idequipeInv);
                                        $resultat4=$res4->fetch();
                                        $res5=But::getNombredeButsMarques($db,$resultat->idequipeRec,$resultat->id);
                                        $resultat5=$res5->fetch();
                                        $res6=But::getNombredeButsMarques($db,$resultat->idequipeInv,$resultat->id);
                                        $resultat6=$res6->fetch();
                                        ?>
                                        <tr style="background-color: #f5f5f5;padding-left: 20px;">
                                            <td colspan="3"> Journée <?php echo $resultat->journee ?></td>
                                        </tr>

                                            <?php
                                            if ($resultat5->nbrbut==$resultat6->nbrbut)
                                            {
                                                echo'<tr><td style="width:540px;"><img style="margin-right: 8px;" src="'.$resultat3->Logo.'">'.$resultat3->nom.'</td>';
                                                echo '<td style="line-height: 50px;background-color: #E2DAD9;padding-left: 40px;width: 100px;">'.$resultat5->nbrbut.'-'.$resultat6->nbrbut.'</td>';
                                                echo '<td style="float: right;">'.$resultat4->nom.'<img style="margin-left: 8px;" src="'.$resultat4->Logo.'"> </td></tr>';
                                            }
                                            else
                                            {
                                                if ((($resultat->idequipeRec==$id)&& ($resultat5->nbrbut>$resultat6->nbrbut))||(($resultat->idequipeInv==$id)&& ($resultat5->nbrbut<$resultat6->nbrbut)))
                                                {
                                                    echo'<tr><td style="width:540px;" ><img style="margin-right: 8px;" src="'.$resultat3->Logo.'">'.$resultat3->nom.'</td>';
                                                    echo '<td style="line-height: 50px;background-color: #8ED198;padding-left: 40px;width: 100px;">'.$resultat5->nbrbut.'-'.$resultat6->nbrbut.'</td>';
                                                    echo '<td style="float: right;">'.$resultat4->nom.'<img style="margin-left: 8px;" src="'.$resultat4->Logo.'"> </td></tr>';

                                                }
                                                else
                                                {
                                                    echo'<tr><td style="width:540px;"><img style="margin-right: 8px;"src="'.$resultat3->Logo.'">'.$resultat3->nom.'</td>';
                                                    echo '<td style="line-height: 50px;background-color: #F08072;padding-left: 40px;width: 100px;">'.$resultat5->nbrbut.'-'.$resultat6->nbrbut.'</td>';
                                                    echo '<td style="float: right;">'.$resultat4->nom.'<img style="margin-left: 8px;" src="'.$resultat4->Logo.'"> </td></tr>';

                                                }

                                            }


                                            ?>

                                        <?php
                                    }
                                    $res=Partie::JourneesProchaines($db,$id);
                                    while ($resultat=$res->fetch())
                                    {

                                        $res3 = Equipe::getEquipeById($db, $resultat->idequipeRec);
                                        $resultat3 = $res3->fetch();
                                        $res4 = Equipe::getEquipeById($db, $resultat->idequipeInv);
                                        $resultat4 = $res4->fetch();
                                        ?>
                                        <tr style="background-color: #f5f5f5;padding-left: 20px;">
                                            <td colspan="3"> Journée <?php echo $resultat->journee ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width:540px;"><img style="margin-right: 8px;" src="<?php echo $resultat3->Logo ?>"><?php echo $resultat3->nom ?> </td>
                                            <td style="line-height: 50px;padding-left: 45px;width: 100px;">&nbsp;-</td>
                                            <td style="float: right;"><?php echo $resultat4->nom ?> <img style="margin-left: 8px;" src="<?php echo $resultat4->Logo ?>"></td>
                                        </tr>

                                        <?php
                                    }
                                    ?>
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
</body>
</html>