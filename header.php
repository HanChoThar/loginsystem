<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Login System</title>
</head>
<body>
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid d-flex justify-content-around">
    <a class="navbar-brand">Login System</a>
    <div class="d-flex">
      <a class="text-decoration-none text-dark mx-3" href="index.php">Home</a>
      <?php 
        if(isset($_SESSION['logged'])){
          echo "<a class='text-decoration-none text-dark mx-3' href='profile.php'>Profile</a>";
          echo "<a class='text-decoration-none text-dark mx-3' href='logout.php'>Logout</a>";
        } 
        else{
          echo "<a class='text-decoration-none text-dark mx-3' href='login.php'>Login</a>";
          echo "<a class='text-decoration-none text-dark mx-3' href='signup.php'>SignUp</a>";
        }
      ?>
    </div>
  </div>
</nav>