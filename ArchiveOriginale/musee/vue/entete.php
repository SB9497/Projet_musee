
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Base -->
    <meta charset='UTF-32'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="icon" href="image/zxj.jpg" type="image/icon type" class='rounded-circle'>
    <title>Fallen File</title>

    <!-- Ajout Bootstrap-->
    <link href='./css/bootstrap.min.css' rel='stylesheet'>
    	<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css'>
    	<script src="https://code.jquery.com/jquery.js"></script>
		<script type="text/javascript" src="./js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

</head>
<!-- un fond est defini en fonction de l'oeuvre-->
<?php if(isset($oeuvre)){
    print('<body style="background: #'.$colors.';" class="text-white">');
}
else{
    print('<body class="bg-black text-white">');
}?>


<!--barre de navigation en bas de la page avec lien vers accueil une terminer-->
    <div class="d-flex flex-column flex-shrink-0 align-items-baseline" style="position:absolute; z-index: 3;">
        <ul class="nav nav-pills nav-flush flex-row mb-auto justify-content-center navbar-expand" style="position: fixed; bottom: 0;">
            <li class="nav-item">
                <a href="./?action=fil" class="nav-link active py-3 bg-transparent" style="opacity:1;" title="Accueil" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Collection">
                    <i class='fas fa-home' style='font-size:30px'></i>
                </a>
            </li><br>
            <!--menu de navigation crée un lien vers la page de collection-->
            <li class="nav-item">
                <a href="./?action=collection" class="nav-link active py-3 bg-transparent" style="mix-blend-mode: screen; opacity:1;" title="Collections" aria-current="page" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Collection">
                    <i class="fas fa-th" style="font-size:30px"></i>
                </a>
            </li><br>
            <?php if(isset($_GET["id_collection"]))
            {?>
                <li class="nav-item">
                    <a href="./?action=collection" class="nav-link active py-3 bg-transparent" style="opacity:1;" title="Retour" aria-current="page" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Collection">
                        <i class='fas fa-arrow-left' style='font-size:30px'></i>
                    </a>
                </li><br>
            <?php }
            elseif(isset($_GET["id_oeuvre"])){?>
                <li class="nav-item">
                    <?php print('<a href="./?action=collection&id_collection='.$oeuvre->getCollection().'\" class="nav-link active py-3 bg-transparent" style="opacity:1;" title="Retour" aria-current="page" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Collection">
                        <i class=\'fas fa-arrow-left\' style=\'font-size:30px\'></i>
                    </a>'); ?>
                </li><br>
            <?php }
            if(isLoggedOn()){
                if($_SESSION['id']==1){?>
                    <li>
                        <a href="./?action=ajout" class="nav-link active py-3 bg-transparent" style="opacity:1;" title="Creer" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Dashboard">
                            <i class='fas fa-plus' style='font-size:30px'></i>
                        </a>
                    </li><br>
                <?php }?>
                <li>
                    <a href="./?action=connexion&deco=true" class="nav-link active py-3 bg-transparent" style="opacity:1;" title="Deconnexion" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Dashboard">
                        <i class='fa fa-sign-out-alt' style='font-size:30px'></i>
                    </a>
                </li>
            <?php }
            else{?>
                <li>
                    <a href="./?action=connexion" class="nav-link active py-3 bg-transparent" title="Connexion" style="opacity:1;" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Orders">
                        <i class="fas fa-sign-in-alt" style="font-size:30px"></i>
                    </a>
                </li>
            <?php }?>
        </ul>
    </div><br>




<style>
    .cover {
        position:absolute;
        top:0;
        left:0;
        width:100%;
        height:100%;
        background-color: rgb(0, 0, 0);
        transition:opacity 0.15s ease-in;
        opacity:0;
        padding-top:80px;
        color:#fff;
        text-shadow:1px 1px 1px rgba(0,0,0,0.50);
    }

    .cover:hover {
        opacity:0.5;
    }
</style>


<style>
    #photos {
        /* Prevent vertical gaps */
        line-height: 0;

        -webkit-column-count: 3;
        -webkit-column-gap:   10px;
        -moz-column-count:    3;
        -moz-column-gap:      10px;
        column-count:         3;
        column-gap:           10px;
    }

    #photos img {
        /* Just in case there are inline attributes */
        width: 100% !important;
        height: auto !important;
    }

    @media (max-width: 1200px) {
        #photos {
            -moz-column-count:    4;
            -webkit-column-count: 4;
            column-count:         4;
        }
    }
    @media (max-width: 1000px) {
        #photos {
            -moz-column-count:    3;
            -webkit-column-count: 3;
            column-count:         3;
        }
    }
    @media (max-width: 800px) {
        #photos {
            -moz-column-count:    2;
            -webkit-column-count: 2;
            column-count:         2;
        }
    }
    @media (max-width: 400px) {
        #photos {
            -moz-column-count:    1;
            -webkit-column-count: 1;
            column-count:         1;
        }
    }
</style>
