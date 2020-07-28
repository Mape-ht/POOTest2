<?php
class TypeClient{

    private $id;
    private $libelle;

    function __construct()
    {
        
    }



    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * 
     */ 
    public function setId($id)
    {
        $this->id = $id;

        
    }

    /**
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * 
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        
    }
}


?>