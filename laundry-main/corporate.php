<?php include'inc/header2.php'; ?>
<h1 class="display-4 text-center"><?php echo"Corporate services"; ?></h1> 

<?php include'inc/banner.php'; ?>
<div class="position-relative line">
  <div class="progress" style="height: 1px;">
    <div class="progress-bar" role="progressbar" style="width: 5%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="80"></div>
  </div>
  <button type="button" class="position-absolute top-0 start-0 translate-middle  btn-secondary rounded-pill" style="margin-left: 7em;" ><?php echo"Towel Rentals"; ?></button>
  <button type="button" class="position-absolute top-0 start-20 translate-middle  btn-secondary rounded-pill" style="margin-left: 20em;"><?php echo"linen Rentals"; ?></button>
  <button type="button" class="position-absolute top-0 start-40 translate-middle  btn-secondary rounded-pill" style="margin-left: 41em;"><?php echo"Salon Towels"; ?></button>
  <button type="button" class="position-absolute top-0 start-60 translate-middle  btn-secondary rounded-pill" style="margin-left: 60em;"><?php echo"catering"; ?></button>
  <button type="button" class="position-absolute top-0 start-80 translate-middle  btn-secondary rounded-pill" style="margin-left: 77em;" ><?php echo"Table Linen"; ?></button>
</div>

<?php
require('mysqli_connect.php');
     
     //Create a Query
     $query='SELECT images FROM content_imagery';

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

<!-- Photo Grid -->

<section class="row"> 
    <div class="col-5">
        <img src="<?php echo $posts[0][0]; ?>" class="corporatephoto">
        <img src="<?php echo $posts[1][0]; ?>" class="corporatephoto">
        <img src="<?php echo $posts[2][0]; ?>" class="corporatephoto">
        <img src="<?php echo $posts[3][0]; ?>" class="corporatephoto">
    </div>
    <div class="col-2">
        <h2 class="client"><?php echo "who are our clients"; ?></h2>
    </div>
    <div class="col-5">
        <img src="<?php echo $posts[4][0]; ?>" class="corporatephoto">
        <img src="<?php echo $posts[5][0]; ?>" class="corporatephoto">
        <img src="<?php echo $posts[6][0]; ?>" class="corporatephoto">
        <img src="<?php echo $posts[7][0]; ?>" class="corporatephoto">
    </div>  
</section>         

<?php include'inc/footer.php'; ?>