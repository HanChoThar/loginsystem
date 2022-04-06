<?php
include_once("header.php");

$error = $_GET['error'] ?? '';

?>

<section class="w-75 mx-auto">
  <?php if($error): ?>
  <div id="alert" class="alert alert-danger" role="alert">
    <?php echo $error ?>
  </div>
  <?php endif; ?>
  <form action="includes/signup.inc.php" method="post" class=" mt-4">
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" name="name" class="form-control">
  </div>
  <div class="mb-3">
    <label  class="form-label">Email address</label>
    <input type="email" name="email" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">user id</label>
    <input type="text" name="uid" class="form-control">
  </div>
  <div class="mb-3">
    <label  class="form-label">Password</label>
    <input type="password" name="pwd" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Repeat Password</label>
    <input type="password" name="pwdrepeat" class="form-control">
  </div>
  <div>
    <input type="submit" class="btn btn-primary" value="SignUp" name="sub">
  </div>
  </form>
</section>
  
</body>
</html>