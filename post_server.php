<?php include "db.php";

if(isset($_POST['cars'])){
    header("Location: cars.php");
}
if(isset($_POST['home'])){
    header("Location: estate.php");
}
if(isset($_POST['electronics'])){
    header("Location: electronics.php");
}

?>
