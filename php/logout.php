<?php
  session_start();
  
  session_unset();
  
  session_destroy();
  
  if (!isset($_SESSION["unique_id"])) {
    echo "success";
  } else {
    echo "Still here";
  }
  
  
?>
