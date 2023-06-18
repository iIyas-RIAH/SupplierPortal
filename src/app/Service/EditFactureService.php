<?php

include_once '../Config/Database.php';
include_once '../Controllers/Controller.php';

$Fournisseur = $_POST['Fournisseur'];
$Num_Facture = $_POST['Num_Facture'];
$Num_Depense = $_POST['Num_Depense'];
$Etat_Facture = $_POST['Etat_Facture'];
$Devise = $_POST['Devise'];
$Date_Facture = $_POST['Date_Facture'];
$Montant_HT = $_POST['Montant_HT'];
$Montant_TTC = $_POST['Montant_TTC'];
$Date_Depose = $_POST['Date_Depose'];
$Date_Valide = $_POST['Date_Valide'];
$Date_Rejete = $_POST['Date_Rejete'];
$Date_Traitement = $_POST['Date_Traitement'];
$Date_Paye = $_POST['Date_Paye'];
$Validé = $_POST['Validé'];
$Motif = $_POST['Motif'] ?? null;

switch ($Etat_Facture) {
    case "Validée":
        $Date_Valide = date("Y-m-d");
        break;
    case "Rejetée":
        $Date_Rejete = date("Y-m-d");
        break;
    case "Traitement":
        $Date_Traitement = date("Y-m-d");
        break;
    case "Payée":
        $Date_Paye = date("Y-m-d");
        break;
    default:
        break;
}


$sql = "UPDATE facture SET IDFOURNISSEUR ='$Fournisseur', NUMDEPENSE ='$Num_Depense', ETATFACTURE ='$Etat_Facture', DEVISE ='$Devise',
 DATEFACTURE ='$Date_Facture', MONTANTHT ='$Montant_HT', MONTANTTTC ='$Montant_TTC', DATEDEPOSE ='$Date_Depose', DATEVALIDE ='$Date_Valide',
 DATEREJETE ='$Date_Rejete', DATETRAITEMENT ='$Date_Traitement', DATEPAYE ='$Date_Paye', VALIDÉFOURNISSEUR ='$Validé', MOTIF ='$Motif' WHERE NUMFACTURE ='$Num_Facture'";

$result = setRow($sql, $conn);

// Execute the prepared statement
if ($result) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
