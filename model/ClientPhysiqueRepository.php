<?php

require_once 'DBacces.class.php';
require_once './../entities/ClientPhysique.class.php';

class ClientPhysiqueRepository extends DBacces
{
    public function addClientPhy($clientPhysique){

        $sql = "INSERT INTO `client_physique`(id, nom, prenom, telephone, statut, salaire, adresse, `login`, `password`, email, cin, typeclt_id, cltmoral_id) VALUES (null,?,?,?,?,?,?,null,null,?,?,?,?)";
        //var_dump($sql);//verifier si la connexion avec la database marche
        //die;//pour que l'insertion ne soit pas pris en compte
        $access = $this->mAJ($sql);//instance de PDOStatement
        if($access->execute(array($clientPhysique->getNomsClt(),$clientPhysique->getPrenoms(),$clientPhysique->getPhone(),$clientPhysique->getStatut(),$clientPhysique->getSalaire(),$clientPhysique->getAdresse(),$clientPhysique->getEmail(),
        $clientPhysique->getCin(),$clientPhysique->getTypeclt(),$clientPhysique->getCltmoral()))){
    
                return true;
            }else{
    
                return false;
        }
    
    }

    public function listClientPhy(){


        $sql = "SELECT * FROM `client_physique`"; 
        $access = new DBacces();
        return $access->selection($sql);     
    
    }

}








?>