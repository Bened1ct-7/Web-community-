<?php

  $conn = mysqli_connect('localhost', 'ben', 'test1234', 'comment');
  
  if (!$conn) {
    echo "Database Connection Error";
  } 
?>
