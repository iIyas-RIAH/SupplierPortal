<?php

include_once '../Config/Database.php';

$CIN = $_GET['idFournisseur'];

$sql1 = "DELETE FROM fournisseur WHERE CIN = '$CIN'";

$result = mysqli_query($conn, $sql1);

// Execute the prepared statement
if ($result) {
    header('Location: ../Views/EspaceAdmin/Fournisseur.php');
} else {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}