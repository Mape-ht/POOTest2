<?php

require_once 'DBacces.class.php';
require_once 'C:\xampp\htdocs\mesprojets\php\banquePOO2\entities\ClientMoral.class.php';

$clientMoral = new ClientMoral();

function addClientMo($clientMoral){

    $sql = "INSERT INTO `client_moral`(id, raison_social, nom, adresse, ninea, telephone, email, `login`, `password`) VALUES (null,?,?,?,?,'null','null','null','null')";
//var_dump($sql);
//die;
    $access = new DBacces();
    $prepare=$access->mAJ($sql);

    if($prepare->execute(array($clientMoral->getRaisonSo(),$clientMoral->getNom(), $clientMoral->getAdresse(), $clientMoral->getNinea()))){

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