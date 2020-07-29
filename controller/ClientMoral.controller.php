<?php

/*require "../model/ClientMoralRepository.php"; //appeller le fichier modeltraitement de sql

if(isset($_POST)&& empty($_POST)==false){//voir si $ post existe et si champs pas vide
    
    $clientM=new ClientMoral();//instancier l'objet clientM (qui est un nouvel objet) de Type ClientMoral (qui est une classe)
    
    $clientM->setRaisonSo($_POST["raisonSo"]);//récupérer les $_post du view
    $clientM->setNom($_POST["nomsEmployeur"]);//attention le SetNom est le nom dans sql et $_post[] est le name dans le formulaire
    $clientM->setAdresse($_POST["adresseEmploi"]);
    $clientM->setNinea($_POST["numIdEmployeur"]);
    
    $ok = addClientMo($clientM); //si l'attribution de valeur à l'objet se passe bien alors ppeler la foction d'insertion dans la base de données 

    if ($ok){

        
            header('location:../view/client/client.php');//si insertion ok retour à la page d'accueil
               
    }
  
}
else
    {
        echo "Erreur !..."; //sinon message erreur
    }

?>*/
