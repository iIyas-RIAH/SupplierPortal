<?php
class Entreprise {
    private $IDE ;
    private $IDF;
    private $TYPEE;
    private $NOM;
    private $PME;
    private $FORMEJURIDIQUE;
    private $REGISTRECOMMERCIAL;
    private $PAYS;
    private $VILLE;
    private $CODEPOSTAL;
    private $ICE;
    private $IDENTIFIANTFISCAL;
    private $TAXEPROFESSIONNELLE;
    private $CNSS;
    private $PHONEE;
    private $FAX;
    private $ADRESSE;

    public function __construct($IDE, $IDF, $TYPEE, $NOM, $PME, $FORMEJURIDIQUE, $REGISTRECOMMERCIAL, $PAYS, $VILLE, $CODEPOSTAL, $ICE, $IDENTIFIANTFISCAL, $TAXEPROFESSIONNELLE, $CNSS, $PHONEE, $FAX, $ADRESSE) {
        $this->IDE = $IDE;
        $this->IDF = $IDF;
        $this->TYPEE = $TYPEE;
        $this->NOM = $NOM;
        $this->PME = $PME;
        $this->FORMEJURIDIQUE = $FORMEJURIDIQUE;
        $this->REGISTRECOMMERCIAL = $REGISTRECOMMERCIAL;
        $this->PAYS = $PAYS;
        $this->VILLE = $VILLE;
        $this->CODEPOSTAL = $CODEPOSTAL;
        $this->ICE = $ICE;
        $this->IDENTIFIANTFISCAL = $IDENTIFIANTFISCAL;
        $this->TAXEPROFESSIONNELLE = $TAXEPROFESSIONNELLE;
        $this->CNSS = $CNSS;
        $this->PHONEE = $PHONEE;
        $this->FAX = $FAX;
        $this->ADRESSE = $ADRESSE;
    }
    
    public function getIDE() {
        return $this->IDE;
    }
    
    public function getIDF() {
        return $this->IDF;
    }
    
    public function getTYPEE() {
        return $this->TYPEE;
    }
    
    public function getNOM() {
        return $this->NOM;
    }
    
    public function getPME() {
        return $this->PME;
    }
    
    public function getFORMEJURIDIQUE() {
        return $this->FORMEJURIDIQUE;
    }
    
    public function getREGISTRECOMMERCIAL() {
        return $this->REGISTRECOMMERCIAL;
    }
    
    public function getPAYS() {
        return $this->PAYS;
    }
    
    public function getVILLE() {
        return $this->VILLE;
    }
    
    public function getCODEPOSTAL() {
        return $this->CODEPOSTAL;
    }
    
    public function getICE() {
        return $this->ICE;
    }
    
    public function getIDENTIFIANTFISCAL() {
        return $this->IDENTIFIANTFISCAL;
    }
    
    public function getTAXEPROFESSIONNELLE() {
        return $this->TAXEPROFESSIONNELLE;
    }
    
    public function getCNSS() {
        return $this->CNSS;
    }
    
    public function getPHONEE() {
        return $this->PHONEE;
    }
    
    public function getFAX() {
        return $this->FAX;
    }
    
    public function getADRESSE() {
        return $this->ADRESSE;
    }
    
    public function setIDE($value) {
        $this->IDE = $value;
    }
    
    public function setIDF($value) {
        $this->IDF = $value;
    }
    
    public function setTYPEE($value) {
        $this->TYPEE = $value;
    }
    
    public function setNOM($value) {
        $this->NOM = $value;
    }
    
    public function setPME($value) {
        $this->PME = $value;
    }
    
    public function setFORMEJURIDIQUE($value) {
        $this->FORMEJURIDIQUE = $value;
    }
    
    public function setREGISTRECOMMERCIAL($value) {
        $this->REGISTRECOMMERCIAL = $value;
    }
    
    public function setPAYS($value) {
        $this->PAYS = $value;
    }
    
    public function setVILLE($value) {
        $this->VILLE = $value;
    }
    
    public function setCODEPOSTAL($value) {
        $this->CODEPOSTAL = $value;
    }
    
    public function setICE($value) {
        $this->ICE = $value;
    }
    
    public function setIDENTIFIANTFISCAL($value) {
        $this->IDENTIFIANTFISCAL = $value;
    }
    
    public function setTAXEPROFESSIONNELLE($value) {
        $this->TAXEPROFESSIONNELLE = $value;
    }
    
    public function setCNSS($value) {
        $this->CNSS = $value;
    }
    
    public function setPHONEE($value) {
        $this->PHONEE = $value;
    }
    
    public function setFAX($value) {
        $this->FAX = $value;
    }
    
    public function setADRESSE($value) {
        $this->ADRESSE = $value;
    }
    
}
?>