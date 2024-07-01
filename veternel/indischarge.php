<?php

require_once 'config.php';

if (isset($_POST["save"])) {

$id = $_POST['id'];
$visit = $_POST['visit']; 
$recorded = $_POST['recorded']; 
$comment = $_POST['comment']; 




$query="INSERT INTO discharge(id,visit,recorded,comment) VALUES ('$id','$visit ','$recorded','$comment')" ;

$result=mysqli_query($conn,$query);




if($result){
	

	echo "yes";
}

else{

	echo "not".mysqli_error($conn);

}

}

header("location:allstatus.php");
?>