<?php

require_once 'config.php';

if(isset($_POST['update'])) {




$id = $_POST['id'];
$birth = $_POST['birth']; 
$recorded = $_POST['recorded']; 
$comment = $_POST['comment']; 




mysqli_query($conn,"update health set id='$id', birth='$birth', recorded='$recorded', comment='$comment' where id='$id'");


header('location:healthstatus.php');


}


?>