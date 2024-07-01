<?php

require_once 'config.php';



 $id=$_GET['i'];

 	$query="DELETE FROM discharge WHERE id='$id'";


$result=mysqli_query($conn,$query);


if($result)
{
	

	echo "yes";



}

else{

	echo "not".mysqli_error($conn);


}

header("location:allstatus.php");

?>



