<?php
class Fournisseur {
    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $phone;
    private $password;
    private $fax;
    private $typepersonne;
    private $typefournisseur;
    
    public function __construct($id, $nom, $prenom, $email, $phone, $password, $fax, $typepersonne, $typefournisseur) {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->phone = $phone;
        $this->password = $password;
        $this->fax = $fax;
        $this->typepersonne = $typepersonne;
        $this->typefournisseur = $typefournisseur;
    }
    
    public function getId() {
        return $this->id;
    }
    
    public function getNom() {
        return $this->nom;
    }
    
    public function getPrenom() {
        return $this->prenom;
    }
    
    public function getEmail() {
        return $this->email;
    }
    
    public function getPhone() {
        return $this->phone;
    }
    
    public function getPassword() {
        return $this->password;
    }

    public function getFax() {
        return $this->fax;
    }
    
    public function getTypepersonne() {
        return $this->typepersonne;
    }
    
    public function getTypefournisseur() {
        return $this->typefournisseur;
    }


    public function setId($id) {
        $this->id = $id;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setFax($fax) {
        $this->fax = $fax;
    }

    public function setTypePersonne($typepersonne) {
        $this->typepersonne = $typepersonne;
    }

    public function setTypeFournisseur($typefournisseur) {
        $this->typefournisseur = $typefournisseur;
    }
}
?>