<?php

require_once 'config.php';


if (isset($_POST["reset-pass"])) {

$selector = $_POST["selector"];
$validator = $_POST["validator"];
$password = $_POST["password"];
$passwordRepeat = $_POST["repeat-password"];

if (empty($password)|| empty($passwordRepeat)) {

header("location:create-new-pwd.php?newpwd=empty");
exit();
}
else if ($password!=$passwordRepeat) {
	header("location:create-new-pwd.php?newpwdnotsame");
exit();
}

$currentDate = date("U");

$sql ="SELECT * FROM pwdreset WHERE pwdresetSelector=? AND pwdresetExpires >=?";

$stmt= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)) {
	
	echo "there was an error!";
exit();
}
else{
  
  mysqli_stmt_bind_param($stmt,"s",$selector);
  mysqli_stmt_execute($stmt);

  $result = mysqli_stmt_get_result($stmt);
  if (!$row = mysqli_fetch_assoc( $result)) {
  	echo "you need to re-submit the reset request.";
  	exit();
  }
  else{
  	$tokenBin = hex2bin($validator);
  	$tokenCheck = password_verify($tokenBin,$row["pwdresetToken"]);

  	if ($tokenCheck === false) {
  		echo "you need to re-submit the reset request.";
  	exit();
  	}
  	elseif ($tokenCheck === true) {
  		$tokenEmail= $row['pwdresetEmail'];
  		$sql="SELECT * FROM users WHERE email=?;";
  		$stmt= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)) {
	
	echo "there was an error!";
exit();
  	}
  	else{
  		mysqli_stmt_bind_param($stmt,"s",$tokenEmail);
  		mysqli_stmt_execute($stmt);
  		$result = mysqli_stmt_get_result($stmt);
  		if (!$row=mysqli_fetch_assoc($result)) {
  				echo "there was an error.";
  	      exit();
  		}
  		else{
  			$sql = "UPDATE users SET password=? WHERE email=?;";
  			$stmt= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)) {
	
	echo "there was an error!";
exit();
  	}
  	else{
  		$newpwdhash = password_hash($password, PASSWORD_DEFAULT)
  		mysqli_stmt_bind_param($stmt,"ss",$newpwdhash,$tokenEmail);
  		mysqli_stmt_execute($stmt);


$sql="DELETE FROM pwdreset WHERE pwdResetEmail=?;";
$stmt= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)) {
	
	echo "there was an error!";
exit();
}
else{
  
  mysqli_stmt_bind_param($stmt,"s",$tokenEmail);
  mysqli_stmt_execute($stmt);
  	}
  		}
  	}
  }
}

}
}
else{

	header("location:index.php");
}