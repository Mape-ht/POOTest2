<?php

require_once 'DBacces.class.php';
require_once 'C:\xampp\htdocs\mesprojets\php\banquePOO2\entities\ClientPhysique.class.php';

$clientPhysique = new ClientPhysique();

function addClientPhy($clientPhysique){

    $sql = "INSERT INTO `client_physique`(id, nom, prenom, telephone, statut, salaire, adresse, `login`, `password`, email, cin, typeclt_id, cltmoral_id) VALUES (null,?,?,?,?,?,?,'null','null',?,?,?,?)";

    var_dump($sql);//verifier si la connexion avec la database marche
    die;//pour que l'insertion ne soit pas pris en compte
    $access = new DBacces();
    $prepare=$access->mAJ($sql);

    if($prepare->execute(array($clientPhysique->getTypeclt(),$clientPhysique->getNomsClt(),$clientPhysique->getPrenoms(), $clientPhysique->getAdresse(),$clientPhysique->getEmail(),$clientPhysique->getPhone(),$clientPhysique->getSalaire(),$clientPhysique->getStatut(),$clientPhysique->getCltmoral(),$clientPhysique->getNumIdTravail()))){

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