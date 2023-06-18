<?php

  include '../Config/Database.php';

  function getRow($query, $conn) {
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $row = $stmt->get_result();
    return $row;
  }

  function setRow($query, $conn) {
    $stmt = $conn->prepare($query);
    $result  = $stmt->execute();
    if ($result) {
        return true;
    } else { 
        return false;
    }
  }