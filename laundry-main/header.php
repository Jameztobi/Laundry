<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> 
    <!--my CSS-->
    <link href="styles/responsive.css" rel="stylesheet" type="text/css">
    
    <!--fontawesome link-->
    <script src="https://kit.fontawesome.com/a46955341a.js" crossorigin="anonymous"></script>
    <title>The Washerman</title>
  </head>
  <body>
      <header>
      <div class="wrapper">
          <nav class="row">
                <figure class="col-4">
                    <img src="images/logo.png" id="logo" alt="Washerman">
                    <figcaption class="logocaptionheader"> <?php echo "FRESHNESS AT NO COST"?></figcaption>
                </figure>
               
                <ul class="col-4">
                    <li class="thispage2"><a href="index.php" class="text-light">Home</a></li>
                    <!--li 1: link this to product.html and give it text Home-->
                    <li class="thispage2"><a href="AboutUs.php" class="text-light">About Us</a></li>
                    <!--li 2: use a dummy link here and give it text About Us-->
                    <li class="thispage2"><a href="corporate.php" class="text-light">Corporate Cleaning</a></li>
                    <!--li 3: link this to product.html and give it text Buy Online-->
                    <li class="thispage2"><a href="pricelist.php" class="text-light">PriceList</a></li>
                    <!--li 4: use a dummy link here and give it text Wedding-->
                    <li class="thispage2"><a href="whyus.php" class="text-light">Why Us</a></li>
                    <!--li 5: give it text Contact-->
                    <li class="thispage2"><a href="contactus.php" class="text-light">Contact Us</a></li>
                    <!--li 5: give it text login-->
                    <li class="thispage2"><a href="login.php" class="text-light">Login </a></li>
                </ul>

                <div class="col-2 search">
                    <div class="navbar navbar-light">
                        <div class="container-fluid">
                            <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-secondary" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
                
                <div class="col-2 iconslinks">
                   <ul id="icons"> 
                        <li class="linkicons"><i class="fas fa-mobile-alt fa-2x text-dark"><a href="#"></a></i></li>
                        <li class="linkicons"><i class="fab fa-facebook-square fa-2x text-dark"><a href="#"></a></i></li>
                        <li class="linkicons"><i class="fab fa-twitter-square fa-2x text-dark"><a href="#"></a></i></li>
                        <li class="linkicons"><i class="fab fa-instagram-square fa-2x text-dark"><a href="#"></a></i></li>
                   </ul>
                </div>  
            </nav>
            <section class="headertheme">
                <h1 class="text-center"><?php echo "WELCOME TO WASHERMAN LAUNDRY SERVICES"; ?></h1>
                <h3 class="text-center"><?php echo "We believe that you desire the very best"; ?></h3>
            </section>
     </div>
    </header>