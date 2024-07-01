<?php

require_once 'adnav.php';

?>

<html lang="en">
<head>
  <title>SEARCH GOAT</title>
 <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>


<div class="container">
<h1>RESULTS CURRENT HEALTH DISCHARGES</h1>
         
          
  <table class="table table-striped">
    <thead>
      <tr>
        <th>USERNAME</th>
        <th>PASSWORD</th>
         <th>EMAIL</th>
        
         
          <th>UPDATE</th>
         <th>DELETE</th>
      </tr>
    </thead>



<?php

require_once 'config.php';

$output='';

  $id='id';

if (isset($_POST['search'])) {
	
	$searchq = $_POST['search'];

	$searchq =preg_replace("#[^0-9a-z]#i","", $searchq);

	$query=mysqli_query($conn,"SELECT * FROM users WHERE id LIKE '%$searchq%' OR username LIKE '%$searchq%'");

	$count=mysqli_num_rows($query);

	if ($count==0) {
		
    ?>
		
    <script>

alert('no user found');
    </script>

  <?php
	}

	else{

		while ($row= mysqli_fetch_array($query)) {

			?>

		  <tbody>
      <tr>
         <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['username']; ?></td>
       <td><?php echo $row['password']; ?></td>
        <td><?php echo $row['email']; ?></td>
       
       
        <td><div class="form-group">
    <div class="col-sm-16">
      <button name="update" type="submit" class="btn btn-success"><a href="upuser?i=<?php echo $row['id'];?>">update</a></button>
    </div>
  </div></td>
          
          <td><div class="form-group">
    <div class="col-sm-16">
      <button name="delete" type="submit" class="btn btn-danger"><a href="deluser.php?i=<?php echo $row['id'];?>">delete</a></button>
    </div>
  </div></td>
</tr>
			

			<?php

		/*	$output .= '<div>'.$fname.' '.$lname' '.$country.'<>'; */

			print("$output");
		}

	}

}

?>


</tbody>
</table>
</div>
</body>
</html>