<?php
class Depense {
    private $IDM;
    private $IDA;
    private $IDF;
    private $TITRE;
    private $TEXTE;
    private $EXPEDITEUR;
    private $DESTINATAIRE;
    private $ATTACHMENT;
    
    public function __construct($IDM, $IDA, $IDF, $TITRE, $TEXTE, $EXPEDITEUR, $DESTINATAIRE, $ATTACHMENT)
    {
        $this->IDM = $IDM;
        $this->IDA = $IDA;
        $this->IDF = $IDF;
        $this->TITRE = $TITRE;
        $this->TEXTE = $TEXTE;
        $this->EXPEDITEUR = $EXPEDITEUR;
        $this->DESTINATAIRE = $DESTINATAIRE;
        $this->ATTACHMENT = $ATTACHMENT;
    }
    

    public function getIDM()
    {
        return $this->IDM;
    }

    public function getIDA()
    {
        return $this->IDA;
    }

    public function getIDF()
    {
        return $this->IDF;
    }

    public function getTITRE()
    {
        return $this->TITRE;
    }

    public function getTEXTE()
    {
        return $this->TEXTE;
    }

    public function getEXPEDITEUR()
    {
        return $this->EXPEDITEUR;
    }

    public function getDESTINATAIRE()
    {
        return $this->DESTINATAIRE;
    }

    public function getATTACHMENT()
    {
        return $this->ATTACHMENT;
    }


    public function setIDM($idm)
    {
        $this->IDM = $idm;
    }
    
    public function setIDA($ida)
    {
        $this->IDA = $ida;
    }
    
    public function setIDF($idf)
    {
        $this->IDF = $idf;
    }
    
    public function setTITRE($titre)
    {
        $this->TITRE = $titre;
    }
    
    public function setTEXTE($texte)
    {
        $this->TEXTE = $texte;
    }
    
    public function setEXPEDITEUR($expediteur)
    {
        $this->EXPEDITEUR = $expediteur;
    }
    
    public function setDESTINATAIRE($destinataire)
    {
        $this->DESTINATAIRE = $destinataire;
    }
    
    public function setATTACHMENT($attachment)
    {
        $this->ATTACHMENT = $attachment;
    }
}
?>