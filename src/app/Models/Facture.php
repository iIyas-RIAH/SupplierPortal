<?php
class Facture {
    private $NumFacture;
    private $IDF;
    private $EtatFacture;
    private $NUMDEPENSE;
    private $MONTANT;
    private $DATEDEPOSE;
    private $DATEVALIDE;
    private $DATEREJETE;
    private $DATETRAITEMENT;
    private $DATEPAYE;

    public function __construct($NumFacture, $IDF, $EtatFacture, $NUMDEPENSE, $MONTANT, $DATEDEPOSE, $DATEVALIDE, $DATEREJETE, $DATETRAITEMENT, $DATEPAYE) {
        $this->NumFacture = $NumFacture;
        $this->IDF = $IDF;
        $this->EtatFacture = $EtatFacture;
        $this->NUMDEPENSE = $NUMDEPENSE;
        $this->MONTANT = $MONTANT;
        $this->DATEDEPOSE = $DATEDEPOSE;
        $this->DATEVALIDE = $DATEVALIDE;
        $this->DATEREJETE = $DATEREJETE;
        $this->DATETRAITEMENT = $DATETRAITEMENT;
        $this->DATEPAYE = $DATEPAYE;
    }

    public function getNumFacture() {
        return $this->NumFacture;
    }

    public function setNumFacture($NumFacture) {
        $this->NumFacture = $NumFacture;
    }

    public function getIDF() {
        return $this->IDF;
    }

    public function setIDF($IDF) {
        $this->IDF = $IDF;
    }

    public function getEtatFacture() {
        return $this->EtatFacture;
    }

    public function setEtatFacture($EtatFacture) {
        $this->EtatFacture = $EtatFacture;
    }

    public function getNUMDEPENSE() {
        return $this->NUMDEPENSE;
    }

    public function setNUMDEPENSE($NUMDEPENSE) {
        $this->NUMDEPENSE = $NUMDEPENSE;
    }

    public function getMONTANT() {
        return $this->MONTANT;
    }

    public function setMONTANT($MONTANT) {
        $this->MONTANT = $MONTANT;
    }

    public function getDATEDEPOSE() {
        return $this->DATEDEPOSE;
    }

    public function setDATEDEPOSE($DATEDEPOSE) {
        $this->DATEDEPOSE = $DATEDEPOSE;
    }

    public function getDATEVALIDE() {
        return $this->DATEVALIDE;
    }

    public function setDATEVALIDE($DATEVALIDE) {
        $this->DATEVALIDE = $DATEVALIDE;
    }

    public function getDATEREJETE() {
        return $this->DATEREJETE;
    }

    public function setDATEREJETE($DATEREJETE) {
        $this->DATEREJETE = $DATEREJETE;
    }

    public function getDATETRAITEMENT() {
        return $this->DATETRAITEMENT;
    }

    public function setDATETRAITEMENT($DATETRAITEMENT) {
        $this->DATETRAITEMENT = $DATETRAITEMENT;
    }

    public function getDATEPAYE() {
        return $this->DATEPAYE;
    }

    public function setDATEPAYE($DATEPAYE) {
        $this->DATEPAYE = $DATEPAYE;
    }
}
?>