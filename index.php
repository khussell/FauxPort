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




  <div class="todaysDeals">
    <h1>Today's Deals</h1>


    <?php
      include("config.php");
    ?>


    <div>
    
    <?php
    $query = $con->query("SELECT * FROM deals ORDER BY id DESC");
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

            echo "<div class='card'><img height='100px' src='$image'/><h3>$shipName</h3><p>$description</p><p>$$price</p><form><input type='text' placeholder='Your Name'><button type='submit'>Buy!</button></form></div>";
            
            //</form></div>";
            
            //<h3>$row['shipName']</h3><p>$row['description']</p><p>$$row['price']</p><form><input type="text" placeholder="name"><button type="submit">Buy!</button></form></div>";


        }
    } else {
        echo "0 results";
    }
    


    ?>



    </div>
  <div>
</div>


    
</body>
</html>