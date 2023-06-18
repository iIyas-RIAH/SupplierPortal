<?php

include_once '../Config/Database.php';
include_once '../Controllers/Controller.php';
session_start();

$Num_Facture = $_GET['idFacture'];

$Date_Valide = date("Y-m-d");

if (isset($_SESSION['IDA'])) {
    $sql = "UPDATE facture SET VALIDÉADMIN = true, ETATFACTURE = 'Validée', DATEVALIDE = '$Date_Valide' WHERE NUMFACTURE = '$Num_Facture'";
} else {
    $sql = "UPDATE facture SET VALIDÉFOURNISSEUR = true WHERE NUMFACTURE = '$Num_Facture'";
}

$result = setRow($sql, $conn);

// Execute the prepared statement
if ($result) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
