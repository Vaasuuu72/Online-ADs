<?php include "db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet" type="text/css">
    <!-- <link rel="stylesheet" href="css/header.css"> -->
    <title>PROFILE</title>
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
        .topnav a.active {
          background-color: #4CAF50;
          color: white;
        }
        .topnav a.out {
            float :right;
        }

        body{
            background-color: #F2F6EA;
            
        }
        fieldset{
            border: 2px solid #333;
            width: 20%;
            margin-left: 40%;
        }
        form{
            text-align: center;
        }
        .header{
            /* margin-top: 100px; */
            font-size: 100px;
            font-family: Arvo;
            margin-left: 170px;
            color: red;
        }
        .search:focus{
            transform: scale(1.1);
        }
        .nav{
            float: left;
            margin-left: 100px;
        }
        .details{
            float:right;
            margin-left: 100px;
        }
        .nav {
            background-color: #333;
            overflow: hidden;
        }
        .nav a {
            float: left;
            color: white;
            text-align: center;
            padding: 24px 16px;
            text-decoration: none;
            font-size: 30px;
            font-family: "Julius Sans One";
        }
        .nav a:hover {
            background-color: #ddd;
            color: black;
        }
        .topnav a.logout{
            float: right;
        }
        td{
            padding: 10px;
        }
        .input{
            color: red;

        }
        .nav a.active{
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>
    <nav class="topnav">
        <a href="homeLogout.php">Home</a>
        <a href="profile.php">Profile</a>
        <a class="logout" href="home.php">LOGOUT</a>
  </nav>
    <?php include "loginServer.php";
    $email = $_SESSION['email'];

    $q = "SELECT `firstName`,`lastName`, `phone`,`email` FROM `users` WHERE  email = '$email'";
    $result = mysqli_query($connection, $q) or exit("Error in query");
    $details = mysqli_fetch_assoc($result);
    ?>
    <div class="header"><i class="glyphicon glyphicon-user user"></i><p><b>MY ADS</b></p></div><br>
    <div class = "row">
    <nav class="nav flex-column">
        <a class="nav-link" href="profile.php">DASHBOARD</a>
        <a class="nav-link active" href="#">MY ADS</a>
        
    </nav>
    <div class="details">
        
    </div>
    </div>
</body>
</html>