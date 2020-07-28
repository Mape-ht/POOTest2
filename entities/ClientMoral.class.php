<?php

class ClientMoral{


    private $id;
    private $raisonSo;
    private $nomsEmployeur;
    private $adresseEmploi;
    private $numIdEmployeur;
    private $telephone;
    private $email;
    private $login;
    private $password;


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
     * Get the value of raisonSo
     */ 
    public function getRaisonSo()
    {
        return $this->raisonSo;
    }

    /**
     * Set the value of raisonSo
     *
     * 
     */ 
    public function setRaisonSo($raisonSo)
    {
        $this->raisonSo = $raisonSo;

        
    }

    /**
     * Get the value of nomsEmployeur
     */ 
    public function getNomsEmployeur()
    {
        return $this->nomsEmployeur;
    }

    /**
     * Set the value of nomsEmployeur
     *
     * 
     */ 
    public function setNomsEmployeur($nomsEmployeur)
    {
        $this->nomsEmployeur = $nomsEmployeur;

        
    }

    /**
     * Get the value of adresseEmploi
     */ 
    public function getAdresseEmploi()
    {
        return $this->adresseEmploi;
    }

    /**
     * Set the value of adresseEmploi
     *
     * 
     */ 
    public function setAdresseEmploi($adresseEmploi)
    {
        $this->adresseEmploi = $adresseEmploi;

        
    }

    /**
     * Get the value of numIdEmployeur
     */ 
    public function getNumIdEmployeur()
    {
        return $this->numIdEmployeur;
    }

    /**
     * Set the value of numIdEmployeur
     *
     * 
     */ 
    public function setNumIdEmployeur($numIdEmployeur)
    {
        $this->numIdEmployeur = $numIdEmployeur;

        
    }

    /**
     * Get the value of telephone
     */ 
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set the value of telephone
     *
     * 
     */ 
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * 
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        
    }

    /**
     * Get the value of login
     */ 
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * 
     */ 
    public function setLogin($login)
    {
        $this->login = $login;

        
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * 
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        
    }
}

?>