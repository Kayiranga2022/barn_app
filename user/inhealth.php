<?php

require_once 'config.php';

if (isset($_POST["save"])) {

$id = $_POST['id'];
$birth = $_POST['birth']; 
$recorded = $_POST['recorded']; 
$comment = $_POST['comment']; 




$query="INSERT INTO health(id,birth,recorded,comment) VALUES ('$id','$birth ','$recorded','$comment')" ;

$result=mysqli_query($conn,$query);




if($result){
	

	echo "yes";
}

else{

	echo "not".mysqli_error($conn);

}

}

header("location:healthstatus.php");
?>