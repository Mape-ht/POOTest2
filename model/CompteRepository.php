<?php

require_once 'DBacces.class.php';
//require_once 'C:\xampp\htdocs\mesprojets\php\banquePOO2\entities\Compte.class.php';
require_once './../entities/Compte.class.php';

class CompteRepository extends DBacces{


    function addCompte($compte){

       $sql = "INSERT INTO `compte_client`(`id`, `numerocte`, `clerib`, `agence_id`, `depotinitial`, `cltphy_id`, `cltmoral_id`, `datecrea`, `typecompte_id`, `typefrais_id`) VALUES (null,?,?,'null',?,'null','null',?,?,?)";
        //$sql = "INSERT INTO `compte`(`id`, `numCompte`, `clerib`, `depotInit`, `fraisOuverture`, `remun`, `agio`, `dateOuv`) VALUES (null,?,?,?,?,?,?,?)";

    //var_dump($sql);
    //die;
        $access = new DBacces();
        $access=$this->mAJ($sql);
    
        if($access->execute(array($compte->getNumerocte(),$compte->getClerib(), $compte->getDepotinitial(), $compte->getTypefrais_id(), $compte->getTypecompte_id(), $compte->getDatecrea()))){
    
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