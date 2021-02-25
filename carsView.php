<?php
include"db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cars Ads</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet" type="text/css">
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <style>
        .topnav {
            background-color: #333;
            overflow: hidden;
        }
        .topnav a {
          float: left;
          color: #f2f2f2;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
          font-size: 17px;
          font-family: julius sans one;
        }
        .topnav a:hover {
          background-color: #ddd;
          color: black;
        }
        .topnav a.out {
            float :right;
        }
        .card-title{
            text-align: center;
        }
        .contact {
            margin-left: 70%;
            font-size: 14px;
        }
        .card-text {
            font-family: arvo;
            font-size: 14px;
            color: #333;    
        }
        .card-deck {
            margin-left: 15%;
            margin-top: 5%;
        }
        .header {
            font-family: julius sans one;
            font-size: 40px;
            margin-top: 1%;
        }
        
    </style>
</head>
<body>
   <div class="topnav"><a class="active" href="homeLogout.php">Home</a><a href="profile.php">Profile</a>
   <a class= "out" href="login.php">Logout</a>
   </div><div class="text-center header"><h1>CARS AD</h1></div>
    <?php
    $q="select * from vehicles";
    $res = mysqli_query($connection,$q) or exit("Error in query");
    while($row=mysqli_fetch_assoc($res)) {  
    ?>
    <div class="col-md-4"><div class="card-deck"><div class="card">
    <img class="card-img-top" src="cars.jpg" alt="Card image cap" style="width:100%,height:100%">
    <div class="card-body">
      <h2 class="card-title">Car Ad</h2>
      <p class="card-text">Company:<?php echo " ".$row['company']; ?></p>
      <p class="card-text">Model:<?php echo " ".$row['model']; ?></p>
      <p class="card-text">Car Age:<?php echo " ".$row['carAge']; ?></p>
      <p class="card-text">Fuel Type:<?php echo " ".$row['fuel']; ?></p>
      <p class="card-text">Colour:<?php echo " ".$row['color']; ?></p>
      <p class="card-text">Seating Capacity:<?php echo " ".$row['seating']; ?></p>
      <p class="card-text">Price:<?php echo " Rs. ".$row['price']; ?></p>
      <p class="card-text">Title:<?php echo " ".$row['adTitle']; ?></p>
      <p class="card-text">Description:<?php echo " ".$row['description']; ?></p>
      <a href="detailsCars.php" class="btn btn-primary contact">More Details</a>
    </div>
        </div></div></div>
<?php }
?>
<!--</div>-->
</body>
</html>
