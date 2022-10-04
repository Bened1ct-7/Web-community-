
<?php include "header.php"; ?>

  <section class="my-3">
    <div class="container-lg">
      <div class="mb-3 text-center">
        <i class="bi bi-bootstrap main-icon"></i>
      </div>
      <div class="text-center mb-4">
        <h2 class="text-capitalize">Add your comment</h2>
      </div>
      <div class="row align-items-center justify-content-center">
        <div class="alert errorText col-11 col-md-8 col-xl-7 alert-danger">

        </div>
        <form class="col-11 col-md-8 col-lg-7" action="#" method="POST">
          <div>
            <span class="text-secondary">What's on your mind?</span>
            <textarea name="comment" class="form-control" style="height: 100px;"></textarea>
          </div>
          <div class="my-3">
            <input type="submit" value="Post" name="submit" class="btn btn-dark">
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
  
  <script src="js/add.js"></script>
</body>

</html>
