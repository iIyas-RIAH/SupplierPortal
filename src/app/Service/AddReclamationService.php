<?php

include_once '../Config/Database.php';
include_once '../Controllers/Controller.php';

$IDFOURNISSEUR = $_POST['IDFOURNISSEUR'];
$Num_Depense = $_POST['Num_Depense'];
$Num_Facture = $_POST['Num_Facture'];
$objet = $_POST['objet'];
$message = $_POST['message'];

$email = mysqli_fetch_row(mysqli_query($conn, "SELECT EMAIL FROM fournisseur WHERE IDFOURNISSEUR = '$IDFOURNISSEUR'"))[0];

$sql = "INSERT INTO reclamation (IDFOURNISSEUR, TITRE, TEXTE, NUMDEPENSE, NUMFACTURE) VALUES ('$IDFOURNISSEUR', '$objet', '$message', '$Num_Depense', '$Num_Facture')";

$result = setRow($sql, $conn);

$to = 'ilyasriah2000@gmail.com';

if (mail($email, 'Reclamation', 'Bonjour, une nouvelle reclamation a été reçu, veuillez la consulter.') && mail($email, 'Avis', 'Bonjour, votre reclamation a été bien envoyez, Notre service clientéle va la prendre en charge.') && $result) {
    header('Location: ../Views/EspaceFournisseur/Réclamations.php');
} else {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
