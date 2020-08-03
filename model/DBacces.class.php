<?php

class DBacces{


public function __construct()
{   
}

protected function getConnect(){

    $host = "localhost";
    $user = "root";
    $dbname = "bpmape_gr2";
    $password = "";
    $dsn = "mysql:host=".$host.";dbname=".$dbname;

    $db = null;
    try {
        $db = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
        echo "erreur de connection";
    }

    return $db;
}


function mAJ($requet){

    $db = $this->getConnect();
    return $db->prepare($requet);

}


function selection($requet){


    $db = $this->getConnect();
    return $db->query($requet);

}

}
