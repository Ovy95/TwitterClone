<?php
$pageTitle="SignUp | Twitter"

?>


<?php include 'backend/shared/header.php'; ?>
  <section class="sign-container">
  <?php include 'backend/shared/loginNav.php'; ?>
    <div class="form-container">
      <div class="form-content">
        <h2 class="header__form-container">
            Create your account
        </h2>

        <form action="" class="formField">
          <div class="form-group">
            <label for="firstName">FirstName</label>
            <input type="text" name="firstName" id="firstName">
          </div>

          <div class="form-group">
            <label for="lastName">LastName</label>
            <input type="text" name="lastName" id="lastName">
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
          </div>

          <div class="form-group">
            <label for="password2">Confirm Password</label>
            <input type="password" name="password2" id="password2">
          </div>

          <div class="form-btn-wrapper">
            <button type="submit" class="btn-form">Signup</button>
            <input type="checkbox" class="form-checkbox" id="check" name="remember">
            <label for="remember">Remember me</label>
          </div>
        </form>
      </div>
      <footer class="form-footer">
          <p>Already have an account? <a href="login.php">Login now</a></p>
          </footer>
     </div>
</section>

    
    
    
