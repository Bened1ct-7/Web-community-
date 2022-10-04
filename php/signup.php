<?php
  
  include "config.php";

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  
  $fname = test_input($_POST['fname']);
  $lname = test_input($_POST['lname']);
  $email = test_input($_POST['email']);
  $password = test_input($_POST['password']);
  
  $fname = mysqli_real_escape_string($conn, $fname);
  $lname = mysqli_real_escape_string($conn, $lname);
  $email = mysqli_real_escape_string($conn, $email);
  $password = mysqli_real_escape_string($conn, $password);
  
  if (!empty($fname) && !empty($lname) && !empty($password) && !empty($email)) {
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      $sql = "SELECT email FROM users WHERE email = '{$email}'";
      $result = mysqli_query($conn, $sql);
      if(mysqli_num_rows($result) > 0) {
        echo "$email already exists!";
        mysqli_free_result($result);
      } else {
        if (isset($_FILES['img'])) {
          $img_name = $_FILES['img']['name'];
          $tmp_name = $_FILES['img']['tmp_name'];
          $img_explode = explode('.', $img_name);
          $img_ext = end($img_explode);
          $extensions = ['png', 'jpg', 'jpeg'];
          if (in_array($img_ext, $extensions) === true) {
            $time = time();
            $new_image_name = $time.$img_name;
            if (move_uploaded_file($tmp_name, "images/".$new_image_name)) {
              $random_id = rand(time(), 10000000);
              $sql2 = "INSERT INTO users (fname, lname, email, password, img, unique_id) VALUES('{$fname}', '{$lname}', '{$email}', '$password', '{$new_image_name}', '{$random_id}')";
              $result2 = mysqli_query($conn, $sql2);
              if ($result2) {
                $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                if (mysqli_num_rows($sql3) > 0) {
                  $row = mysqli_fetch_assoc($sql3);
                  mysqli_close($conn);
                   echo "success";
                }
              } else {
                echo "Something went wrong " . mysqli_error($conn);
              }
            }
          } else {
            echo "Please select an image in jpg, jpeg or png format";
          }
        } else {
          echo "Please select an image";
        }
      }
    } else {
      echo "$email is not a valid email address";
    }
  } else {
    echo "All fields are required!";
  }
  
  
  
?>
