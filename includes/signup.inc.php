<?php

if(isset($_POST['sub'])) {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $uid = $_POST['uid'];
  $pwd = $_POST['pwd'];
  $pwdrepeat = $_POST['pwdrepeat'];

  require_once("functions.inc.php");
  require_once("db.inc.php");

  // validation from functions.php
  if(emptyValid($name, $email, $uid, $pwd, $pwdrepeat)) {
    header("location: ../signup.php?error=please fill all ");
    exit();
  }

  if(checkEmail($email)) {
    header("location: ../signup.php?error=please fill valid email");
    exit();
  }

  if(checkUid($uid)) {
    header("location: ../signup.php?error=Can't contain special characters");
    exit();
  }


  if(checkPwdLength($pwd)) {
    header("location: ../signup.php?error=password must be atleast 6 characters");
    exit();
  }

  if(checkRepeatPwd($pwd, $pwdrepeat)) {
    header("location: ../signup.php?error=repeat password not match");
    exit();
  }

  $db = connect();
  $pwdhash = password_hash($pwd, PASSWORD_DEFAULT);
  $sql = "INSERT INTO users  (name, email, uid, pwd) 
          VALUES (:name, :email, :uid, :pwd)";
  $statement = $db->prepare($sql);
  $statement->execute([
    ':name'=> $name,
    ':email'=> $email,
    ':uid' => $uid,
    ':pwd' => $pwdhash
  ]);
  header("location: ../login.php");
} else {
  header('location: ../signup.php');
}
