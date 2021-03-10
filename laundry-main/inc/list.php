<?php
require('mysqli_connect.php');
 //Create a Query
 $query='SELECT * FROM amount';

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

<div class="demo10">
    <div class="container">
        <div class="row">
        <?php foreach($posts as $post) : ?> 
            <div class="col-md-3 col-sm-6">
                <div class="pricingTable10">
                    <div class="pricingTable-header">      
                            <h3 class="heading"><?php echo $post['title']; ?></h3>
                            <span class="price-value">
                                <span class="currency">$</span> <?php echo $post['price']; ?>
                                <span class="month">/mo</span>
                            </span>
                        </div>
                        <div class="pricing-content">
                            <ul>
                                <li><?php echo $post['cloth1']; ?></li>
                                <li><?php echo $post['cloth2']; ?></li>
                                <li><?php echo $post['cloth3']; ?></li>
                                <li><?php echo $post['cloth4']; ?></li>
                                <li><?php echo $post['cloth5']; ?></li>
                            </ul>
                            <a href="register.php" class="read">sign up</a>
                        </div>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
</div>          