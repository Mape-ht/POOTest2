<?php

include "../model/ClientMoralRepository.php"; //appeller le fichier modeltraitement de sql
include "../model/ClientPhysiqueRepository.php"; //appeller le fichier modeltraitement de sql

class ClientController
{
    
    public function addClientPhysique(){

        $clientDb = new ClientPhysiqueRepository();

        if (isset($_POST) && empty($_POST) == false) { //voir si $ post existe et si champs pas vide
            // var_dump(($_POST));
            // die;
            $clientP = new ClientPhysique(); //instancier l'objet clientM (qui est un nouvel objet) de Type ClientMoral (qui est une classe)

            //$clientP->setTypeclt($_POST["cltp"]);
            $clientP->setNomsClt($_POST["nomsClt"]); //récupérer les $_post du view
            $clientP->setPrenoms($_POST["prenoms"]); //attention le SetNom est le nom dans sql et $_post[] est le name dans le formulaire
            $clientP->setAdresse($_POST["adresse"]);
            $clientP->setEmail($_POST["email"]);
            $clientP->setPhone($_POST["phone"]); //récupérer les $_post du view
            $clientP->setStatut($_POST["statut"]); //attention le SetNom est le nom dans sql et $_post[] est le name dans le formulaire
            $clientP->setSalaire($_POST["salaire"]!='' ? $_POST["salaire"] : null);
            $clientP->setCltmoral($_POST["employeur"]!='0' ? $_POST["employeur"] : null );
            $clientP->setCin($_POST["numIdTravail"]!='' ? $_POST["numIdTravail"] : null );

            // $a = $_POST["employeur"]!='' ? $_POST["employeur"] : null ;

            // var_dump($clientP);

            $ok = $clientDb->addClientPhy($clientP); //si l'attribution de valeur à l'objet se passe bien alors ppeler la foction d'insertion dans la base de données 

            if ($ok) {

                //header('location:../view/client/client.php');//si insertion ok retour à la page d'accueil
                echo ("=====Client bien inséré !=====");
            }
        } else {
            echo "Erreur !..."; //sinon message erreur
        }
    }

    public function addClientMoral(){

        if (isset($_POST) && empty($_POST) == false) { //voir si $ post existe et si champs pas vide

            $clientM = new ClientMoral(); //instancier l'objet clientM (qui est un nouvel objet) de Type ClientMoral (qui est une classe)
    
            $clientM->setRaisonSo($_POST["raisonSo"]); //récupérer les $_post du view
            $clientM->setNom($_POST["nomsEmployeur"]); //attention le SetNom est le nom dans sql et $_post[] est le name dans le formulaire
            $clientM->setAdresse($_POST["adresseEmploi"]);
            $clientM->setNinea($_POST["numIdEmployeur"]);
    
            $clientMoRep = new ClientMoralRepository();
            $ok = $clientMoRep->addClientMo($clientM); //si l'attribution de valeur à l'objet se passe bien alors ppeler la foction d'insertion dans la base de données 
    
            if ($ok) {
    
    
                //header('location:../view/client/client.php');//si insertion ok retour à la page d'accueil
                echo ("=====Client bien inséré !=====");
            }
        } else {
            echo "Erreur !..."; //sinon message erreur
        }
    }

}


if(isset($_POST['ajouter'])){
    if ($_POST['cltp'] == "1"){


        $clientController = new ClientController();
        $clientController->addClientMoral();

    }else {
        $clientController = new ClientController();
        $clientController->addClientPhysique();
    }
}