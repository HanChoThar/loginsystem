<?php

session_start();

unset($_SESSION['logged']);
unset($_SESSION['username']);
unset($_SESSION['userid']);

header("location: index.php");
exit();