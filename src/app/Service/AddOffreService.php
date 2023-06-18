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

$sql = "INSERT INTO appeloffre (NUMOFFRE, LIBELLE, DESCRIPTION, CATEGORIE, PROCESS, DATEFIN, ACHTEUR) VALUES ('$Num_Offre', '$Libelle','$Description', '$Categorie', '$Process','$Date_Fin','$Achteur')";

$result = setRow($sql, $conn);

// Execute the prepared statement
if ($result) {
    header('Location: ../Views/EspaceAdmin/Offre.php');
} else {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
