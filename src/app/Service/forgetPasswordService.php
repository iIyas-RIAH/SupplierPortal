<?php

include_once '../Config/Database.php';
include_once '../Controllers/Controller.php';


if (isset($_POST['send'])) {
    Send($conn);
}

if (isset($_POST['validate'])) {
    Validate($conn);
}

if (isset($_POST['change'])) {
    Change($conn);
}


function Send($conn)
{
    $email = $_POST['email'] ?? null;
    $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

    $code = substr(str_shuffle($str_result), 0, 10);

    $sql = "UPDATE fournisseur SET VERIFYCODE = '$code' WHERE EMAIL = '$email'";

    $result = setRow($sql, $conn);

    $to = 'ilyasriah2000@gmail.com';

    $mail = mail($to, "Réinitialiser le Mot de Passe", "Bonjour, votre code de vérification est : $code .");

    if ($result && $mail) {
        header('Location: ../Views/Auth/forgetPasswordValidation.php');
    } else {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}

function Validate($conn)
{
    $code = $_POST['code'];

    $CIN = mysqli_fetch_row(mysqli_query($conn,"SELECT CIN FROM fournisseur where VERIFYCODE = '$code'"))[0];

    $sql = "UPDATE fournisseur SET VERIFYCODE = NULL WHERE EMAIL = '$CIN'";
    $result = setRow($sql, $conn);

    session_start();
    $_SESSION['user'] = $CIN;
    
    if ($result) {
        header('Location: ../Views/Auth/newPassword.php');
    } else {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}

function Change($conn)
{
    $password = $_POST['passwd'];
    $password_comfirmation = $_POST['passwd2'];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);


    session_start();
    $CIN = $_SESSION['user'];
    unset($_SESSION['user']);

    $sql = "UPDATE fournisseur SET PASSWD = '$hashed_password' WHERE CIN = '$CIN'";
    $result = setRow($sql, $conn);

    if ($password === $password_comfirmation) {

        $result = setRow($sql, $conn);
    
    
    
        // Execute the prepared statement
        if ($result) {
            header('Location: ../Views/Auth/login.php');
        } else {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }

}
