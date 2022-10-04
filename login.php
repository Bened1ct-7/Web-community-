
 <?php include "header.php"; ?>
  
  <section class="mt-4">
    <div class="container-lg">
      <div class="row align-items-center justify-content-around">
        <div class="alert errorText col-11 col-md-8 col-xl-7 alert-danger">

        </div>
        <form class="col-11 .form col-md-8 col-xl-7" action="#" method="post">
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input class="form-control" type="email" name="email" placeholder="abc@gmail.com">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <div class="pwd">
              <input class="form-control" type="password" name="password" placeholder="Password">
              <i class="bi bi-eye eye-icon"></i>
            </div>
          </div>
          <div class="mb-3 text-center">
            Not signed up yet? <a href="signup.php" class="text-dark">Sign Up</a>
          </div>
          <div class="d-grid mb-3">
            <input type="submit" name="submit" value="submit" class="btn btn-dark text-light">
          </div>
        </form>
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
  
  <script src="js/showhide.js"></script>
  <script src="js/login.js"></script>
</body>

</html>
