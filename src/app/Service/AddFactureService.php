<?php

include_once '../Config/Database.php';
include_once '../Controllers/Controller.php';

$IDFOURNISSEUR  = $_POST['IDFOURNISSEUR'];

$Num_Facture = $_POST['Num_Facture'];
$Num_Depense = $_POST['Num_Depense'];
$Devise = $_POST['Devise'];
$Date_Facture = $_POST['Date_Facture'];
$Montant_HT = $_POST['Montant_HT'];
$Montant_TTC = $_POST['Montant_TTC'];

$file = $_FILES["Attachement"];
$target_dir = "../uploadFiles";
$fileName = $file["name"];
$target_file = $target_dir . '/' . $fileName;

echo $fileName;

$uploadOk = 1;
if (move_uploaded_file($file["tmp_name"], $target_file)) {
    echo "The file " . $fileName . " has been uploaded.";
} else {
    echo "Sorry, there was an error uploading your file.";
}


$sql = "INSERT INTO facture (NUMFACTURE, IDFOURNISSEUR , NUMDEPENSE, ETATFACTURE, DEVISE, DATEFACTURE, MONTANTHT, MONTANTTTC, ATTACHEMENT) VALUES ('$Num_Facture', '$IDFOURNISSEUR','$Num_Depense', 'Déposée', '$Devise','$Date_Facture','$Montant_HT','$Montant_TTC','$fileName')";

$result = setRow($sql, $conn);

// Execute the prepared statement
if ($result) {
    header('Location: ../Views/EspaceFournisseur/Facture.php');
} else {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
