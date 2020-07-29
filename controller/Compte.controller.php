<?php

require_once "../model/CompteRepository.php"; //appeller le fichier modeltraitement de sql

//extract($_POST);
if(isset($_POST)&& empty($_POST)==false){//voir si $ post existe et si champs pas vide
   //var_dump($_POST);
   //die; 
    $compte=new Compte();//instancier l'objet clientM (qui est un nouvel objet) de Type ClientMoral (qui est une classe)
    

    $compte->setTypecompte($_POST["typeCompte"]);
    $compte->setNumerocte($_POST["numCompte"]);//récupérer les $_post du view
    $compte->setClerib($_POST["cle"]);//attention le SetNom est le nom dans sql et $_post[] est le name dans le formulaire
    $compte->setDepotinitial($_POST["initial"]);
    $compte->setTypefrais($_POST["typesfrais"]);
    $compte->setDatecrea($_POST["dateOuv"]);//
    
    
    $ok = addCompte($compte); //si l'attribution de valeur à l'objet se passe bien alors ppeler la foction d'insertion dans la base de données 
var_dump($ok);
die;
    if ($ok){

        
            header('location:../view/compte/compte.php');//si insertion ok retour à la page d'accueil
               
    }
  
}
else
    {
        echo "Erreur !..."; //sinon message erreur
    }

?>