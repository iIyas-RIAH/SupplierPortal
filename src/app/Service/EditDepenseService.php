<?php

include_once '../Config/Database.php';
include_once '../Controllers/Controller.php';

$Num_Depense = $_POST['Num_Depense'];
$Libelle = $_POST['Libelle'];
$Type_Depense = $_POST['Type_Depence'];
$Etat_Depense = $_POST['Etat_Depense'];
$Date_Debut = $_POST['Date_Debut'];
$Date_Fin = $_POST['Date_Fin'];

$sql = "UPDATE depense SET LIBELLE = '$Libelle', TYPEDEPENSE = '$Type_Depense', ETATDEPENSE = '$Etat_Depense', DATEDEBUT = '$Date_Debut', DATEFIN = '$Date_Fin' WHERE NUMDEPENSE = '$Num_Depense'";

$result = setRow($sql, $conn);

// Execute the prepared statement
if ($result) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
