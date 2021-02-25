<?php include "carsServer.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Posted Successfully!</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet" type="text/css">
    <style> 
        body {
            background-image: url("https://cdn2.vectorstock.com/i/1000x1000/33/11/background-blue-abstract-website-pattern-vector-3523311.jpg");
            background-size: cover;
            height: 100%;
            background-size: 100%;
            background-repeat: space;
        }
        .top {
            font-family: "Julius Sans One";
            color:black;
            background-size: cover;
            height: 100%;
            background-size: 100%;
        }
        .a {
            margin-top: 10%;
            font-size: 75px;
            margin-left: 24%;
        }
        .b{
            margin-top: 19%;
            margin-left: 23.5%;
            font-size: 40px;
        }
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
        
    </style>
</head>
<body>
   <div class="topnav">
          <a class="active" href="homeLogout.php">Home</a>
          <a href="profile.php">Profile</a>
          <a class= "out" href="login.php">Logout</a>
       </div> 
    <div class="col-md-10 text-center top"><h1 class="text-center a">You have successfully posted your Ad!</h1>
        <h3 class="text-center b">You can upload the photo of the ad in your profile page.</h3>
    </div>
</body>
</html>