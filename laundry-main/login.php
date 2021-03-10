<?php include'inc/header2.php'; ?>
<?php include'inc/user.php'; ?>

<h1 class="text-center bg-dark text-light">Login</h2>
  <div class="container form">
    <form action="login.php" method="post" class="contact">

      <?php if(count($errors) >0): ?>
        <div class="msg error">
            <?php foreach($errors as $error): ?>
                <li><?php echo $error; ?></li>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

      <div class="form-group">
        <label>Username</label>
        <input type="text" name="username" class="form-control">
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control">
      </div>
      <div class="form-group">
        <button type="submit" name="login-btn" class="btn btn-primary">Sign in</button>
      </div>
      <p>Or <a href="register.php">Sign Up</a></p>
    </form>

  </div>

  <?php include'inc/footer.php'; ?>