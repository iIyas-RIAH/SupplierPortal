<?php

include_once '../Config/Database.php';

$idRéclamation = $_GET['idRéclamation'];

$sql1 = "DELETE FROM reclamation WHERE IDM = '$idRéclamation'";

$result = mysqli_query($conn, $sql1);

// Execute the prepared statement
if ($result) {
    header('Location: ../Views/EspaceFournisseur/Réclamations.php');
} else {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}