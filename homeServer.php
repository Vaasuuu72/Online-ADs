<?php include "db.php";
session_start();
if(isset($_POST['Post_an_ad'])){
    header("Location: post_ad.php");
}
if(isset($_POST['View_ads'])){
    header("Location: view_ads.php");
}
if (!isset($_SESSION['email'])) { 
    echo '<script>alert("You have Posted successfully")</script>';
    header('location: login.php');
}
?>