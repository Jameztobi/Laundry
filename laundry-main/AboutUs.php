<?php
require('mysqli_connect.php');
     
     //Create a Query
     $query='SELECT * FROM aboutUs';

     //Get Result 
     $result=mysqli_query($dbc, $query);

     //fetch Data
     $posts=mysqli_fetch_all($result, MYSQLI_ASSOC);

     //var_dump($testimonials);
     //Free Result 
     mysqli_free_result($result);

     //Close 
     mysqli_close($dbc);

?>


<?php include'inc/header2.php'; ?>
<?php foreach($posts as $post) : ?>
    <h1 class= "text-center text-light" ><?php echo $post['Headers']; ?></h1>
    <figure>
    <img src=<?php echo $post['images']; ?> alt="This is my about us picture" id="aboutpic">
        <figcaption class="aboutcaption"><?php echo $post['Content']; ?></figcaption>
    </figure>
<?php endforeach; ?>

<h3 class="text-center  text-light display-5" id="abouthead">See what our customer are saying</h3>
<?php include_once'inc/img-slider.php'; ?>
<?php include'inc/footer.php'; ?>   
