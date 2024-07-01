<?php
session_start();
require_once 'config.php';

$msg="";
if (isset($_POST['login'])) {

$username = $_POST['username']; 
$password = $_POST['password']; 
$usertype = $_POST['usertype']; 

$sql=  " select * from login where username=? and password=? and usertype=?";
$stmt=$conn->prepare($sql);
$stmt->bind_param("sss",$username,$password,$usertype);
$stmt->execute();
$result= $stmt->get_result();
$row=$result->fetch_assoc();

session_regenerate_id();
$_SESSION['username']= $row['username'];
$_SESSION['role'] = $row['usertype'];

session_write_close();

if ($result->num_rows==1 && $_SESSION['role']=="user") {
	header("location:user/register");
	}
else if($result->num_rows==1 && $_SESSION['role']=="veternel"){
	header("location:veternel/discharge");
}
else if($result->num_rows==1 && $_SESSION['role']=="admin"){
	header("location:admin/allgoats");
}
else{
$msg= "username or password is Incorrect!";
}
}

?>


 

<!DOCTYPE html
<html>
<head>
  <title>LOGIN</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body class="bg-dark">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-5 bg-light mt-5 px-0">
<h3 class="text-center text-light bg-danger p-3">LOG IN ON NESTA SHIT</h3>


<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" class="p-4">

  <div class="form-group">
      <input type="text" class="form-control form-control-lg"  id="username" placeholder="Enter username" name="username" required \>
    </div>


  <div class="form-group">
      <input type="text" class="form-control form-control-lg"  id="password" placeholder="password" name="password" required \>
    </div>

  <div class="form-group lead">
      <label for="usertype"> I'm a :</label>
      <input type="radio" name="usertype" value="user" class="custom-radio" required> &nbsp;User|
        <input type="radio" name="usertype" value="veternel" class="custom-radio" required> &nbsp;Veternel|
          <input type="radio" name="usertype" value="admin" class="custom-radio" required> &nbsp;Admin|
        </div>


   <div class="form-group">
     <input type="submit" name="login" class="btn btn-danger btn-block">
    </div>
    <h5 class="text-danger text-center"><?= $msg; ?></h5>

    <?php
if (isset($_GET["newpwd"])){
  if ($_GET["newpwd"]=="passwordupdated") {
    echo '<p class="signupsuccess">your password has been reset!</p>';
  }
}
    ?>

    <div><a href="resetpassword">FORGOT YOUR PASSWORD?</a></div>
  

</form>
<script src="js/bootstrap.min.js"></script>
</body>
</html>