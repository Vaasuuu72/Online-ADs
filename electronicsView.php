<?php
include"db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Electronics Ads</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet" type="text/css">
    <script src="js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

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
            margin-left: 60%;
            font-size: 14px;
        }
        .card-text {
            font-family: arvo;
            font-size: 14px;
            color: #333;    
        }
        .card-deck {
            margin-left: 1%;
            margin-top: 3%;
        }
        .header {
            font-family: julius sans one;
            font-size: 0px;
            margin-top: 1%;
        }
        h1{
            font-size: 40px;
        }
       
    </style>
</head>
<body>
   <div class="topnav"><a class="active" href="home.php">Home</a>
    <a href="profile.php">Profile</a><a class= "out" href="login.php">Logout</a></div>
    <div class="text-center header"><h1>ELECTRONICS AD</h1></div><div class="row"> 
    <?php
    $q="select * from electronics";
    $res = mysqli_query($connection,$q) or exit("Error in query");
    while($row=mysqli_fetch_assoc($res)) {        
    ?>
    <div class="col-xs-3"><div class="card-deck"><div class="card" style="width:100px">
    <img class="card-img-top" src="responsive.png" alt="Card image cap" style="margin-left: 30px;width:80%;height:50%">
    <div class="card-body"><h2 class="card-title"><?php echo $row['type']; ?></h2>
      <p class="card-text">Company:<?php echo " ".$row['company']; ?></p>
      <p class="card-text">Model:<?php echo " ".$row['model']; ?></p>
      <p class="card-text">Colour:<?php echo " ".$row['color']; ?></p>
      <p class="card-text">Price:<?php echo " Rs. ".$row['price']; ?></p>
      <p class="card-text">Title:<?php echo " ".$row['adTitle']; ?></p>
      <p class="card-text">Description:<?php echo " ".$row['description']; ?></p>
     <a href="detailsElectronics.php" class="btn btn-primary contact">Contact Here</a>
    </div></div></div></div><?php } ?>
 </div>
</body>
</html>