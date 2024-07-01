<?php

require_once 'adnav.php';

?>

<!DOCTYPE html>
<html>
<head>
  <title>users</title>
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
<div class="container">

<h1>UPDATE USER HERE</h1>

  <?php

  $i=$_GET['i'];


  ?>






<form action="upuser.php" method="post" class="form-horizontal" role="form">

    <input type="hidden" name="id" value="<?php echo $i; ?>">

   <div class="form-group">
    <div class="col-lg-4">
      <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required \>
    </div>
  </div>

  <div class="form-group">
   
    <div class="col-lg-4">
      <input type="text" class="form-control" id="password" placeholder="Enter password" name="password" required \>
    </div>
  </div>

  <div class="form-group">
   
    <div class="col-lg-4">
      <input type="text" class="form-control" id="email" placeholder="Enter e-mail" name="email" required \>
    </div>
  </div>

      <div class="form-group">
    <div class="col-sm-16">
      <button name="update" type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>

    </div>
  </div>

</form>

<script src="bootstrap.min.js"></script>
</body>
</html>

<?php

require_once 'footer.php';

?>
