<?php include "carsServer.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cars Ad</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style> 
        body {
            background-image: url("https://i.pinimg.com/originals/0c/c8/40/0cc840daa9a9b3684eefbea9ba39010b.jpg");
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
            margin-top: 14%;
            font-size: 100px;
            margin-left: 24%;
        }
        .b {
            margin-left: 38%;
            margin-top: 25%;
            font-size: 100px;
            opacity: 0.8;
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
            margin-left: 52%;
            font-family: arvo;
            opacity: 0.9;
            margin-top: 10px;
            -webkit-transition: all 0.5s ease-in-out;
        }
        .form-control:focus{
            -webkit-transform: scale(1.1);
        }
        .in {
            margin-left: 61%;
            width: 80%;
            text-align: center;
            padding-top: 14px;
            font-size: 20px;
            font-family: arvo;
        }
        .cars {
            margin-left: 24%;
            margin-bottom: 2%;
        }
        .d{
            width: 40%;
            padding-top: 10px;
            margin-left: 10%;
        }
        .form-group {
            padding-top: 70px;
            
        }
        .sign {
            width: 35%;
            margin-left: 85%;
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
        textarea{
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
          <h1 class="text-center a">CARS FOR SALE</h1>
          <div class="col-xs-6 b"> <a href="#ad"><span class="glyphicon glyphicon-chevron-down arrowwhite" aria-hidden="true" id="arrow" style="color:white"></span></a></div>
          <div class="text-center cars"><form action="" method = "post"><div class="input-group d" id="ad">
              <label for="company" class="in"><b>Company:</b></label><br>
               <input type="text" name="company" class="form-control mb-4" placeholder="eg. Audi" required><br>
               <label for="model" class="in"><b>Model:</b></label><br>
               <input type="text" name="model" class="form-control mb-4" placeholder="eg. Q7" required><br>
               <label for="age" class="in"><b>Car Age:</b></label><br>
               <input type="number" name="age" class="form-control mb-4" placeholder="eg. 0 to 8 years & above" required>
               <label for="fuel" class="in"><b>Fuel Type:</b></label><br>
               <input type="text" name="fuel" class="form-control mb-4" placeholder="eg. Diesel, Petrol, Electric, etc" required>
              <label for="color" class="in"><b>Color:</b></label><br>
               <input type="text" name="color" class="form-control mb-4" placeholder="eg. Black" required><br>
              <label for="seating" class="in"><b>Seating Capacity:</b></label><br>
              <input type="number" name="seating" class="form-control mb-4" placeholder="eg. 7" required><br>
              <label for="price" class="in"><b>Price:</b></label><br>
              <input type="number" name="price" class="form-control mb-4" placeholder="eg. $20,000" required><br>
              <label for="adTitle" class="in"><b>Ad Title:</b></label><br>
          <input type="text" class="form-control mb-4" name="adTitle" maxlength="20" placeholder="eg. Mention the key features of your item" required><label for="description" class="in"><b>Description</b></label><br>
             <textarea class="form-control mb-4" name="description" rows="4" placeholder="eg. Include condition, features and reason for selling" maxlength="50" required></textarea><br>
              <label for="email" class="in"><b>Contact:</b></label><br>
              <input type="email" name="email" class="form-control mb-4" placeholder="eg. a@a.com" required>
            <div class="form-group"><button type="submit" name="submit" class="btn btn-info sign">Submit</button>
           </div></div></form></div></div>
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