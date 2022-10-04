<?php
  session_start();
  
  include "config.php";
  
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $password = test_input($_POST['password']);
  $email = test_input($_POST['email']);

  $password = mysqli_real_escape_string($conn, $password);
  $email = mysqli_real_escape_string($conn, $email);
  
  if (!empty($email) && !empty($password)) {
    $sql = "SELECT * FROM users WHERE email ='{$email}' AND password = '{$password}'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
      $_SESSION['unique_id'] = $row['unique_id'];
      mysqli_close($conn);
      echo "success";
    } else {
      echo "Incorrect Email Address or Password!";
    }
    
  } else {
    echo "All fields are required";
  }

?>
