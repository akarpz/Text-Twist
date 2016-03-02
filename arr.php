<?php
  $myarray = new stdClass();
  $myarray->bananas="great";
    header('HTTP/1.1 200 OK');
    header('Content-Type: application/json');
    echo json_encode($myarray);
?>