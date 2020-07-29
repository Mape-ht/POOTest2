<?php

include 'DBacces.class.php';
include 'C:\xampp\htdocs\mesprojets\php\banquePOO2\entities\Compte.class.php';

$compte = new Compte();

function addCompte($compte){

    $sql = "INSERT INTO `compte_client`(`id`, `numerocte`, `clerib`, `agence_id`, `depotinitial`, `cltphy_id`, `cltmoral_id`, `datecrea`, `typecompte_id`, `typefrais_id`) VALUES (null,?,?,'null',?,'null','null',?,?,?)";

    $access = new DBacces();
    $prepare=$access->mAJ($sql);

    if($prepare->execute(array($compte->getNumerocte,$compte->getClerib, $compte->getDepotinitial, $compte->getDatecrea, $compte->getTypecompte, $compte->getTypefrais))){

            return true;
        }else{

            return false;
    }

}



?>