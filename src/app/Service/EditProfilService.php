<?php

include_once '../Config/Database.php';
include_once '../Controllers/Controller.php';

$nom = strtoupper($_POST['Nom']);
$prenom = $_POST['Prenom'];
$TypePersonne = $_POST['TypePersonne'];
$IDFOURNISSEUR = $_POST['IDFOURNISSEUR'];
$email = $_POST["Mail"];
$mobile = $_POST['Phone'];
$fax = $_POST['Fax'];
$password = $_POST['passwd'] ?? NULL; 
$password_comfirmation = $_POST['passwd2'] ?? NULL;
$hashed_password = password_hash($password, PASSWORD_DEFAULT);


$resultat = mysqli_fetch_row(mysqli_query($conn, "SELECT * FROM fournisseur WHERE IDFOURNISSEUR='$IDFOURNISSEUR'"));


if($password === NULL && $password_comfirmation === NULL) {
    $password = $resultat[5];
    $password_comfirmation = $resultat[5];
    $hashed_password = $resultat[5];
}

$sql = "UPDATE fournisseur SET NOM ='$nom', PRENOM ='$prenom', EMAIL ='$email', PHONE ='$mobile', PASSWD ='$hashed_password', FAX ='$fax', TYPEPERSONNE ='$TypePersonne' WHERE IDFOURNISSEUR = '$IDFOURNISSEUR'";

if ($password === $password_comfirmation) {

    $result = setRow($sql, $conn);

    // Execute the prepared statement
    if ($result) {
        header('Location: ../Views/EspaceFournisseur/Profile.php');
    } else {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
