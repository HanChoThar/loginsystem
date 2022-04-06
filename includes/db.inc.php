<?php


function connect($dbname = "loginsystem", $dbhost = "localhost", $dbpass = "", $dbuser = "root") {
  try{
    $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass,
    [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    ]);
    return $pdo;
  } catch(PDOException $e) {
    echo $e->getMessage();
  }
}