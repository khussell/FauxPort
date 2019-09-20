<?php

ob_start();

try {
  $con = new PDO("mysql:dbname=fauxPort;host=localhost", "root", "flamingo3");
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch(PDOExeption $e){
  echo "Connection failed: " . $e->getMessage();
}




?>