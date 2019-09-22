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

    <div class="dealsContent">
      <h1 class="todaysDealsTitle">Create a Ship Deal</h1>

      <div class="createForm">
        <form action="./success.php" method="POST">
          <input class="createInput" type="text" placeholder="Ship Name" name="shipName">
          <br>
          <input class="createInput" type="text" placeholder="Description" name="description">
          <br>
          <input class="createInput" type="number" placeholder="Price" name="price">
          <br>
          <p class="pick">Pick a Photo:</p>

          <div class="allRadios flex-container">
            <?php
              $shipImagesArray = array('ship1.jpg','ship2.jpg','ship3.jpg','ship4.jpg','ship5.jpg','ship6.jpg','ship7.jpg','ship8.jpg');
              foreach($shipImagesArray as $shipImage){
                $shipImage = "./assets/images/" . $shipImage;
                echo "<div class='radio'><input name='pickPhoto' class='radioButton' value='$shipImage' type='radio'><img class='pickShipPhoto' src='$shipImage'/></div>";
                }
            ?>
          </div>
    

          <br>
         <div class="buttonDiv">
           <button type="submit" class="buy">Create!</button>
         </div>
        </form>
      </div>
    </div>
</div>
    
</body>
</html>