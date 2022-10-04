<?php
  session_start();
  
  include "php/config.php";
  
  if (isset($_SESSION['unique_id'])) {
    $sql = "SELECT * FROM users WHERE unique_id = '{$_SESSION['unique_id']}'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
      mysqli_close($conn);
    }
  }
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/aos.css">
  <title>Comment Blog | Home</title>
  <script src="js/bootstrap.min.js" defer></script>
  <script src="js/aos.js" defer></script>
  <script src="js/logout.js" defer></script>
</head>

<body>
  <header class="bg-dark sticky-top text-light py-3">
    <div class="container-lg d-flex align-items-center justify-content-between">
      <div class="logo d-flex align-items-center">
        <i class="bi bi-bootstrap text-light me-1"></i>
        <a href="index.php" class="navbar-brand ms-1 text-light">BenCoding</a>
      </div>
      <nav>
        <ul class="d-flex align-items-center">
          <li class="nav-item me-1">
              <?php if(isset($row)): ?>
               <span><?php echo $row['fname']; ?></span>
              <?php else: ?>
               <span>Guest</span>
              <?php endif; ?>
          </li>
          <li class="nav-item ms-1">
            <?php if(isset($_SESSION['unique_id'])): ?>
              <a id="logout" class="btn text-light" href="index.php">Logout</a>
            <?php else: ?>
              <a class="btn text-light" href="login.php">Login</a>
            <?php endif; ?>
          </li>
        </ul>
      </nav>
    </div>
  </header>
  
