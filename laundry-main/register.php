
<?php include'inc/header2.php'; ?>
<?php include'inc/user.php'; ?>
  <div class="container register">

    <form action="register.php" method="post" class="register">
      <h2 class="form-title text-center">Register</h2>

    <?php if(count($errors) >0): ?>
        <div class="msg error">
            <?php foreach($errors as $error): ?>
                <li><?php echo $error; ?></li>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

      <div class="form-group">
        <label>Username</label>
        <input type="text" name="username" class="form-register" value=<?php echo $username?>>
      </div>
      <div class="form-group">
        <label>Email Address</label>
        <input type="text" name="email" class="form-register" value=<?php echo $email?>>
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-register" value=<?php echo $password?>>
      </div>
      <div class="form-group">
        <label>Password Confirmation</label>
        <input type="password" name="passwordConf" class="form-register" value=<?php echo $passwordConf?>>
      </div>
      <div class="form-group">
        <button type="submit" name="register-btn" class="btn btn-primary">Register</button>
      </div>
      <p>Or <a href="login.php">Sign In</a></p>
    </form>

  </div>

  <?php include'inc/footer.php'; ?>

