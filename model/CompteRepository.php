<?php

require_once 'DBacces.class.php';
require_once 'C:\xampp\htdocs\mesprojets\php\banquePOO2\entities\Compte.class.php';

//$compte = new Compte();

class CompteRepository extends DBacces{


    function addCompte($compte){

        $sql = "INSERT INTO `compte_client`(`id`, `numerocte`, `clerib`, `agence_id`, `depotinitial`, `cltphy_id`, `cltmoral_id`, `datecrea`, `typecompte_id`, `typefrais_id`) VALUES (null,?,?,null,?,null,null,?,?,?)";
    
        $access = new DBacces();
        $prepare=$access->mAJ($sql);
    
        if($prepare->execute(array($compte->getNumerocte(),$compte->getClerib(), $compte->getDepotinitial(), $compte->getDatecrea(), $compte->getTypecompte_id(), $compte->getTypefrais_id()))){
            //var_dump($sql);
            //die;
                return true;
            }else{
    
                return false;
        }
    
    }


    public function listCompte(){

        $sql = "SELECT * FROM `compte_client`";
        $access = new DBacces;
        return $access->selection($sql);
    }

}


?>



