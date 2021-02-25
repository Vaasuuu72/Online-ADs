<?php include "db.php";

if(isset($_POST['cars'])){
    header("Location: carsView.php");
}
if(isset($_POST['home'])){
    header("Location: estate_view.php");
}
if(isset($_POST['electronics'])){
    header("Location: electronicsView.php");
}

?>
