<section class="sign-in">
  <div class="container">
        <div class="row">
          <div class="col-lg-6 mx-auto">
            <h2 class="mt-5">Sign In</h2>
            <?php if ($_SESSION['auth_error']) : ?>
              <div class="alert alert-danger"><?= $_SESSION['auth_error'] ?></div>
            <?php 
              unset($_SESSION['auth_error']);
              endif;
            ?> 
            <form method="post" class="contact-form mt-4 mb-5">
              <input type="text" name="login" placeholder="Your login" required>
              <input type="password" name="password" placeholder="Your password" required>
              <button type="submit" class="site-btn">Sign In</button>
            </form>
          </div>
        </div>
  </div>
</section>