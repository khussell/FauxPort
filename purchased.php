



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
    <h1>Purchased Deals</h1>

    <?php
      include('config.php');
      if(isset($_POST["name"])) {
        $name = $_POST["name"];
        $id = $_POST["id"];
        echo "<p>$id</p>";
        
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
                echo "<p>$idBuyer</p>";
            }
          }else{
              echo "<p>None</p>";
          }

          $query3 = $con->prepare("UPDATE deals SET buyerId = :idBuyer WHERE id = :id ");
          $query3->bindParam(":idBuyer", $idBuyer);
          $query3->bindParam(":id", $id);
          $query3->execute();
        
        }

        insert($name, $id);
      } 


    ?>


  <div>


</div>




    
</body>
</html>