<?php

include '../model/DBacces.class.php';
include "../model/CompteRepository.php";//appeller le fichier modeltraitement de sql
//include "../model/ClientMoralRepository.php";//appeller le fichier modeltraitement de sql

class CompteController
{


    public function addCompte(){


        $compteDB = new CompteRepository();


        if(isset($_POST)&& empty($_POST)==false){//voir si $ post existe et si champs pas vide
            //var_dump($_POST);
            //die; 
             $compte=new Compte();//instancier l'objet clientM (qui est un nouvel objet) de Type ClientMoral (qui est une classe)
             
             $compte->setNumerocte($_POST["numCompte"]);
             $compte->setClerib($_POST["cle"]);
             $compte->setDepotinitial($_POST["initial"]);
             $compte->setTypefrais_id($_POST["typesfrais"]);
             $compte->setDatecrea($_POST["dateOuv"]);

             //$compte->setNumCompte($_POST["numCompte"]);//récupérer les $_post du view
             //attention le SetNom est le nom dans sql et $_post[] est le name dans le formulaire
         
             
             //$compte->setClerib($_POST["cle"]);
             //$compte->setRemun($_POST["remun"]);
             //$compte->setDepotInit($_POST["initial"]);
             //$compte->setAgio($_POST["agios"]);
             //$compte->setDateOuv($_POST["dateOuv"]);
             //["typeCompte"] : null);
             //$compte->setFraisOuverture($_POST["typesfrais"]);
                  //var_dump($compte);
                  //die;   
             
             $ok = $compteDB->addCompte($compte); //si l'attribution de valeur à l'objet se passe bien alors ppeler la foction d'insertion dans la base de données 
         //var_dump($ok);
         //die;
             if ($ok){
         
                 
                    // header('location:../view/compte/compte.php');//si insertion ok retour à la page d'accueil
                    echo ("=====Compte bien créé !=====");

                } else {
                    echo "Erreur !..."; //sinon message erreur
                }

        } 
    }
}
?>