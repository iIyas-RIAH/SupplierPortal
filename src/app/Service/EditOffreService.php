<?php

include_once '../Config/Database.php';
include_once '../Controllers/Controller.php';

$Num_Offre = $_POST['Num_Offre'];
$Libelle = $_POST['Libelle'];
$Description = $_POST['Description'];
$Categorie = $_POST['Categorie'];
$Process = $_POST['Process'];
$Date_Fin = $_POST['Date_Fin'];
$Achteur = $_POST['Achteur'];

$sql = "UPDATE appeloffre SET LIBELLE = '$Libelle', DESCRIPTION = '$Description', CATEGORIE = '$Categorie', PROCESS = '$Process', DATEFIN ='$Date_Fin', ACHTEUR ='$Achteur' WHERE NUMOFFRE = '$Num_Offre'";

$result = setRow($sql, $conn);

// Execute the prepared statement
if ($result) {
    header('Location: ../Views/EspaceAdmin/Offre.php');
} else {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
