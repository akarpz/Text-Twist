<?php
  header('HTTP/1.1 200 OK');
  header('Content-Type: application/json');
  $myrack = "ABILOTU";
  echo json_encode($myrack);
?>