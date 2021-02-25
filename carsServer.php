<?php include "db.php";
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
    $company = $_POST['company'];
    $model = $_POST['model'];
    $car_age = $_POST['age'];
    $fuel = $_POST['fuel'];
    $colour = $_POST['color'];
    $seating = $_POST['seating'];
    $price = $_POST['price'];
    $email = $_POST['email'];
    $title = $_POST['adTitle'];
    $desc = $_POST['description'];
    $query = "INSERT INTO vehicles (company,model,carAge,fuel,color,seating,price,email,adTitle,description) VALUES('$company','$model','$car_age','$fuel','$colour','$seating','$price','$email','$title','$desc')";
    $result = mysqli_query($connection, $query) or exit('Error in query');
    header("Location:posted.php");  
}
?>