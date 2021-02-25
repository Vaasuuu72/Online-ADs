<?php include "db.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $purpose=$_POST['purpose'];
    $type = $_POST['type'];
    $bhk = $_POST['bhk'];
    $price = $_POST['price'];
    $city = $_POST['city'];
    $building = $_POST['build'];
    $email = $_POST['email'];
    $buildArea = $_POST['area'];
    $title = $_POST['adTitle'];
    $desc = $_POST['desc'];
//    echo $type;
    if($purpose=='Rent'){
        $query = "INSERT INTO estateRent (purpose,type,bhk,price,city,building,email,buildArea,adTitle,description) VALUES('$purpose','$type','$bhk','$price','$city','$building','$email','$buildArea','$title','$desc')";
    }
    else if($purpose=='Sell'){
        $query = "INSERT INTO estateSell (purpose,type,bhk,price,city,building,email,buildArea,adTitle,description) VALUES('$purpose','$type','$bhk','$price','$city','$building','$email','$buildArea','$title','$desc')";
    }
    $result = mysqli_query($connection,$query) or exit('Error in query');
    header("Location:posted.php");
}
?>