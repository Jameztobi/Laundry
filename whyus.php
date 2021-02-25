<?php
require('mysqli_connect.php');
     
     //Create a Query
     $query='SELECT * FROM whyUs';

     //Get Result 
     $result=mysqli_query($dbc, $query);

     //fetch Data
     $posts=mysqli_fetch_all($result, MYSQLI_ASSOC);

     //var_dump($posts);
     //Free Result 
     mysqli_free_result($result);

     //Close 
     mysqli_close($dbc);

?>

<?php include'inc/header2.php'; ?>
<?php foreach($posts as $post) : ?>
    <h1 class= "text-center text-light"><?php echo $post['Headers']; ?> </h1>
    <figure>
    <img src=<?php echo $post['images'];; ?> alt="This is my whyus us picture" id="whypic" class="w-100">
        <figcaption class="whypic"><?php echo $post['Content']; ?></figcaption>
    </figure>
<?php endforeach; ?>
<h3 class= "text-center text-light"><?php echo "Our selling point"; ?> </h3>
<?php include'inc/card.php'; ?>
<?php include'inc/footer.php'; ?>
