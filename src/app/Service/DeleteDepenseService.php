<?php

include_once '../Config/Database.php';

$Num_Depense = $_GET['idDepense'];

$sql1 = "DELETE FROM facture WHERE NUMDEPENSE = '$Num_Depense'";

$factureResult = mysqli_query($conn, $sql1);

$sql2 = "DELETE FROM depense WHERE NUMDEPENSE = '$Num_Depense'";

$depenseResult = mysqli_query($conn, $sql2);

// Execute the prepared statement
if ($factureResult && $depenseResult) {
    header('Location: ../Views/EspaceAdmin/Depense.php');
} else {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}