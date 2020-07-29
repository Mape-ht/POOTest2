<?php

require "../model/ClientMoralRepository.php";

if(isset($_POST)&& empty($_POST)==false){
    
    $clientM=new ClientMoral();
    
    $clientM->setRaisonSo($_POST["raisonSo"]);
    $clientM->setNom($_POST["nomsEmployeur"]);
    $clientM->setAdresse($_POST["adresseEmploi"]);
    $clientM->setNinea($_POST["numIdEmployeur"]);
    
    $ok = addClientMo($clientM);

    if ($ok){

        
            header('location:../view/client/client.php');
               
    }
  
}
else
    {
        echo "Erreur !...";
    }

?>
