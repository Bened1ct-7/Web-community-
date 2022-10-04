<?php
 
 
 include "php/config.php";
 $sql = "SELECT * FROM users ORDER BY date";
 $result = mysqli_query($conn, $sql);
 
 $comments = mysqli_fetch_all($result, MYSQLI_ASSOC);
 
 mysqli_free_result($result);
 mysqli_close($conn);

?>

 <?php include "header.php"; ?>
  <section class="mt-3">
    <div class="container-lg">
      <div class="text-center mt-3 mb-2">
        <i class="bi bi-bootstrap main-icon"></i>
      </div>
      <div class="text-center h1 text-capitalize fw-bold">
        user thoughts
      </div>
      
      <?php if(isset($_SESSION['unique_id'])): ?>
       <div class="mt-2 text-center">
         <a href="add.php" class="btn text-capitalize btn-dark">add yours</a>
       </div>
       <?php else: ?>
        <div class="center small">You can add your own thoughts if you <a class="small text-dark" href="login.php">Login</a> or <a class="text-dark small" href="signup.php">Sign up</a></div>
      <?php endif; ?>
      
      <div class="row g-3 px-2 mt-3 align-items-center justify-content-around">
        
        <?php foreach($comments as $comment): ?>
          <div data-aos="zoom-in" class="card shadow-sm col-10 col-md-5 col-xl-3">
            <div class="body pt-1">
              <div class="card-head">
                <div class="avatar mt-1">
                  <img src="php/images/<?php echo $comment["img"]; ?>" class="me-1" alt="user">
                  <h5 class="ms-1 h6 my-0 user-name"><?php echo $comment['fname'] . " " . $comment['lname']; ?></h5>
                  </div>
                  <div class="info">
                    <span>Updated: <?php echo date($comment['date']); ?></span>
                  </div>
                  </div>
                  <div class="card-text mt-2">
                    <?php if($comment['body'] !== null): ?>
                    <p class="small"> <?php echo $comment['body']; ?></p>
                    <?php else: ?>
                    <p class="small text-secondary">No thoughts posted yet</p>
                    <?php endif; ?>
                      </div>
                    </div>
                  </div>
        <?php endforeach; ?>
        
      </div>
    </div>
  </section>
  
  <footer class="mt-4 p-2 pb-4">
    <div class="container-lg">
      <div class="copyright text-center">
        Created by Benedict &copy; 2022
      </div>
    </div>
  </footer>
  
</body>

</html>
