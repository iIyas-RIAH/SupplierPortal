<?php
class Depense {
    private $NUMDEPENSE;
    private $LIBELLE;
    private $TYPEDEPENSE;
    private $ETATDEPENSE;
    private $DATEDEBUT;
    private $DATEFIN;
    private $MONTANT;
    
    public function __construct($numDepense, $libelle, $typeDepense, $etatDepense, $dateDebut, $dateFin, $montant)
    {
        $this->NUMDEPENSE = $numDepense;
        $this->LIBELLE = $libelle;
        $this->TYPEDEPENSE = $typeDepense;
        $this->ETATDEPENSE = $etatDepense;
        $this->DATEDEBUT = $dateDebut;
        $this->DATEFIN = $dateFin;
        $this->MONTANT = $montant;
    }
    

    public function getNUMDEPENSE()
    {
        return $this->NUMDEPENSE;
    }
    
    public function getLIBELLE()
    {
        return $this->LIBELLE;
    }
    
    public function getTYPEDEPENSE()
    {
        return $this->TYPEDEPENSE;
    }
    
    public function getETATDEPENSE()
    {
        return $this->ETATDEPENSE;
    }
    
    public function getDATEDEBUT()
    {
        return $this->DATEDEBUT;
    }
    
    public function getDATEFIN()
    {
        return $this->DATEFIN;
    }
    
    public function getMONTANT()
    {
        return $this->MONTANT;
    }


    public function setNUMDEPENSE($NUMDEPENSE) {
        $this->NUMDEPENSE = $NUMDEPENSE;
    }
    
    public function setLIBELLE($LIBELLE) {
        $this->LIBELLE = $LIBELLE;
    }
    
    public function setTYPEDEPENSE($TYPEDEPENSE) {
        $this->TYPEDEPENSE = $TYPEDEPENSE;
    }
    
    public function setETATDEPENSE($ETATDEPENSE) {
        $this->ETATDEPENSE = $ETATDEPENSE;
    }
    
    public function setDATEDEBUT($DATEDEBUT) {
        $this->DATEDEBUT = $DATEDEBUT;
    }
    
    public function setDATEFIN($DATEFIN) {
        $this->DATEFIN = $DATEFIN;
    }
    
    public function setMONTANT($MONTANT) {
        $this->MONTANT = $MONTANT;
    }
    
}
?>