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
    <h1>FauxPort</h1>
    <a href="./index.php">Buy Deals</a>
    <a href="./create.php">Create Deals</a>
    <a href="./purchased.php">Purchased Deals</a>
  </div>
  <div><div>
</div>

<div class="createForm">
  <h1>Create a Ship Deal</h1>
  <form action="./success.php" method="POST">
    <input type="text" placeholder="Ship Name" name="shipName">
    <br>
    <input type="text" placeholder="Description" name="description">
    <br>
    <input type="number" placeholder="0" name="price">
    <br>


    <?php
      $shipImagesArray = array('ship1.jpg','ship2.jpg','ship3.jpg','ship4.jpg','ship5.jpg','ship6.jpg','ship7.jpg','ship8.jpg');
      foreach($shipImagesArray as $shipImage){
          $shipImage = "./assets/images/" . $shipImage;
          echo "<input name='pickPhoto' value='$shipImage' type='radio'>";
          echo "<img class='pickShipPhoto' src='$shipImage'/>";
      }


    ?>



    <button type="submit">Create!</button>
  </form>
</div>


    
</body>
</html>