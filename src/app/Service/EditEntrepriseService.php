<?php

include_once '../Config/Database.php';
include_once '../Controllers/Controller.php';

$CIN = $_POST['cin'];
$Type = $_POST['Type'];
$PME = $_POST['PME'];
$Name = $_POST['Nom'];
$Forme_Juridique = $_POST['Forme_Juridique'];
$Registre_Commercial = $_POST['Registre_Commercial'];
$Pays = $_POST['Pays'];
$Ville = $_POST['Ville'];
$Code_Postal = $_POST['Code_Postal'];
$ICE = $_POST['ICE'];
$Identifiant_Fiscal = $_POST['Identifiant_Fiscal'];
$Taxe_Professionnelle = $_POST['Taxe_Professionnelle'];
$CNSS = $_POST['CNSS'];
$Phonee = $_POST['Phonee'];
$Faxe = $_POST['Faxe'];
$Adresse = $_POST['Adresse'];

$sql = "UPDATE entreprise SET TYPEE ='$Type', NOM ='$Name', PME ='$PME', FORMEJURIDIQUE ='$Forme_Juridique', REGISTRECOMMERCIAL ='$Registre_Commercial', PAYS ='$Pays', VILLE ='$Ville', CODEPOSTAL ='$Code_Postal', ICE ='$ICE', IDENTIFIANTFISCAL ='$Identifiant_Fiscal', TAXEPROFESSIONNELLE ='$Taxe_Professionnelle', CNSS ='$CNSS', PHONEE ='$Phonee', FAX ='$Faxe', ADRESSE ='$Adresse' WHERE CIN = '$CIN'";

$result = setRow($sql, $conn);

// Execute the prepared statement
if ($result) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
