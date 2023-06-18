<?php

include_once '../Config/Database.php';

$Num_Facture = $_GET['idFacture'];

$sql1 = "SELECT NUMDEPENSE, MONTANTTTC FROM facture WHERE NUMFACTURE = '$Num_Facture'";

$factureResult = mysqli_fetch_row(mysqli_query($conn, $sql1));

$sql2 = "UPDATE depense SET MONTANT = MONTANT - '$factureResult[1]' WHERE NUMDEPENSE = '$factureResult[0]'";

$depenseResult = mysqli_query($conn, $sql2);

$sql3 = "DELETE FROM facture WHERE NUMFACTURE = '$Num_Facture'";

$result = mysqli_query($conn, $sql3);

unlink('../uploadFiles/'.$Num_Facture.'.pdf');

// Execute the prepared statement
if ($depenseResult && $result) {
    header('Location: ../Views/EspaceFournisseur/Facture.php');
} else {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
