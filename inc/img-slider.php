<?php
//index.php
$connect = mysqli_connect('localhost', 's3025513', 'awssiash', 's3025513');

function make_query($connect)
{
 $query = "SELECT * FROM testimonial";
 $result = mysqli_query($connect, $query);
 return $result;
}

function make_slide_indicators($connect)
{
 $output = ''; 
 $count = 0;
 $result = make_query($connect);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '
   <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="'.$count.'" class="active"></li>';
  }
  else
  {
   $output .= '
   <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="'.$count.'"></li>
   ';
  }
  $count = $count + 1;
 }
 return $output;
}

function make_slides($connect)
{
 $output = '';
 $count = 0;
 $result = make_query($connect);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '<div class="carousel-item active">';
  }
  else
  {
   $output .= '<div class="carousel-item">';
  }
  $output .= '
   <img src="'.$row["images"].'" alt="'.$row["Content"].'" class="testimonial"/>
   <div class="carousel-caption">
    <h2 class="test_header">'.$row["Headers"].'</h2>
    <h5 class="test_content">'.$row["Content"].'</h5>
   </div>
  </div>
  ';
  $count = $count + 1;
 }
 return $output;
}

?>

  <div class="container">
   <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
    <?php echo make_slide_indicators($connect); ?>
    </ol>

    <div class="carousel-inner">
     <?php echo make_slides($connect); ?>
    </div>
    
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
     <span class="visually-hidden">Previous</span>
    </a>

    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
     <span class="carousel-control-next-icon"  aria-hidden="true"></span>
     <span class="visually-hidden">Next</span>
    </a>
   </div>
   
  </div>
 <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>