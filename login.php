<?php
include_once("header.php");

$error = $_GET['error'] ?? '';
?>

<section class="w-75 mx-auto mt-4">
  <?php if($error): ?>
  <div class="alert alert-danger" role="alert">
    <?php echo $error ?>
  </div>
  <?php endif; ?>
  <form action="includes/login.inc.php" method="post" >
  <div class="mb-3">
    <label class="form-label">name</label>
    <input type="text" name="name" class="form-control">
  </div>
  <div class="mb-3">
    <label  class="form-label">Password</label>
    <input type="password" name="pwd" class="form-control">
  </div>
  <div>
    <input type="submit" class="btn btn-primary" value="Login" name="sub">
  </div>
  </form>
</section>
  
</body>
</html>