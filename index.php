<?php include_once("header.php"); ?>

<?php if(!isset($_SESSION['logged'])): ?>
<div class="d-flex justify-content-center align-items-center" style="height: 80vh;">
  <h2 class="text-info">Login To See the contact</h2>
</div>
<?php else: ?>
<div class="d-flex justify-content-center align-items-center" style="height: 80vh;">
  <h2 class="text-success">Welcome, You Have successfully logged In</h2>
</div>
<?php endif; ?>

</body>
</html>