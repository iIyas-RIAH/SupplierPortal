<?php

include_once '../Config/Database.php';


$email = $_POST['email'];
$password = $_POST['password'];


$resultat = mysqli_fetch_row(mysqli_query($conn,"SELECT IDFOURNISSEUR, PASSWD FROM fournisseur where EMAIL = '$email'"));


if (password_verify($password, $resultat[1])) {
    session_start();
    $_SESSION['IDFOURNISSEUR'] = $resultat[0];
    header('Location: ../Views/EspaceFournisseur/Accueil.php');
} else {
    echo("Error: Invalid email or password");
    header('refresh: 30; url= ../Views/Auth/login.php');
}
