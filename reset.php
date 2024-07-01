<?php

require_once 'config.php';

if (isset($_POST["reset"])) {

	$selector = bin2hex(random_bytes(8));
	$token = random_bytes(32);

	$url="www.nesta.net/forgottenpwd/create-new-pwd.php?selector=" . $selector. "&validator=" . bin2hex($token);
	$expires = date("U") + 1800;

require_once 'config.php';

$userEmail = $_POST['email'];

$sql="DELETE FROM pwdreset WHERE pwdResetEmail=?;";
$stmt= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)) {
	
	echo "there was an error!";
exit();
}
else{
  
  mysqli_stmt_bind_param($stmt,"s",$userEmail);
  mysqli_stmt_execute($stmt);
}

$sql = "INSERT INTO pwdreset (pwdResetEmail,pwdResetSelector,pwdResetToken,pwdResetExpires) VALUES (?,?,?,?);";
$sql = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)) {
	
	echo "there was an error!";

exit();
}

else{
	$hashedToken=password_hash($token, PASSWORD_DEFAULT);
	mysqli_stmt_bind_param($stmt,"ssss",$userEmail,$selector,$hashedToken,$expires);
    mysqli_stmt_execute($stmt);
}
mysqli_stmt_close($stmt);
mysqli_close($conn);

$to=$userEmail;
$subject = '<p>Reset your password for nesta';
$message= 'we received a password reset request. the link to reset your password make this request, you can ignore this email</p>';
$message .='<p> here is your password reset link: </br>';
$message .='<a href="'.$url. '">'.$url. '</a></p>';

$headers ="From: nesta <kayinesta23@gmail.com>\r\n";
$headers .="Reply-To: nesta <kayinesta23@gmail.com>\r\n";
$headers .="Content-type: text/html\r\n";

mail($to, $subject, $message,$headers);
header("location:resetpassword.php?reset=success");




}
else{
       header("location:index.php");
	}

	?>