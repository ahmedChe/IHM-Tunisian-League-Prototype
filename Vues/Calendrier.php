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
    <title>Calendrier</title>

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
            <div class="panel panel-default" style="margin-bottom: 0px;">
                <div class="panel-heading">Calendrier</div>
                <div class="list-group" >
                    <div class="list-group-item">
                        <table class="table"style="margin-top: 20px;">


                            <?php

                            function affichCalendrier($retour,$db)
                            {
                                echo ("<tr>
                                <th>Journeé</th>
                                <th>DATE</th>
                                <th>Eequipe receveuse </th>
                                <th/>
                                <th style='margin-left:0px;padding-left: 14px;'>Vs</th>
                                <th/>
                                <th style='padding-left:130px;'>Equipe visiteuse</th>
                                </tr>");
                                $max=Equipe::maxIdMatch($db)[0]['val'];

                                foreach ($retour as $donnees)
                                {
                                    $id=$donnees['id'];
                                    $journee=$donnees['journee'];
                                    $date=$donnees['date'];
                                    $e1=$donnees['eq1'];
                                    $logo1=$donnees['log1'];
                                    if ($id<=$max){
                                        $BUT1=$donnees['BUT1'];
                                        $BUT2=$donnees['BUT2'];}
                                    else{
                                        $BUT1=" ";
                                        $BUT2=" ";}
                                    $e2=$donnees['eq2'];
                                    $logo2=$donnees['log2'];
                                    echo("

                                        <tr>
                                        <td style='line-height: 50px;padding-left: 30px;'>".stripslashes($journee)."</td>
                                        <td style='line-height: 50px;'>".stripslashes($date)."</td>
                                        <td style='width:250px;line-height: 50px;'><img src='".$logo1."'>&nbsp;&nbsp;".stripslashes($e1)."</td>
                                        <td style='line-height: 50px;' >". stripslashes($BUT1)."</td>
                                        <td style='padding-left:20px;line-height: 50px;'> - </td>
                                        <td style='line-height: 50px;'>".stripslashes($BUT2) ."</td>
                                        <td style='padding-left:130px;'><img src='".$logo2."'> &nbsp;&nbsp;". stripslashes($e2)."</td>

                                        </tr>");

                                }
                            }


                            if (isset($_GET['prev'])) {
                                //echo $_GET['prev'];
                                $som=$_GET['prev']-8;
                                $retour = Equipe::calender($db,$som);
                                affichCalendrier($retour,$db);
                                Equipe::$somMatch=$som;
                            }
                            elseif (isset($_GET['next'])) {
                                $som=$_GET['next']+8;
                                $retour = Equipe::calender($db,$som);
                                affichCalendrier($retour,$db);
                                Equipe::$somMatch=$som;
                            }
                            else
                            {
                                $result=Equipe::somMatch($db)[0]['val'];
                                $retour = Equipe::calender($db,$result);
                                affichCalendrier($retour,$db);
                                Equipe::$somMatch=$result;
                            }


                            ?>
                        </table> </div>
                    <center><nav>
                        <ul class="pagination pagination-lg"">
                        <li>
                            <?php if (Equipe::$somMatch>7) {print " <a href='Calendrier.php?prev=".Equipe::$somMatch."' aria-label='Previous'> ";} ?>
                            <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li>
                            <?php if (Equipe::$somMatch<32) {print " <a href='Calendrier.php?next=".Equipe::$somMatch."' aria-label='Next'> ";} ?>
                            <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                        </ul>
                    </nav>
                    </center>
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