<?php
require('../../mysqli_connect.php');
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
    
    <title>Admin Page</title>
  </head>
  <body>
      <header>
          <nav class="row">
                <figure class="col-4">
                <a href= "../../index.php" ><img src="../../images/logo.png" id="logo" alt="Washerman"></a>
                    <figcaption class="logocaptionheader"> <?php echo "FRESHNESS AT NO COST"?></figcaption>
                </figure>    
            </nav>
        </header>
        <!--Admin Page Wrapper-->
        <div id="admin-wrapper">
            <!--Left Sidebar-->
            <aside class="left">
                   <ul>
                       <li><a href="index.php">Manage Posts</a></li>
                       <li><a href="../users/index.php">Manage Users</a></li>
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

                <section class="content">
                    <h2 class="page-title"> Manage Posts</h2>

                    <table>
                        <thead>
                            <th>SN</th>
                            <th>Amount</th>
                            <th>Title</th>
                            <th>Cloth 1</th>
                            <th>Cloth 2</th>
                            <th>Cloth 3</th>
                            <th>Cloth 4</th>
                            <th>Cloth 5</th>
                            <th colspan="3">Action</th>
                        </thead>
                    
                     <?php foreach($posts as $post) : ?> 
                        <tbody>
                            <tr>
                                <td><?php echo $post['amountID']; ?></td>
                                <td><?php echo $post['price']; ?></td>
                                <td><?php echo $post['title']; ?></td>
                                <td><?php echo $post['cloth1']; ?></td>
                                <td><?php echo $post['cloth2']; ?></td>
                                <td><?php echo $post['cloth3']; ?></td>
                                <td><?php echo $post['cloth4']; ?></td>
                                <td><?php echo $post['cloth5']; ?></td>
                                <td><a href="index.php?edit=<?php echo $post['amountID']; ?>" class="edit_btn">Edit</a></td>
                                <td><a href="server.php?del=<?php echo $post['amountID']; ?>" class="del_btn">delete</a></td>
                            </tr>
                        </tbody>
                    <?php endforeach; ?>
                    </table>

                </section>
            </main>


        </div>
        <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>

</html>