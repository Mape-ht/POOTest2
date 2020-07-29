<?php
class Compte{

    private $id;
    private $numerocte;
    private $clerib;
    private $agence;
    private $depotinitial;
    private $cltphy;
    private $cltmoral; 
    private $datecrea;
    private $typecompte;
    private $typefrais;
    

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
     * Get the value of numerocte
     */ 
    public function getNumerocte()
    {
        return $this->numerocte;
    }

    /**
     * Set the value of numerocte
     *
     * 
     */ 
    public function setNumerocte($numerocte)
    {
        $this->numerocte = $numerocte;

        
    }

    /**
     * Get the value of clerib
     */ 
    public function getClerib()
    {
        return $this->clerib;
    }

    /**
     * Set the value of clerib
     *
     * 
     */ 
    public function setClerib($clerib)
    {
        $this->clerib = $clerib;

        
    }

    /**
     * Get the value of agence
     */ 
    public function getAgence()
    {
        return $this->agence;
    }

    /**
     * Set the value of agence
     *
     * 
     */ 
    public function setAgence($agence)
    {
        $this->agence = $agence;

        
    }

    /**
     * Get the value of depotinitial
     */ 
    public function getDepotinitial()
    {
        return $this->depotinitial;
    }

    /**
     * Set the value of depotinitial
     *
     * 
     */ 
    public function setDepotinitial($depotinitial)
    {
        $this->depotinitial = $depotinitial;

        
    }

    /**
     * Get the value of cltphy
     */ 
    public function getCltphy()
    {
        return $this->cltphy;
    }

    /**
     * Set the value of cltphy
     *
     * 
     */ 
    public function setCltphy($cltphy)
    {
        $this->cltphy = $cltphy;

        
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

    /**
     * Get the value of datecrea
     */ 
    public function getDatecrea()
    {
        return $this->datecrea;
    }

    /**
     * Set the value of datecrea
     *
     * 
     */ 
    public function setDatecrea($datecrea)
    {
        $this->datecrea = $datecrea;

        
    }

    /**
     * Get the value of typecompte
     */ 
    public function getTypecompte()
    {
        return $this->typecompte;
    }

    /**
     * Set the value of typecompte
     *
     * 
     */ 
    public function setTypecompte($typecompte)
    {
        $this->typecompte = $typecompte;

        
    }

    /**
     * Get the value of typefrais
     */ 
    public function getTypefrais()
    {
        return $this->typefrais;
    }

    /**
     * Set the value of typefrais
     *
     * 
     */ 
    public function setTypefrais($typefrais)
    {
        $this->typefrais = $typefrais;

        
    }
}


?>