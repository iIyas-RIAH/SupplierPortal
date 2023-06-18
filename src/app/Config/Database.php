<?php


  $host = "localhost"; // or your database host
  $user = "root"; // your database username
  $pass = ""; // your database password
  $db = "supplierportal"; // your database name


  $conn = new mysqli($host, $user, $pass, $db);

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

?>
