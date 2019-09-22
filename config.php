<?php
/*
ob_start();

try {
$con = new PDO("mysql:dbname=fauxport;host=localhost", "root", "flamingo3");
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch(PDOExeption $e){
  echo "Connection failed: " . $e->getMessage();
}
*/

?>

<?php

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

//$con = new mysqli($server, $username, $password, $db);

try {
  $con = new PDO("mysql:host=$server;dbname=$db", $username, $password);
  // set the PDO error mode to exception
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
  }
catch(PDOException $e)
  {
  echo "Connection failed: " . $e->getMessage();
  }
  
?>