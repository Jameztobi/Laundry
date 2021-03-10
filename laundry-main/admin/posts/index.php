<?php  include('server.php'); ?>
<?php 
	if (isset($_GET['edit'])) {
		$amountID = $_GET['edit'];
		$update = true;
		$record = mysqli_query($dbc, "SELECT * FROM amount WHERE amountID=$amountID");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$price  = $n['price'];
            $title  = $n['title'];
            $cloth1 = $n['cloth1'];
            $cloth2 = $n['cloth2'];
            $cloth3 = $n['cloth3'];
            $cloth4 = $n['cloth4'];
            $cloth5 = $n['cloth5'];

		}
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/4.9.95/css/materialdesignicons.css" rel="stylesheet">
  
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> 
    <!--my CSS-->
    <link href="../../styles/responsive.css" rel="stylesheet" type="text/css">
    <!--my CSS-->
    <link href="../../styles/admin.css" rel="stylesheet" type="text/css">

    <!--fontawesome link-->
    <script src="https://kit.fontawesome.com/a46955341a.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/136b4fde49.js" crossorigin="anonymous"> </script> 
    
    <title>Admin-Add User</title>
  </head>
  <body>
      <header>
          <nav class="row">
                <figure class="col-4">
                    <a href= "../../index.php" ><img src="../../images/logo.png" id="logo" alt="Washerman"></a>
                    <figcaption class=logocaptionheader> <?php echo "FRESHNESS AT NO COST"?></figcaption>
                </figure>    
            </nav>
        </header>
        <!--Admin Page Wrapper-->
        <div id="admin-wrapper">
            <!--Left Sidebar-->
            <aside class="left">
                   <ul>
                       <li><a href="../posts/show.php">Manage Posts</a></li>
                       <li><a href="index.php">Manage Users</a></li>
                       <li><a href="../topics/index.php">Manage Topics</a></li>
                   </ul>
            </aside>
            <!--//left sidebar-->

            <!--main-->
            <main class="main-content">

                <div class="button-group">
                    <a href="index.php" class="btn btn-danger">Add Price</a>
                    <a href="show.php" class="btn btn-danger">Manage Prices</a>
                </div>
                <?php if (isset($_SESSION['message'])): ?>
                    <div class="msg">
                        <?php 
                            echo $_SESSION['message']; 
                            unset($_SESSION['message']);
                        ?>
                    </div>
                <?php endif ?>
                <div class="container crud">
                    <form method="post" action="server.php" class="register" >
                    <h2 class="form-title">PriceList</h2>
                        <div class="form-group">
                            <label>Amount</label>
                            <input type="number" name="price" value="<?php echo $price; ?>" class="form-register">
                            <input type="hidden" name="amountID" value="<?php echo $amountID; ?>">
                        </div>

                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" value="<?php echo $title; ?>" class="form-register">
                        </div>

                        <div class="form-group">
                            <label>Cloth1</label>
                            <input type="text" name="cloth1" value="<?php echo $cloth1; ?>" class="form-register">
                        </div>

                        <div class="form-group">
                            <label>Cloth2</label>
                            <input type="text" name="cloth2" value="<?php echo $cloth2; ?>" class="form-register">
                        </div>

                        <div class="form-group">
                            <label>Cloth3</label>
                            <input type="text" name="cloth3" value="<?php echo $cloth3; ?>" class="form-register">
                        </div>

                        <div class="form-group">
                            <label>Cloth4</label>
                            <input type="text" name="cloth4" value="<?php echo $cloth4; ?>" class="form-register">
                        </div>

                        <div class="form-group">
                            <label>Cloth5</label>
                            <input type="text" name="cloth5" value="<?php echo $cloth5; ?>" class="form-register">
                        </div>

                        <div class="form-group">
                            <?php if ($update == true): ?>
                                <button class="btn btn-primary" type="submit" name="update" >update</button>
                            <?php else: ?>
                                <button class="btn btn-primary" type="submit" name="save" >Save</button>
                            <?php endif ?>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </body>
</html>