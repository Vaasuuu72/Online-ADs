<?php include "electronicsServer.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Electronics Ad</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style> 
        body {
            background-image: url(electronics.jpg);
            background-size: cover;
            height: 100%;
            background-size: 100%;
            background-repeat: round;
        }
        .top {
            font-family: "Julius Sans One";
            color:black;
            background-size: cover;
            height: 100%;
            background-size: 100%;
        }
        .a {
            margin-top: 14%;
            font-size: 80px;
            margin-left: 22%;
        }
        .b {
            margin-left: 36.8%;
            margin-top: 27%;
            font-size: 100px;
            opacity: 0.8;
            margin-bottom: 0%;
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
        .form-control {
            width: 100%;
            margin-left: 113.5%;
            font-family: arvo;
            opacity: 0.8;
            -webkit-transition: all 0.5s ease-in-out;
        }
        .form-control:focus{
            -webkit-transform: scale(1.1);
        }
        .in {
            margin-left: 12%;
            width: 80%;
            text-align: center;
            padding-top: 10px;
            font-size: 20px;
            font-family: arvo;
        }
        .in2{
            margin-left: 124%;
            width: 80%;
            text-align: center;
            padding-top: 10px;
            font-size: 20px;
            font-family: arvo;
        }
        .ele {
            margin-left: 13%;
            margin-top: 0%;
            margin-bottom: 1%;
        }
        .ad{
            width: 34%;
            padding-top: 5px;
        }
        .form-group {
            padding-top: 55px;
        }
        .sign {
            width: 35%;
            margin-left: 150%;
            font-size: 19px;
            box-shadow: 0 0 1px #ccc;
            -webkit-transition: all 0.5s ease-in-out;
            
        }
        .sign:hover{
            -webkit-transform: scale(1.1);
        }
        input[type=number]::-webkit-inner-spin-button, 
        input[type=number]::-webkit-outer-spin-button { 
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            margin: 0; 
        }
        .type1 {
            font-family: arvo;
            font-size: 20px;
            width: 32.5%;
            -webkit-transition: all 0.5s ease-in-out;
            opacity: 0.8;
            margin-left: 11%;
            margin-bottom: -10%;
            
        }
        .type1:focus{
            -webkit-transform: scale(1.1);
        }
        textarea{
            resize: none;
            overflow: hidden;
        }
    </style>
</head>
<body>
   <div class="topnav">
          <a class="active" href="homeLogout.php">Home</a>
          <a href="profile.php">Profile</a>
          <a class= "out" href="login.php">Logout</a>
   </div> 
   <div class="col-md-10 text-center top">
          <h1 class="text-center a">ELECTRONICS FOR SALE</h1>
          <div class="col-xs-6 b"> <a href="#ad"><span class="glyphicon glyphicon-chevron-down arrowwhite" aria-hidden="true" id="arrow" style="color:white"></span></a></div>
          <div class="text-center ele" id="ele"><form action="" method="post">
            <div class="type" id="type"><label for="type" class="in"><b>Type: </b></label><br>
            <select name="type" class="type1 text-center" required>
                   <option selected disabled >Choose Product:</option>
                    <option value="SmartPhone" name="Smartphone">SmartPhone</option>
                    <option value="Laptop" name="Laptop">Laptop</option>
                    <option value="Television" name="Television">Television</option>
                    <option value="AirConditioner" name="AirConditioner">AirConditioner</option>
                </select></div>
         <div class="input-group ad" id="ad"><label for="company" class="in2"><b>Company:</b></label><br>
           <input type="text" class="form-control mb-4" name="company" placeholder="eg. Samsung, Apple" required><br>
           <label for="model" class="in2"><b>Model:</b></label><br>
           <input type="text" class="form-control mb-4" name="model" placeholder="eg. MacBook Air" required><br>
          <label for="color" class="in2"><b>Color:</b></label><br>
           <input type="text" class="form-control mb-4" name="color" placeholder="eg. Black" required><br>
          <label for="price" class="in2"><b>Price:</b></label><br>
          <input type="number" class="form-control mb-4" name="price" placeholder="eg. $2000" required>
          <label for="adTitle" class="in2"><b>Ad Title:</b></label><br>
          <input type="text" class="form-control mb-4" name="adTitle" placeholder="eg. Mention the key features of your item" required>
          <label for="description" class="in2"><b>Description</b></label><br>
             <textarea class="form-control mb-4" name="description" rows="4" placeholder="eg. Include condition, features and reason for selling" required></textarea><br>
          <label for="contact" class="in2"><b>Contact:</b></label><br>
           <input type="email" class="form-control mb-4" name="email" placeholder="eg. a@a.com" required>
          <div class="form-group"><button type="submit" name="submit" class="btn btn-success sign">Submit</button></div>
        </div></form></div></div>
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