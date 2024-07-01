<?php

require_once 'config.php';

if(isset($_POST['update'])) {






$id = $_POST['id'];
$visit = $_POST['visit']; 
$recorded = $_POST['recorded']; 
$comment = $_POST['comment'];





mysqli_query($conn,"update discharge set id='$id', visit='$visit', recorded='$recorded', comment='$comment' where id='$id'");




header('location:allstatus.php');


}


?>