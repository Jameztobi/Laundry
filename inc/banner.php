<?php

    DEFINE ('DB_USER', 's3025513');
    DEFINE ('DB_PASSWORD', 'awssiash');
    DEFINE ('DB_HOST', 'localhost');
    DEFINE ('DB_NAME', 's3025513');
    
    $dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
    OR die('Could not connect to MySQL: ' .mysqli_connect_error());
        
     //Create a Query
     $query='SELECT Headers FROM corporatePage';

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

<section class="container banner"> 
        <div class="row"> 
            <div class="col-2 banner"> 
                <i class="fas fas fa-city  fa-10x py-1"> 
                </i> 
            </div> 
            <div class="col-10">        
                <p class="lead display-6 text-left"><?php echo $posts[0][0]; ?></p>
                <p class="lead display-6 text-center"><?php echo $posts[1][0]; ?></p>
                <p class="lead display-6 text-right"><?php echo $posts[2][0]?></p>
                <p class="lead display-6 text-center"><?php echo $posts[3][0]?></p>
            </div> 
        </div> 
    
</section> 
  
  
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity= 
"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"> 
    </script> 
      
    <script src= 
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity= 
"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"> 
    </script> 
      
    <script src= 
"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity= 
"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"> 
    </script> 