<?php

include_once '../Config/Database.php';
include_once '../Controllers/Controller.php';

$idReclamation = $_GET['idReclamation'];

$sql = "UPDATE reclamation SET VALIDÉ = true WHERE IDM = '$idReclamation'";

$email = mysqli_fetch_row(mysqli_query($conn, "SELECT EMAIL FROM fournisseur, reclamation WHERE reclamation.IDFOURNISSEUR = fournisseur.IDFOURNISSEUR and IDM = '$idReclamation'"))[0];

$result = setRow($sql, $conn);

if (mail($email, 'Reclamation', 'Bonjour, une nouvelle reclamation a été reçu, veuillez la consulter.') && mail($email, 'Avis', 'Bonjour, votre reclamation a été bien envoyez, Notre service clientéle va la prendre en charge.') && $result) {
    header('Location: ../Views/EspaceFournisseur/Réclamations.php');
} else {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}