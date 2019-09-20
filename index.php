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
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaGT97O0oaUjcDT5RFIud9A6ktHQ73ZDHtgi_h67Z1HuF4UZGu" />
      <h3>The Fun Ship</h3>
      <p>This ship comes complete with anything you need or want!</p>
      <p>$300</p>
      <form>
        <input type="text" placeholder="name">
        <button type="submit">Buy!</button>
      </form>
    </div>
  <div>
</div>


    
</body>
</html>