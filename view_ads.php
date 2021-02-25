<?php include "view_server.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        }
        .topnav a:hover {
          background-color: #ddd;
          color: black;
        }
        .topnav a.out {
            float :right;
        }
        .cars {
            border-radius: 100px;
            border: none;
            transition: transform .2s;
            font-size: 300%;
            margin-top: auto;
            margin-left: 0%;
        }
        .cars:focus,.cars:active {
            outline: none !important;
            box-shadow: none;
        }
        .cars:hover {
            transform: scale(1.5);
        }
        .home,.electronics {
            border-radius: 100px;
            border: none;
            transition: transform .2s;
            font-size: 300%;
            margin-top: auto;
            margin-left: 1.5%;
        }
        .home:focus,.electronics:focus,.home:active,.electronics:active {
            outline: none !important;
            box-shadow: none;
        }
        .home:hover,.electronics:hover {
            transform: scale(1.5);
        }
        .header {
            font-family: cursive;
            color: white;
            font-size: 45px;
            margin-top: 8%;
        }
        body {
            background-image: url("https://wallpaperaccess.com/full/503216.jpg");
        }
    </style>
</head>
<body>
   <div class="topnav">
          <a class="active" href="homeLogout.php">Home</a>
          <a href="profile.php">Profile</a>
          <a class= "out" href="login.php">Logout</a>
   </div> 
   <br>
   <form action="view_ads.php" method="post">
       <div class = "category text-center">
            <h2 class="header">Choose a Category:</h2><br><br>
           <button class="btn-floating btn-lg btn-primary cars" name="cars"><i class="fa fa-car"></i></button>
           <button class="btn-floating btn-lg btn-success home" name="home"><i class="fa fa-home"></i></button>
           <button class="btn-floating btn-lg btn-warning electronics" name="electronics"><i class="glyphicon glyphicon-phone"></i></button>
       </div></form>
</body>
</html>