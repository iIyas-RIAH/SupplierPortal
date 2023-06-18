<?php

include_once '../Config/Database.php';
include_once '../Controllers/Controller.php';

$IDM = $_POST['Idm'];
$Num_Depense = $_POST['Num_Depense'];
$Num_Facture = $_POST['Num_Facture'];
$objet = $_POST['Objet'];
$message = $_POST['Message'];

$sql = "UPDATE reclamation SET TITRE ='$objet', TEXTE ='$message', NUMDEPENSE ='$Num_Depense', NUMFACTURE ='$Num_Facture' WHERE IDM = '$IDM' ";

$result = setRow($sql, $conn);


if ($result) {
    header('Location: ../Views/EspaceFournisseur/Réclamations.php');
} else {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
