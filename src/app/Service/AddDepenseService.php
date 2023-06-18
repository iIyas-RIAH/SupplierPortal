<?php

include_once '../Config/Database.php';
include_once '../Controllers/Controller.php';

$Num_Depense = $_POST['Num_Depense'];
$Libelle = $_POST['Libelle'];
$Type_Depense = $_POST['Type_Depense'];
$Etat_Depense = $_POST['Etat_Depense'];
$Fournisseur = $_POST['Fournisseur'];
$Date_Debut = $_POST['Date_Debut'];
$Date_Fin = $_POST['Date_Fin'];


$sql = "INSERT INTO depense (NUMDEPENSE, CIN, LIBELLE, TYPEDEPENSE, ETATDEPENSE, DATEDEBUT, DATEFIN, MONTANT) 
VALUES ('$Num_Depense', '$Fournisseur', '$Libelle', '$Type_Depense', '$Etat_Depense', '$Date_Debut', '$Date_Fin', 0)";

$result = setRow($sql, $conn);

// Execute the prepared statement
if ($result) {
    header('Location: ../Views/EspaceAdmin/Depense.php');
} else {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
