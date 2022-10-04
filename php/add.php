<?php 
  session_start();
  include_once "config.php";

  if (isset($_SESSION['unique_id'])) {
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
      $date = date("Y-m-d H:i:s");
    
      $body = test_input($_POST['comment']);
      $body = mysqli_real_escape_string($conn, $body);
      $date = mysqli_real_escape_string($conn, $date);
      
      if (!empty($body)) {
        $sql = "UPDATE users SET body = '{$body}', date = '{$date}' WHERE unique_id = '{$_SESSION['unique_id']}'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
          echo "success";
        }
      } else {
        echo "You must say something to post";
      }
  } else {
    echo "guest";
  }

?>
