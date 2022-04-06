<?php

function emptyValid($name, $email, $uid, $pwd, $pwdrepeat) {
  if(empty($name and $email and $uid and $pwd and $pwdrepeat)) {
    return true;
  }
}

function checkEmail($email) {
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    return true;
  }
}

function checkPwdLength($pwd) {
  if(strlen($pwd) < 7) {
    return true;
  }
}

function checkRepeatPwd($pwd, $pwdrepeat) {
  if($pwd !== $pwdrepeat) {
    return true;
  }
}

function checkUid($uid) {
  if(!preg_match("/^[a-zA-Z0-9]*$/", $uid)) {
    return true;
  }
}
