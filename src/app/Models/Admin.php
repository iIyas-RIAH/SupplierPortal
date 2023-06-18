<?php
class Admin {
    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $phone;
    private $password;
    
    public function __construct($id, $nom, $prenom, $email, $phone, $password) {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->phone = $phone;
        $this->password = $password;
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
}
?>