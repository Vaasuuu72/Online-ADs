
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
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
        .contact {
            text-align: right;
        }
    </style>
</head>
<body>
  <?php include "db.php";
include "carsServer.php";
    $q="SELECT u.first_name, u.last_name, u.email, u.phone from users u join vehicles e on(e.email=u.email)";
    $res = mysqli_query($connection,$q) or exit("Error in query");
    $row=mysqli_fetch_assoc($res);
?>
   <div class="topnav">
          <a class="active" href="homeLogout.php">Home</a>
          <a href="profile.php">Profile</a>
          <a class= "out" href="login.php">Logout</a></div>
    <div class="col-md-4 text-center">
        <h3 class="in2">Name:</h3><?php echo $row['firstName']," ",$row['lastName'];?>
        <h3 class="in2">Email:</h3><?php echo $row['email'];?>
        <h3>Phone:</h3><?php echo $row['phone'];?></div>
</body>
</html>
<?php ?>