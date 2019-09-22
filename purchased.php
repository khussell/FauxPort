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
      <h1 class="todaysDealsTitle">Purchased Deals</h1>
      <div class="cards">

        <?php
          include('config.php');
          if(isset($_POST["name"])) {
            $name = $_POST["name"];
            $id = $_POST["id"];
            //echo "<p>$id</p>";
        
            function insert($name, $id){
              global $con;
              $query = $con->prepare("INSERT INTO buyers(name) VALUES(:name)");
              $query->bindParam(":name", $name);
              $query->execute();
        
              $query2 = $con->prepare("SELECT * FROM buyers WHERE name = :name");
              $query2->bindParam(":name", $name);
              $query2->execute();
              //$query2->execute(['name'=> $name]);

              if ($query2->rowCount() > 0) {
                foreach ($query2 as $row) {
                  $idBuyer= $row['id'];
                  //echo "<p>$idBuyer</p>";
                }
              }else{
                echo "<p>None</p>";
              }

              $query3 = $con->prepare("UPDATE deals SET buyerId = :idBuyer WHERE id = :id ");
              $query3->bindParam(":idBuyer", $idBuyer);
              $query3->bindParam(":id", $id);
              $query3->execute();

              $query4 = $con->query("SELECT * FROM deals LEFT JOIN buyers ON buyers.id = deals.buyerId WHERE buyerId IS NOT NULL ORDER BY buyerid DESC");
                if ($query4->rowCount() > 0) {
                  foreach ($query4 as $row) {
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
                    $buyerId = $row['buyerId'];
                    $buyerName = $row['name'];
     
                    echo "<div class='card'><h3>Purchased by $buyerName<h3><img class='shipPhoto' height='100px' src='$image'/><h3>$shipName</h3><p>$description</p><p>$$price</p></div>";
                  }
                }
              }

            insert($name, $id);

          }else{
            $query4 = $con->query("SELECT * FROM deals LEFT JOIN buyers ON buyers.id = deals.buyerId WHERE buyerId IS NOT NULL ORDER BY buyerid DESC");
            if ($query4->rowCount() > 0) {
              foreach ($query4 as $row) {
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
                 $buyerId = $row['buyerId'];
                 $buyerName = $row['name'];
   
                 echo "<div class='card'><h3>Purchased by $buyerName<h3><img class='shipPhoto' height='100px' src='$image'/><h3>$shipName</h3><p>$description</p><p>$$price</p></div>";
              }
            }
          }
      ?>

    <div>
  <div>
</div>




    
</body>
</html>