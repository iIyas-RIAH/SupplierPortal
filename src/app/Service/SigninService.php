<?php

include_once '../Config/Database.php';
include_once '../Controllers/Controller.php';

$Type = $_POST['Type'];
$PME = $_POST['PME'] ?? false;
$Name = $_POST['Name'];
$Forme_Juridique = $_POST['Forme_Juridique'];
$Registre_Commercial = $_POST["Registre_Commercial"];
$Pays = $_POST['Pays'];
$Ville = $_POST['Ville'];
$Code_Postal = $_POST['Code_Postal'];
$ICE = $_POST['ICE'];
$Identifiant_Fiscal = $_POST["Identifiant_Fiscal"];
$Taxe_Professionnelle = $_POST['Taxe_Professionnelle'];
$CNSS = $_POST['CNSS'];
$Phonee = $_POST['Téléphone'];
$Faxe = $_POST['Faxe'];
$Adresse = $_POST['Adresse'];

$nom = strtoupper($_POST['Nom']);
$prenom = $_POST['Prenom'];
$TypePersonne = $_POST['TypePersonne'];
$cin = $_POST['CIN'];
$email = $_POST["Mail"];
$mobile = $_POST['phone'];
$fax = $_POST['Fax'];
$password = $_POST['password'] ?? NULL;
$password_comfirmation = $_POST['password2'] ?? NULL;
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

if($password == NULL) {
    die("Error: Invalid email or password");
}




if ($password === $password_comfirmation) {

    $sql = "INSERT INTO fournisseur (CIN, NOM, PRENOM, EMAIL, PHONE, PASSWD, FAX, TYPEPERSONNE) VALUES ('$cin', '$nom', '$prenom', '$email', '$mobile', '$hashed_password', '$fax', '$TypePersonne')";

    $result = mysqli_query($conn,$sql);
    $sql2 = "SELECT IDFOURNISSEUR FROM fournisseur WHERE CIN = '$cin'";
    $result2 = mysqli_fetch_row(mysqli_query($conn, $sql2))[0];
    
    $sql3 = "INSERT INTO entreprise (IDFOURNISSEUR, TYPEE, NOM, PME, FORMEJURIDIQUE, REGISTRECOMMERCIAL, PAYS, VILLE, CODEPOSTAL, ICE, IDENTIFIANTFISCAL, TAXEPROFESSIONNELLE, CNSS, PHONEE, FAX, ADRESSE) VALUES ('$result2', '$Type', '$Name', '$PME', '$Forme_Juridique', '$Registre_Commercial', '$Pays', '$Ville', '$Code_Postal', '$ICE', '$Identifiant_Fiscal', '$Taxe_Professionnelle', '$CNSS', '$Phonee', '$Faxe', '$Adresse')";
    $result3 = mysqli_query($conn,$sql3);



    // Execute the prepared statement
    if ($result && $result3) {
        header('Location: ../Views/Auth/signinSuccess.php');
    } else {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
