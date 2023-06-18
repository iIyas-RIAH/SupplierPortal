<?php

include_once '../Config/Database.php';
include_once '../Controllers/Controller.php';

$idReclamation = $_GET['idReclamation'];


$sql = "UPDATE reclamation SET VALIDÉ = true WHERE IDM = '$idReclamation'";


$result = setRow($sql, $conn);

// Execute the prepared statement
if ($result) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
