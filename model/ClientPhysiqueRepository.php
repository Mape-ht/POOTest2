<?php

include 'DBacces.class.php';
include 'C:\xampp\htdocs\mesprojets\php\banquePOO2\entities\ClientPhysique.class.php';

$clientPhysique = new ClientPhysique();

function addClientPhy($clientPhysique){

    $sql = "INSERT INTO `client_physique`(id, nom, prenom, telephone, statut, salaire, adresse, `login`, `password`, email, cin, typeclt_id, cltmoral_id) VALUES (null,?,?,?,?,?,?,'null','null',?,?,?,?)";

    $access = new DBacces();
    $prepare=$access->mAJ($sql);

    if($prepare->execute(array($clientPhysique->getRaisonSo,$clientPhysique->getNomsEmployeur, $clientPhysique->getAdresseEmploi, $clientPhysique->getNumIdEmployeur))){

            return true;
        }else{

            return false;
    }

}


function listClientPhy(){


    $sql = "SELECT * FROM `client_physique`"; 
    $access = new DBacces();
    return $access->selection($sql);     

}


?>