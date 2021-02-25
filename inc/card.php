<?php
require('mysqli_connect.php');
     
     //Create a Query
     $query='SELECT * FROM objective';

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

<section class="row">
    <?php foreach($posts as $post) : ?>
        <div class='w-25 bg-secondary'>
            <div class="card-group">
                    <img src=<?php echo $post["images"]?> class="card-img" alt="<?php echo $post["Headers"]?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $post["Headers"]?></h5>
                        <p class="card-text"><?php echo $post["Content"]?></p>
                    </div>
            </div>
        </div>
   <?php endforeach; ?>
   
</section>