<?php

include_once '../Config/Database.php';

include "xlsx.php";


$excel = SimpleXLSX::parse($_FILES['excel']['tmp_name']);
$rowcol = $excel->dimension(0);
$i = 0;
if ($rowcol[0] != 1 && $rowcol[1] != 1) {
    foreach ($excel->rows(0) as $key => $row) {
        //print_r($row);
        $q = "";
        foreach ($row as $key => $cell) {
            $q .= "'" . $cell . "',";
        }
        $query = "INSERT INTO " . $excel->sheetName(0) . " values (" . rtrim($q, ",") . ");";

        mysqli_query($conn, $query);
        $i++;
    }
}

header('Location: ' . $_SERVER['HTTP_REFERER']);