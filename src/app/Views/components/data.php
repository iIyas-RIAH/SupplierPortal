<?php

include_once '../../Config/Database.php';

if (isset($_POST['depense'])) {
    $id = $_POST['depense'];
    $res = mysqli_query($conn, "SELECT NUMFACTURE FROM facture WHERE NUMDEPENSE = '$id'");
    $facture = mysqli_fetch_all($res, MYSQLI_ASSOC);
    echo json_encode($facture);
}
