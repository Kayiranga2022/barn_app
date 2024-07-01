<?php

require_once 'config.php';

if(isset($_POST['update'])) {






$id = $_POST['id'];
$color = $_POST['color']; 
$sex = $_POST['sex']; 
$age = $_POST['age'];
$dependent = $_POST['dependent'];




mysqli_query($conn,"update goats set id='$id', color='$color', sex='$sex', age='$age',dependent='$dependent' where id='$id'");


header('location:allgoats.php');


}


?>