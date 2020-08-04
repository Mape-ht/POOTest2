<?php

require_once 'DBacces.class.php';
//require_once 'C:\xampp\htdocs\mesprojets\php\banquePOO2\entities\ClientMoral.class.php';
require require_once './../entities/ClientMoral.class.php';

class ClientMoralRepository extends DBacces
{

    public function addClientMo($clientMoral){

        $sql = "INSERT INTO `client_moral`(id, raison_social, nom, adresse, ninea, telephone, email, `login`, `password`) VALUES (null,?,?,?,?,'null','null','null','null')";
//var_dump($sql);
//die;
    //$access = new DBacces();
    $access=$this->mAJ($sql);//instance de PDOStatement

    if($access->execute(array($clientMoral->getRaisonSo(),$clientMoral->getNom(), $clientMoral->getAdresse(), $clientMoral->getNinea()))){

            return true;
        }else{

            return false;
    }


    }

    public function listClientMoral(){


        $sql = "SELECT * FROM `client_moral`"; 
        $access = new DBacces();
        return $access->selection($sql);     
    
    }

}

?>