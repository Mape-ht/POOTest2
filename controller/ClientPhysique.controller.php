<?php

/*require "../model/ClientPhysiqueRepository.php"; //appeller le fichier modeltraitement de sql

if(isset($_POST)&& empty($_POST)==false){//voir si $ post existe et si champs pas vide
    
    $clientP=new ClientPhysique();//instancier l'objet clientM (qui est un nouvel objet) de Type ClientMoral (qui est une classe)
    
    $clientP->setTypeclt($_POST["cltp"]);
    $clientP->setNomsClt($_POST["nomsClt"]);//récupérer les $_post du view
    $clientP->setPrenoms($_POST["prenoms"]);//attention le SetNom est le nom dans sql et $_post[] est le name dans le formulaire
    $clientP->setAdresse($_POST["adresse"]);
    $clientP->setEmail($_POST["email"]);
    $clientP->setPhone($_POST["phone"]);//récupérer les $_post du view
    $clientP->setStatut($_POST["statut"]);//attention le SetNom est le nom dans sql et $_post[] est le name dans le formulaire
    $clientP->setSalaire($_POST["salaire"]);
    $clientP->setCltmoral($_POST["employeur"]);
    $clientP->setNumIdTravail($_POST["numIdTravail"]);
    
    
    $ok = addClientPhy($clientP); //si l'attribution de valeur à l'objet se passe bien alors ppeler la foction d'insertion dans la base de données 

    if ($ok){

        
            header('location:../view/client/client.php');//si insertion ok retour à la page d'accueil
               
    }
  
}
else
    {
        echo "Erreur !..."; //sinon message erreur
    }

?>*/
