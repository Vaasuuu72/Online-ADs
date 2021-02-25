 <?php  include "db.php";
if($_SERVER['REQUEST_METHOD']=='POST') {
    $type = $_POST['type'];
    $company = $_POST['company'];
    $model = $_POST['model'];
    $colour = $_POST['color'];
    $price = $_POST['price'];
    $email = $_POST['email'];
    $title = $_POST['adTitle'];
    $desc = $_POST['description'];
    $query = "INSERT INTO electronics (type,company,model,color,price,email,adTitle,description) VALUES('$type','$company','$model','$colour','$price','$email','$title','$desc')";
    $result = mysqli_query($connection, $query) or exit('Error in query');
    header("Location:posted.php");
}
?>