<?php
session_start();
if(isset($_POST['sub'])) {
  
    $name = $_POST['name'];
    $pwd = $_POST['pwd'];

    include("db.inc.php");
    $db = connect();
    $sql = "SELECT id,name, email, pwd FROM users WHERE name = :name";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->execute();
    $result = $stmt->fetch();

    if(empty($name and $pwd)) {
      header("location: ../login.php?error=please fill out this fields");
      exit();
    }

    if($result) {
      if(password_verify($_POST['pwd'], $result->pwd)) {
        session_regenerate_id();
        $_SESSION['logged'] = true;
		    $_SESSION['username'] = $_POST['name'];
		    $_SESSION['userid'] = $result->id;

        header("location: ../index.php");
      } else {
        header("location: ../login.php?error=please check your password");
        exit();
      }
    } else {
      header("location: ../login.php?error=please check your username");
      exit();
    }
}

