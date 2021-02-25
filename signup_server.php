<?php include "db.php";
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
	  $first_name =$_POST['first_name'];
	  $last_name =$_POST['last_name'];
	  $phone = $_POST['phone'];
	  $email = $_POST['email'];
	  $password_1 = $_POST['password_1'];
	  $password_2 = $_POST['password_2'];

	  if ($password_1 != $password_2) {
		  echo '<script>alert("The two passwords do not match")</script>';
		  header('location:signup.php');
	  }
      if(count($phone)!=10){
        echo '<script>alert("Mobile Number is invalid")</script>';
        echo count($phone);
        header('location:signup.php');
      }
	$query="select * from users where email='$email' OR phone='$phone'";
	$result=mysqli_query($connection,$query) or exit('Error in query');
	$c=mysqli_num_rows($result);
	if($c==0){	
//        $hash = "$2y$10$";
//        $salt = "iusesomecrazystrings22";
//        $hashSalt = $hash.$salt;
//		$password=crypt($password_1,$hashSalt);
		$query = "INSERT INTO users (firstName,lastName,phone,email, password) VALUES('$first_name','$last_name','$phone','$email','$password')";
		$res = mysqli_query($connection, $query) or exit('Error in Query');
		echo '<script>alert("You have registered successully")</script>';
//        $_SESSION['userId']=$userId;
        $_SESSION['success']='You have signed in';
	}
    else{
		echo '<script>alert("Phone Number or Email already exists!! SignUp Failed!!")</script>';
	}
	$_SESSION['username'] = $username;
	$_SESSION['success'] = "You are now logged in";
}
?>
