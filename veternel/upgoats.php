<?php

require_once 'vetnav.php';

?>

<!DOCTYPE html>
<html>
<head>
  <title>goats</title>
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
<div class="container">

<h1>UPDATE GOAT HERE</h1>

  <?php

  $i=$_GET['i'];


  ?>






<form action="upgoat.php" method="post" class="form-horizontal" role="form">

    <input type="hidden" name="id" value="<?php echo $i; ?>">

  <div class="form-group">
   
    <div class="col-lg-4">
      <input type="text" class="form-control" id="id" placeholder="Enter ID" name="id" required \>
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-4">
      <input type="text" class="form-control" id="color" placeholder="Enter color" name="color" required \>
    </div>
  </div>

  <div class="form-group">
   
    <div class="col-lg-4">
      <input type="text" class="form-control" id="sex" placeholder="Enter sex" name="sex" required \>
    </div>
  </div>

  <div class="form-group">
   
    <div class="col-lg-4">
      <input type="text" class="form-control" id="age" placeholder="Enter age" name="age" required \>
    </div>
  </div>

<div class="form-group">
  <div class="col-lg-4">
      <input type="text" class="form-control" id="dependent" placeholder="Enter dependent" name="dependent" required \>
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
