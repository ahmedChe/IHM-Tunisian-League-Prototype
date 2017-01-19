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
            <div class="media well">
            <?php
            $id=$_GET['id'];
            $res=News::SpecifiedNews($db,$id);
            $resultat=$res->fetch();
                echo '<a href="#" class="pull-left"><img src="'.$resultat->image.'" style="height:500px;width:700px;" class="media-object" /></a>';
                echo'<div class="media-body"><h1 class="media-heading" style="font-weight: bold;margin-bottom: 50px;padding-left: 15px;padding-right: 15px;">';
                echo $resultat->titre.'</h1>';
                echo '<h4 style="padding-left: 25px;padding-right: 25px;text-align: justify;text-justify: inter-word;">'.$resultat->contenu.'</h4>';
                    ?>
                </div>
            </div>
        <div class="col-md-1">
        </div>
            <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-10" style="width: 1250px;padding-right: 0px;">
                <?php
                $nombre=0;
                $res=News::AllNews($db);
                while(($resultat=$res->fetch())&& $nombre<3)
                {
                    if ($id!=$resultat->id_article)
                    {
                        if ($nombre==2)
                        {
                            echo'<div class="col-md-4" style="height:500px;width: 410px;padding-left: 5px;">';
                        }
                        else
                        {
                            echo'<div class="col-md-4" style="height:500px;width: 410px;padding-left: 0px;padding-right: 35px;">';

                        }
                        echo'<div class="thumbnail" style="height:480px;width: 380px;">';
                           echo '<img src="'.$resultat->image.'" style="height:220px;width:460px;" />';
                        echo '<div class="caption">';
                        echo '<h3 style="margin-bottom: 25px;">'.$resultat->titre.'</h3>';
                                echo'<p style="padding-left: 10px;padding-right: 10px;text-align: justify;text-justify: inter-word;">'.$resultat->Recapitulation.'<br><br><a href="SpecifiedNews.php?id='.$resultat->id_article.'">>>Plus Details</a></p>';

                         echo'</div></div></div>';
                        $nombre++;
                    }
                }
                ?>

                </div>
                <div class="col-md-1">
                </div>
            </div>
        </div>
    </div>
</div>
    </body>
</html>
