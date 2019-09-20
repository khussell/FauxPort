
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FauxPort</title>
    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="icon" href="assets/images/icon.png" type="image/gif" sizes="16x16">
</head>
<body>

<div class="wrapper">
  <div class="nav">
    <h1>FauxPort</h1>
    <a href="./index.php">Buy Deals</a>
    <a href="./create.php">Create Deals</a>
    <a href="./purchased.php">Purchased Deals</a>
  </div>


  <div>
    <?php
  
    if(isset($_POST["shipName"]) && isset($_POST["description"]) && isset($_POST["price"]) && isset($_POST["pickPhoto"])) {
      $shipName = $_POST["shipName"];
      $description = $_POST["description"];
      $price = $_POST["price"];
      $pickPhoto = $_POST["pickPhoto"];
      //echo $shipName;
      //echo $description;
      //echo $price;
      //echo $pickPhoto;
      echo "<h1>Your Ship Deal has been Created!</h1>";
      echo "<a href='./index.php'>Check it out</a>";
    }else{
      echo "<h1>You didn't fill in all required fields!</h1>";
      echo "<a href='./create.php'>Try again</a>";
    }


  ?>
    
  <div>


</div>