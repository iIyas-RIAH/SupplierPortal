<?php

include_once '../Config/Database.php';
include_once '../Controllers/Controller.php';

$IDFOURNISSEUR = $_POST['IDFOURNISSEUR'];
$Num_Depense = $_POST['Num_Depense'];
$Num_Facture = $_POST['Num_Facture'];
$objet = $_POST['objet'];
$message = $_POST['message'];

$sql = "INSERT INTO reclamation (IDFOURNISSEUR, TITRE, TEXTE, NUMDEPENSE, NUMFACTURE) VALUES ('$IDFOURNISSEUR', '$objet', '$message', '$Num_Depense', '$Num_Facture')";

$result = setRow($sql, $conn);

if ($result) {
    header('Location: ../Views/EspaceFournisseur/Réclamations.php');
} else {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
