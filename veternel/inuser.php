<?php

require_once 'config.php';

if (isset($_POST["save"])) {

$username = $_POST['username'];
$password = $_POST['password']; 
$email = $_POST['email']; 





$query="INSERT INTO users(username,password,email) VALUES ('$username','$password ','$email')" ;

$result=mysqli_query($conn,$query);




if($result){
	

	echo "yes";
}

else{

	echo "not".mysqli_error($conn);

}

}

header("location:allusers.php");
?>