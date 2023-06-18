<?php

include_once '../Config/Database.php';


$email = $_POST['email'];
$password = $_POST['password'];


// Define a prepared statement to insert data into the database

$resultat = mysqli_fetch_row(mysqli_query($conn,"SELECT IDA, PASSWD FROM admin where EMAIL = '$email'"));

// Execute the prepared statement
if (password_verify($password, $resultat[1])) {
    session_start();
    $_SESSION['IDA'] = $resultat[0];
    echo $_SESSION['IDA'];
    header('Location: ../Views/EspaceAdmin/Accueil.php');
} else {
    echo("Error: Invalid email or password");
    header('refresh: 3; url= ../Views/Auth/adminLogin.php');
}
