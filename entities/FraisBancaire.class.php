<?php
class FraisBancaire{

    private $id;
    private $typesfrais;
    private $datefrais;
    private $compteclient;

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
     * Get the value of typesfrais
     */ 
    public function getTypesfrais()
    {
        return $this->typesfrais;
    }

    /**
     * Set the value of typesfrais
     *
     * 
     */ 
    public function setTypesfrais($typesfrais)
    {
        $this->typesfrais = $typesfrais;

        
    }

    /**
     * Get the value of datefrais
     */ 
    public function getDatefrais()
    {
        return $this->datefrais;
    }

    /**
     * Set the value of datefrais
     *
     * 
     */ 
    public function setDatefrais($datefrais)
    {
        $this->datefrais = $datefrais;

        
    }

    /**
     * Get the value of compteclient
     */ 
    public function getCompteclient()
    {
        return $this->compteclient;
    }

    /**
     * Set the value of compteclient
     *
     * 
     */ 
    public function setCompteclient($compteclient)
    {
        $this->compteclient = $compteclient;

        
    }
}



?>