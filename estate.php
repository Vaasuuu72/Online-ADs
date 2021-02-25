<?php include "estateServer.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Property Ad</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        body {
            background-image: url("https://png.pngtree.com/thumb_back/fw800/back_our/20190622/ourmid/pngtree-real-estate-development-background-map-image_210560.jpg");
            background-size: cover;
            height: 100%;
            background-size: 100%;
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
            font-size: 70px;
            margin-left: 21.5%;
        }
        .b {
            margin-left: 36.5%;
            margin-top: 28.5%;
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
            margin-left: 100%;
            font-family: arvo;
            opacity: 0.8;
            -webkit-transition: all 0.5s ease-in-out;
            
        }
        .form-control:focus{
            -webkit-transform: scale(1.1);
        }
        .in {
            margin-left: 3%;
            width: 80%;
            text-align: center;
            padding-top: 13px;
            font-size: 20px;
            font-family: arvo;
        }
        .in2{
            margin-left: 111%;
            width: 80%;
            text-align: center;
            padding-top: 13px;
            font-size: 20px;
            font-family: arvo;
        }
        .estate {
            margin-left: 20%;
        }
        .ad{
            width: 34%;
        }
        .form-group {
            padding-top: 25px;
        }
        .sign {
            width: 35%;
            margin-left: 133%;
            font-size: 19px;
            box-shadow: 0 0 1px #ccc;
            -webkit-transition: all 0.5s ease-in-out;
            margin-top: 5%;
            
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
            margin-left: 2%;
            -webkit-transition: all 0.5s ease-in-out;
            opacity: 0.8;
            
        }
        .type1:focus{
            -webkit-transform: scale(1.1);
        }
        .purpose{
            margin-top: 0%;
        }
        textarea {
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
          <h1 class="text-center a">PROPERTY FOR SALE / RENT</h1>
          <div class="col-xs-6 b"> <a href="#estate"><span class="glyphicon glyphicon-chevron-down arrowwhite" aria-hidden="true" id="arrow"></span></a></div>
          <div class="text-center estate" id="estate"><form action="" method ="post">         
                <div class = "purpose"><label for="purpose" class="in">I want to:</label><br>
                    <select name="purpose" class="type1 text-center" id="purposeList" required>
                       <option selected disabled value="">Choose Purpose:</option>
                       <option name="Sell" value="Sell">Sell</option>
                       <option name="Rent" value="Rent">Rent</option>
                    </select><br></div>
              <div class="type"><label for="type" class="in"><b>Type:</b></label><br>
                <select name="type" class="type1 text-center" id="typeList" required>
                       <option selected disabled value="">Choose Type:</option>
                        <option value="Apartment" name="Apartment">Apartment</option>
                        <option value="IndependentFloor" name="IndependentFloor">IndependentFloor</option>
                        <option value="IndependentHouse" name="IndependentHouse">IndependentHouse</option>
                        <option value="Villa" name="Villa">Villa</option>
                    </select></div>
                 <div class="bhk"><label for="bhk" class="in"><b>BHK:</b></label><br>
                <select name="bhk" class="type1 text-center" required>
                       <option selected disabled value="">Choose BHK:</option>
                        <option name = "1bhk" value="1bhk">1 BHK</option>
                        <option name = "2bhk" value="2bhk">2 BHK</option>
                        <option name = "3bhk" value="3bhk">3 BHK</option>
                        <option name = "4bhk" value="4bhk">4 BHK</option>
                    </select></div>
          <div class="input-group ad">
           <div id="area"><label for="area" class="in2">Built Up Area:</label><input type="text" class="form-control" name="area" placeholder="eg 5000 Sq. ft."></div>
            <div id="rent"><label for="price" class="in2"><b>Price:</b></label><br>
                <input type="text" class="form-control" name="price" placeholder="eg. $200/month" required></div>
            <div id="sell"><label for="price" class="in2"><b>Price:</b></label><br>
           <input type="text" class="form-control" name="price" placeholder="eg. $200000" required></div>
            <label for="city" class="in2">City:</label><br>
           <input type="text" name="city" placeholder="eg. Delhi" class="form-control" required><br><br>
           <input type="text" class="form-control" name="build" placeholder="Building / Society / Locality" required>
           <label for="adTitle" class="in2"><b>Ad Title:</b></label><br>
          <input type="text" class="form-control mb-4" name="adTitle" placeholder="eg. Mention the key features of your item" required><label for="description" class="in2"><b>Description</b></label><br>
            <textarea class="form-control mb-4" name="description" rows="4" placeholder="eg. Include condition, features and reason for selling" required></textarea><br><label for="email" class="in2">Contact:</label><br>
           <input type="email" name="email" placeholder="eg. a@a.com" class="form-control" required>
          <div class="form-group"><button type="submit" name="submit" class="btn btn-info sign">Submit</button></div></div></form></div></div>
    <script>
        $(document).ready(function(){
            $("#rent").hide();
            $("#area").hide();
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
            $("#purposeList,#typeList").on('change', function(event) {
                var value = event.target.value;
                if(value=="Sell"){
                    $("#sell").show();
                    $("#rent").hide();
                }else if(value=="Rent"){
                    $("#rent").show();
                    $("#sell").hide();    
                }
                if(value=="Villa"){
                    $("#area").show();
                }
                else if(value=="IndependentHouse"){
                    $("#area").show();    
                }else if(value=="IndependentFloor"){
                    $("#area").hide();
                }else if(value=="Apartment"){
                    $("#area").hide();
                }
            })
        });
    </script>
</body>
</html>