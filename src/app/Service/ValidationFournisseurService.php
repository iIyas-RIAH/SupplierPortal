<?php

include_once '../Config/Database.php';
include_once '../Controllers/Controller.php';

$Id_Fournisseur = $_GET['idFournisseur'];


$sql = "UPDATE fournisseur SET VALIDÉ = true WHERE CIN = '$Id_Fournisseur'";


$result = setRow($sql, $conn);

// Execute the prepared statement
if ($result) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
