<?php

require_once 'config.php';

if(isset($_POST['update'])) {






$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password']; 
$email = $_POST['email']; 




mysqli_query($conn,"update users set username='$username', password='$password', email='$email' where id='$id'");


header('location:allusers.php');


}


?>