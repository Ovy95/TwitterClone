<?php
$pageTitle="Login | Twitter"

?>


<?php include 'backend/shared/header.php'; ?>
  <section class="sign-container">
    <?php include 'backend/shared/loginNav.php'; ?>
    <div class="form-container">
      <div class="form-content">
        <h2 class="header__form-container">
            Login to Twitter
        </h2>

        <form action="" class="formField">
          <div class="form-group">
            <label for="username">Username or Email</label>
            <input type="text" name="username" id="username">
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
          </div>


          <div class="form-btn-wrapper">
            <button type="submit" class="btn-form">Log in</button>
            <input type="checkbox" class="form-checkbox" id="check" name="remember">
            <label for="remember">Remember me</label>
          </div>
        </form>
      </div>
      <footer class="form-footer">
          <p>New to Twitter?<a href="signUp.php"> Sign up now!</a></p>
          </footer>
     </div>
</section>

    
    
    
