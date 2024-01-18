<?php

session_start(); 
$db_name = "finance";
$db_host = "localhost"; 
$db_user = "root";
$db_pass = "";

// On se connecte à MySQL
try {
  $db_connexion = new PDO("mysql:dbname=$db_name;host=$db_host", $db_user, $db_pass);
  $db_connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "You're successfully connected to $db_name";
} catch(PDOException $e) {
    echo "Error : " . $e->getMessage();
}

function is_logged(){
  if (isset($_SESSION['finance'])) {
    $logged = 1;
  }else{
    $logged = 0;
  }

  return $logged;

}

