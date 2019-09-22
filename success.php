<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FauxPort</title>
    <link rel="stylesheet" href="./assets/css/style.css"/>
    <link rel="icon" href="assets/images/icon.png" type="image/gif" sizes="16x16">
</head>
<body>

<div class="wrapper">
  <div class="nav">
    <h1 class="logo">FauxPort</h1>
    <div class="links">
      <a href="./index.php">Buy Deals</a>
      <a href="./create.php">Create Deals</a>
      <a href="./purchased.php">Purchased Deals</a>
    </div>
    
  </div>




  <div class="todaysDeals">
    <img class="transShip" src="./assets/images/transShip.png">
    <img class="water" width="100%" height="500px" src="./assets/images/water1.png">
</div>


  <div class="success">
    <?php
    include("config.php");
    global $con;
    if(isset($_POST["shipName"]) && isset($_POST["description"]) && isset($_POST["price"]) && isset($_POST["pickPhoto"])) {
      $shipName = $_POST["shipName"];
      $description = $_POST["description"];
      $price = $_POST["price"];
      $pickPhoto = $_POST["pickPhoto"];
      //echo $shipName;
      //echo $description;
      //echo $price;
      //echo $pickPhoto;
      function create($shipName, $description, $price, $pickPhoto){
      global $con;
      $query = $con->prepare("INSERT INTO deals(shipName, description, price, image)
                              VALUES (:shipName, :description, :price, :image)");
      $query->bindParam(":shipName", $shipName);
      $query->bindParam(":description", $description);
      $query->bindParam(":price", $price);
      $query->bindParam(":image", $pickPhoto);

      return $query->execute();
      }

      create($shipName, $description, $price, $pickPhoto);

      echo "<h1 class='successTitle'>Your Ship Deal has been Created!</h1>";
      echo "<a class='buy successBtn' href='./index.php'>Check it out</a>";
    }else{
      echo "<h1 class='successTitle'>You didn't fill in all required fields!</h1>";
      echo "<a class='buy successBtn' href='./create.php'>Try again</a>";
    }


  ?>
    
  <div>


</div>