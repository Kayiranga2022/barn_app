<?php

require_once 'config.php';

?>



<?php



if (isset($_POST['submit'])) {

   $goat_id=$_POST['id'];
   $fileName=$_FILES['image']['name'];
   
   $insert="insert into images (goat_id,goat_pic) values('$goat_id','$fileName')";
   if (mysqli_query($conn,$insert)) {
     move_uploaded_file($_FILES['image']['tmp_name'], "uploads/$fileName");
     echo "<script>alert('image uploaded') </script>";
   }
   else{
     echo "<script>alert('image not uploaded' )</script>";
   }
   header("location:image.php");
}

?>