<?php

class ClientPhysique{

    private $id;
    private $nomsClt;
    private $prenoms;
    private $adresse;
    private $email;
    private $phone;
    private $salaire;
    private $employeur;
    private $numIdTravail;
    private $login;
    private $password;
    private $typeclt;
    private $cltmoral;

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
     * Get the value of nomsClt
     */ 
    public function getNomsClt()
    {
        return $this->nomsClt;
    }

    /**
     * Set the value of nomsClt
     *
     * 
     */ 
    public function setNomsClt($nomsClt)
    {
        $this->nomsClt = $nomsClt;

        
    }

    /**
     * Get the value of prenoms
     */ 
    public function getPrenoms()
    {
        return $this->prenoms;
    }

    /**
     * Set the value of prenoms
     *
     * 
     */ 
    public function setPrenoms($prenoms)
    {
        $this->prenoms = $prenoms;

        
    }

    /**
     * Get the value of adresse
     */ 
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * 
     */ 
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        
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
     * Get the value of phone
     */ 
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     *
     * 
     */ 
    public function setPhone($phone)
    {
        $this->phone = $phone;

        
    }

    /**
     * Get the value of salaire
     */ 
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * Set the value of salaire
     *
     * 
     */ 
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;

        
    }

    /**
     * Get the value of employeur
     */ 
    public function getEmployeur()
    {
        return $this->employeur;
    }

    /**
     * Set the value of employeur
     *
     * 
     */ 
    public function setEmployeur($employeur)
    {
        $this->employeur = $employeur;

        
    }

    /**
     * Get the value of numIdTravail
     */ 
    public function getNumIdTravail()
    {
        return $this->numIdTravail;
    }

    /**
     * Set the value of numIdTravail
     *
     * 
     */ 
    public function setNumIdTravail($numIdTravail)
    {
        $this->numIdTravail = $numIdTravail;

        
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

    /**
     * Get the value of typeclt
     */ 
    public function getTypeclt()
    {
        return $this->typeclt;
    }

    /**
     * Set the value of typeclt
     *
     * 
     */ 
    public function setTypeclt($typeclt)
    {
        $this->typeclt = $typeclt;

        
    }

    /**
     * Get the value of cltmoral
     */ 
    public function getCltmoral()
    {
        return $this->cltmoral;
    }

    /**
     * Set the value of cltmoral
     *
     * 
     */ 
    public function setCltmoral($cltmoral)
    {
        $this->cltmoral = $cltmoral;

        
    }
}

?>