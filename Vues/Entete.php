<?php

function echoActiveClassIfRequestMatches($requestUri)
{
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

    if ($current_file_name == $requestUri)
        echo 'class="active"';
}

?>
<style>
    .yamm .dropdown.yamm-fw .dropdown-menu {
        left: 0;
        right: 0;
    }
    .yamm .nav,
    .yamm .dropdown {
        position: static;
    }
    .yamm .dropdown-menu {
        left: auto;
    }
    .yamm .yamm-content {
        padding: 20px 30px;
    }
    nav.navbar.yamm.navbar-default
    {
        height: 48px;
    }
</style>
<script src="../web/Panel/jquery.js"></script>
<script src="../web/Panel/bootstrap.min.js"></script>
<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?lang=css"></script>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <img class="ftf" src="../web/images/LOGO-FTF.png">
            <p id="demo"></p>
        </div>
        <div class="col-md-8">
            <ul class="equipes">
                <?php
                $res=Equipe::AllTeam($db);
                while($resultat=$res->fetch())
                {
                    echo'<a href="'.$resultat->Site.'"><img src="'.$resultat->Logo.'"></a>&nbsp;';
                }

                ?>
            </ul>
        </div>
        <div class="col-md-2">
        </div>
    </div>
    <?php include("Slider.php"); ?>
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-10" style="height: 42px;">
            <nav   style="margin-bottom: 0px;height: 44px;" class="navbar yamm navbar-default" role="navigation">
                <ul class="nav nav-tabs" style="background-color: #DFE8E7;">
                    <li <?=echoActiveClassIfRequestMatches("index")?> ><a href="index.php">Acceuil</a></li>
                    <li  <?=echoActiveClassIfRequestMatches("News")?>><a href="../Vues/News.php" >News</a></li>
                    <li  <?=echoActiveClassIfRequestMatches("Calendrier")?> ><a href="Calendrier.php">Calendrier</a></li>
                    <li  <?=echoActiveClassIfRequestMatches("Classement")?> ><a href="Classement.php">Classement</a></li>
                    <li  <?=echoActiveClassIfRequestMatches("LastWeek")?> ><a href="LastWeek.php">Dernier Semaine</a></li>
                    <li  <?=echoActiveClassIfRequestMatches("BestPlayer")?> ><a href="BestPlayer.php" >Buteurs</a></li>
                    <li  <?=echoActiveClassIfRequestMatches("Palmares")?>><a href="Palmares.php">Palmares</a></li>
                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Equipes</a>
                        <ul class="dropdown-menu" style="background-color: #eee;margin-top: -7px;">
                            <li style="height: 80px;">
                                <div class="yamm-content" style="margin: 0px;padding: 0px;">
                                    <div class="row">
                                        <ul class="equipes" style="margin-top:15px;padding-left:60px;">
                                            <?php
                                            $res=Equipe::AllTeam($db);
                                            while($resultat=$res->fetch())
                                            {
                                                echo'<li style="width: 70px;float: left;list-style-type: none; "'.echoActiveClassIfRequestMatches("Equipe").'><a href="Equipe.php?id='.$resultat->id.'"><img style="width:65px;"src="'.$resultat->Logo.'"></a>&nbsp;</li>';
                                            }

                                            ?>
                                        </ul>
                                    </div>
                                    </div>
                            </li>
                        </ul>
                    </li>

                </ul>
            </nav>

        </div>

        <div class="col-md-1">
        </div>
    </div>
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
                <table style="border-radius: 5px;">
                    <tr style="background-color: #fff;height: 60px;font-weight: bold;">
                        <td STYLE="width: 10px;"></td>
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
                            echo '<td width="160;border: medium silver"><div class="col-md-3" style="width:50px;margin: 0px;padding-right:0px;padding-left: 5px;margin-right: 2px;height: 45px;">';
                            echo '<a href="Equipe.php?id='.$resutat3->id.'"><img style="width:50px;" src="'.$resutat3->Logo.'"></a>';
                            echo '</div><div class="col-md-4" style="background-color:#D8D8D8;width:36px;padding-left:6px;padding-right:6px;margin-left: 5px;margin-top: 11px;line-height:25px;height: 25px;border-radius: 5px;" >';
                            echo $resultat5->nbrbut.'-'.$resultat6->nbrbut;
                            echo '</div><div class="col-md-3"  style="width:55px;margin: 0px;padding-right:0px;padding-left: 0px;margin-left: 2px">';
                            echo '<a href="Equipe.php?id='.$resutat4->id.'"><img style="width:50px;" src="'.$resutat4->Logo.'"></a>';
                            echo '</div></div></td>';
                        }
                        ?>
                        <td STYLE="width: 10px;"></td>
                    </tr>
                </table>
            </div>
            <div class="col-md-1">
            </div>
    </div>

</div>