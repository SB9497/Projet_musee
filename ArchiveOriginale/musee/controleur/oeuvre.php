<?php
include_once './modele/oeuvre.php';
include_once './modele/avis.php';
include_once './modele/utilisateur.php';


if(isset($_GET['id_oeuvre']))
{
    //recuperation des variable pour commenter
    if (isset($_GET["id_oeuvre"]) && isset($_POST["commentaire"]) && isLoggedOn()){
        $oeuvre=$_GET["id_oeuvre"];
        $commentaire=$_POST["commentaire"];
        $date = date(Y-m-d);
        $utilisateur = $_SESSION["id"];

        if(!dao_avis::addavis($utilisateur, $oeuvre, $commentaire, $date)){
            $message = "commentaire limité à un par oeuvre et par personne";
        }

    }

    $oeuvre = dao_oeuvre::getoeuvrebyid($_GET['id_oeuvre']);
    $tab_commentaire = dao_avis::getavisbyoeuvre($_GET['id_oeuvre']);

    $num_results = 1;
    $delta = 24;
    $reduce_brightness = 1;
    $reduce_gradients = 1;

    include_once("./modele/colors.inc.php");
    $ex=new GetMostCommonColors();
    $colors=$ex->Get_Color("./image/".$oeuvre->getChemin(), $num_results, $reduce_brightness, $reduce_gradients, $delta);

    include './vue/entete.php';
    include './vue/oeuvre.php';
    include './vue/pied.php';
}
else{
    include 'accueil.php';
}