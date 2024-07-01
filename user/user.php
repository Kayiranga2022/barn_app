<?php

session_start();
if(!isset($_SESSION['username'])|| $_SESSION['role']!="user"){
	header("location:login.php");
}

?>
<h1>Hello:<?= $_SESSION['username'] ?></h1>
<h2>you are:<?= $_SESSION['role'] ?></h1>

	<a href="logout.php">LOGOUT</a>