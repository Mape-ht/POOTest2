<?php

include 'DBacces.class.php';
include 'C:\xampp\htdocs\mesprojets\php\banquePOO2\entities\ClientMoral.class.php';

$clientMoral = new ClientMoral();

function addClientMo($clientMoral){

    $sql = "INSERT INTO `client_moral`(id, raison_social, nom, adresse, ninea, telephone, email, `login`, `password`) VALUES ('null',?,?,?,?,'null','null','null','null')";

    $access = new DBacces();
    $prepare=$access->mAJ($sql);

    if($prepare->execute(array($clientMoral->getRaisonSo,$clientMoral->getNomsEmployeur, $clientMoral->getAdresseEmploi, $clientMoral->getNumIdEmployeur))){

            return true;
        }else{

            return false;
    }

}


function listClientMoral(){


    $sql = "SELECT * FROM `client_moral`"; 
    $access = new DBacces();
    return $access->selection($sql);     

}
?>