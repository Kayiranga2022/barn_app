<?php

require_once 'config.php';



 $id=$_GET['i'];

 	$query="DELETE FROM health WHERE id='$id'";


$result=mysqli_query($conn,$query);


if($result)
{
	

	echo "yes";



}

else{

	echo "not".mysqli_error($conn);


}

header("location:healthstatus.php");

?>



