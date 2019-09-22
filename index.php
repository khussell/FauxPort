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
      <h1 class="todaysDealsTitle">Today's Deals</h1>
  

      <?php
        include("config.php");
      ?>


      <div class="cards">
    
        <?php
          $query = $con->query("SELECT * FROM deals WHERE buyerId IS NULL ORDER BY id DESC");
          if ($query->rowCount() > 0) {
            foreach ($query as $row) {
              //print $row['shipName'] . "\t";
              //print $row['description'] . "\t";
              //print $row['price'] . "\n";
              //print $row['image'] . "\n";
              $shipName = $row['shipName'];
              $image = $row['image'];
              $description = $row['description'];
              $price = $row['price'];
              $image = $row['image'];
              $id = $row['id'];

              echo "<div class='card'><img class='shipPhoto' height='100px' src='$image'/><h3>$shipName</h3><p>$description</p><p>$$price</p><form action='purchased.php' method='POST'><input type='text' name='name' class='nameEntry' placeholder='Your Name'><input style='display:none;' value='$id' name='id'><button class='buy' type='submit'>Buy!</button></form></div>";
            }
          } else {
            echo "0 results";
          }
        ?>

      </div>
    </div>
  </div>
</div>


    
</body>
</html>