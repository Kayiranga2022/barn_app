<?php

require_once 'config.php';

if (isset($_POST["save"])) {

$wish = $_POST['wish']; 
 




$query="INSERT INTO wish(wish) VALUES ('$wish')" ;

$result=mysqli_query($conn,$query);




if($result){
	

	echo "yes";
}

else{

	echo "not".mysqli_error($conn);

}

}

header("location:allwishes.php");
?>