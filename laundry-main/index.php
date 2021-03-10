
<?php
require('mysqli_connect.php');
     
     //Create a Query
     $query='SELECT * FROM home';

     //Get Result 
     $result=mysqli_query($dbc, $query);

     //fetch Data
     $posts=mysqli_fetch_all($result, MYSQLI_NUM);

     //var_dump($posts);
     //Free Result 
     mysqli_free_result($result);

     //Close 
     mysqli_close($dbc);

?>    
<?php include'header.php'; ?>
      <main>
      <section class="headertheme">
                <h1 class="text-center"><?php echo $posts[6][3]; ?></h1>
                <h3 class="text-center"><?php echo $posts[6][1]; ?></h3>
      </section>

      <section class="row">
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $posts[2][2]; ?>" class="card-img-top" alt="This is an image">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $posts[2][3]; ?></h5>
                      <p class="card-text"><?php echo $posts[2][1]; ?></p>
                      <a href="pricelist.php" class="btn btn-primary mx-auto d-block"><?php echo "Book now"; ?></a>
                    </div>
                  </div>
            </div>

            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $posts[4][2]; ?> " class="card-img-top" alt="This is an image">
                    <div class="">
                      <h5 class="card-title"><?php echo $posts[4][3]; ?></h5>
                      <p class="card-text"><?php echo $posts[4][1]; ?></p>
                      <a href="pricelist.php" class="btn btn-primary mx-auto d-block"><?php echo "Book now"; ?></a>
                    </div>
                  </div>
            </div>

            <div class="col-4" id="special">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $posts[3][2]; ?>" class="card-img-top" alt="This is an image">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $posts[3][3]; ?></h5>
                      <p class="card-text"><?php echo $posts[3][1]; ?></p>
                      <a href="pricelist.php" class="btn btn-primary mx-auto d-block"><?php echo "Book now"; ?></a>
                    </div>
                  </div>
            </div> 
        </section>

        <section class="bg-light">
            <div class="displayFoto">
                <h3 class="appliance"><?php echo $posts[5][3]; ?></h3>
                <h5 class="appliance"><?php echo"For us in washerman attention to detail is the number one rule of the game.</br>
                 We take our time to ensure your clothes enjoy you"?>
            </div>
       </section>
      </main>
      <?php include'inc/footer.php'; ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>


