<?php

require_once 'config.php';

if (isset($_POST["save"])) {

$id = $_POST['id'];
$color = $_POST['color']; 
$sex = $_POST['sex']; 
$age = $_POST['age'];
$dependent = $_POST['dependent'];




$query="INSERT INTO goats(id,color,sex,age,dependent) VALUES ('$id','$color','$sex','$age','$dependent')" ;

$result=mysqli_query($conn,$query);




if($result){
	

	echo "yes";
}

else{

	echo "not".mysqli_error($conn);

}

}

header("location:allgoats.php");
?>