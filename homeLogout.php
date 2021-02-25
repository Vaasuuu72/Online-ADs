<?php include "homeServer.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        .ad {
            padding-top: 190px;
            width: 95%;
            margin-left:110%;
            text-align: center;
            border: 0;
            padding-bottom: 330px;
        }
        .btn1 , .btn2 {
            font-size: 25px;
            width: 70%;
            border-radius: 1;
            border-color: blueviolet;
            background-color: white;
            color: #16A4A9;
            border: 10%;
            margin-top: 2%;
            height: 80px;
            box-shadow: 0 0 1px #ccc;
            -webkit-transition: all 0.5s ease-in-out;
        }
        .btn1:hover{
            font-size: 25px;
            padding: 20px;
            border-radius: 1;
            border-color: blueviolet;
            background-color: #FCCEA9;
            cursor: pointer;
            -webkit-transform: scale(1.1);
        }   
        .btn2:hover{
            font-size: 25px;
            padding: 20px;
            border-radius: 1;
            border-color: blueviolet;
            background-color: lightsalmon;
            cursor: pointer;
            -webkit-transform: scale(1.1);
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
          font-family: "Julius Sans One";
        }
        
        .topnav a:hover{
          background-color: #ddd;
          color: black;
        }
        .topnav.active::before{
            position: absolute;
            height: 20px;
            width: 100%;
            background-color: red;
        }
/*
        .topnav a.active {
          background-color: #4CAF50;
          color: white;
        }
*/
        .topnav a.out {
            float :right;
        }
        .top {
            font-family: "Julius Sans One";
            color:black;
            background-image: url("https://images.unsplash.com/photo-1514537619958-0bd4fc44963c?auto=format&fit=crop&w=2602&q=80");
            background-size: cover;
            height: 100%;
            background-size: 100%;
            
        }
        .a {
            margin-top: 13%;
            font-size: 100px;
        }
        .b {
            margin-left: 26%;
            margin-top: 18%;
            font-size: 100px;
            opacity: 0.7;
        }
    </style>
</head>
<body>
     
      <nav class="topnav">
          <a class="active" href="homeLogout.php">Home</a>
          <a href="profile.php">Profile</a>
          <a class= "out" href="login.php">Logout</a>
      </nav>
      <div class="row">
        <div class="col-md-12 text-center top">
          <h1 class="text-center a">ONLINE AD COMPANY</h1>
          <div class="col-xs-6 b"><a href="#ad"><span class="glyphicon glyphicon-chevron-down arrowwhite" aria-hidden="true" id="arrow"></span></a></div><div class="col-md-4 text-center c"><form action="" method = "post"><div class="ad" id="ad">
            <button type="submit" class = "btn1" name = "Post_an_ad">Post an ad</button><br>
            <button type="submit" class = "btn2" name = "View_ads" value = "">View ads</button></div></form></div></div></div>
        <script>
        $(document).ready(function(){
          $("a").on('click', function(event) {
            if (this.hash !== "") {
              event.preventDefault();
              var hash = this.hash;
              $('html, body').animate({
                scrollTop: $(hash).offset().top
              }, 800, function(){

                window.location.hash = hash;
              });
            } 
          });
        });
    </script>
</body>
</html>