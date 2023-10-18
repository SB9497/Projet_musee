<?php
include_once 'modele/connexion.php';
include_once "controleur/controleur_principal.php";

//ça ça recupere le bouton sur lequel vous avez cliqué
if (isset($_GET["action"]))
{
    $action = $_GET["action"];
}
else
{
    $action = "defaut";
}

// pour gerer les fichiers et avoir un apercu
function count_files($folder)
{
     // on rajoute le / à la fin du nom du dossier s'il ne l'est pas, garanti le chemin du dossier
     if(substr($folder, -1) != '/')
        $folder .= '/';

     // ouverture du répertoire
     $rep = @opendir($folder);
     if(!$rep)
        return -1;
        
     $nb_files = 0;
     // tant qu'il y a des fichiers
     while($file = readdir($rep))
     {
        // répertoires '.' et '..', si $file est egal a '.' ou '..' le fichier est ignoré et n'est pas compté
        if($file == '.' || $file == '..')
        {continue;}

        $nb_files++;
     }
     
     // fermeture du repertoire
     closedir($rep);
     return $nb_files;
} 

// Appel du controleur principal pour afficher la bonne fenetre
$fichier = controleur_principal($action);
include_once "controleur/$fichier";