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
    
    <title>Admin-Manage Users</title>
  </head>
  <body>
      <header>
          <nav class="row">
                <figure class="col-4">
                    <img src="../../images/logo.png" id="logo" alt="Washerman">
                    <figcaption class=logocaptionheader> <?php echo "FRESHNESS AT NO COST"?></figcaption>
                </figure>    
            </nav>
        </header>
        <!--Admin Page Wrapper-->
        <div id="admin-wrapper">
            <!--Left Sidebar-->
            <aside class="left">
                   <ul>
                       <li><a href="../posts/index.php">Manage Posts</a></li>
                       <li><a href="index.php">Manage Users</a></li>
                       <li><a href="../topics/index.php">Manage Topics</a></li>
                   </ul>
            </aside>
            <!--//left sidebar-->

            <!--main-->
            <main class="main-content">
                <div class="button-group">
                    <a href="create.php" class="btn btn-danger">Add Users</a>
                    <a href="index.php" class="btn btn-danger">Manage Users</a>
                </div>

                <section class="content">
                    <h2 class="page-title"> Manage Users</h2>

                    <table>
                        <thead>
                            <th>SN</th>
                            <th>Name</th>
                            <th>Role</th>
                            <th colspan="2">Action</th>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>David</td>
                                <td>Admin</td>
                                <td><a href="#" class="edit">edit</a></td>
                                <td><a href="#" class="delete">delete</a></td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Kingsley</td>
                                <td>Author</td>
                                <td><a href="#" class="edit">edit</a></td>
                                <td><a href="#" class="delete">delete</a></td>
                            </tr>
                            
                        </tbody>
                    </table>
                </section>
            </main>


        </div>
        <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>

</html>