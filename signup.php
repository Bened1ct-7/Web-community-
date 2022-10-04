
 <?php include "header.php"; ?>
  <section class="mt-4">
    <div class="container-lg">
      <div class="row align-items-center justify-content-around">
        <div class="alert errorText col-11 col-md-8 col-xl-7 alert-danger">
        
        </div>
        <form class="col-11 form col-md-8 col-xl-7" action="#" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="fname" class="form-label">First Name</label>
            <input class="form-control" type="text" name="fname" placeholder="First name">
          </div>
          <div class="mb-3">
            <label for="lname" class="form-label">Last Name</label>
            <input class="form-control" type="text" name="lname" placeholder="Last name">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input class="form-control" type="text" name="email" placeholder="abc@gmail.com">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <div class="pwd">
              <input class="form-control" type="password" name="password" placeholder="Password">
              <i class="bi bi-eye eye-icon"></i>
            </div>
          </div>
          <div class="mb-3">
            <label for="img">Upload Profile Picture </label>
            <input type="file" name="img" class="form-control">
          </div>
          <div class="mb-3 text-center">
            Already a member? <a class="text-dark" href="login.php">Login</a>
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
  <script src="js/signup.js"></script>
</body>

</html>
