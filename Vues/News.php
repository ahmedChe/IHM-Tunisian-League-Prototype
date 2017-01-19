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
        <title>News</title>

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
            <div class="row">
                <?php
                $res=News::LastSixNews($db);
                while($resultat=$res->fetch())
                {
                    echo'<div class="col-md-4" style="height:500px;">';
                    echo'<div class="thumbnail" style="height:480px;">';
                       echo '<img src="'.$resultat->image.'" style="height:220px;width:460px;" />';
                    echo '<div class="caption">';
                    echo '<h3 style="margin-bottom: 25px;">'.$resultat->titre.'</h3>';
                            echo'<p style="padding-left: 10px;padding-right: 10px;text-align: justify;text-justify: inter-word;">'.$resultat->Recapitulation.'<br><br><a href="SpecifiedNews.php?id='.$resultat->id_article.'">>>Plus Details</a></p>';

                     echo'</div></div></div>';
                    }
                ?>


            </div>
        </div>
        <div class="col-md-1">
            <div>
    </div>
</div>
    </body>
</html>
