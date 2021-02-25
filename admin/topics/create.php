<?php include'../../inc/topics.php'; ?>
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
    
    <title>Admin-Add Topic</title>
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
                       <li><a href="../users/index.php">Manage Users</a></li>
                       <li><a href="index.php">Manage Topics</a></li>
                   </ul>
            </aside>
            <!--//left sidebar-->

            <!--main-->
            <main class="main-content">
                <div class="button-group">
                    <a href="create.php" class="btn btn-danger">Add Topic</a>
                    <a href="index.php" class="btn btn-danger">Manage post</a>
                </div>

                <section class="content">
                    <h2 class="page-title"> Add Topic</h2>                 
                    <form action="create.php" method="post">
                        <div>
                            <label>Name</label>
                            <input type="text" name="name" class="text-input w-100">
                        </div>

                        <div>
                            <label>Description</label>
                            <textarea name="body" id="body"></textarea>
                        </div>

                        <div>
                            <button type="submit" class="btn btn-danger" name='add-topics'>Add Topic</button>
                        </div>
                    </form>
                </section>
            </main>


        </div>
        <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <!--ckeditor--> 
    <script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>
       <!--custom script-->
      <script src="../../js/script.js"></script> 
    </body>

</html>