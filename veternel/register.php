<?php

require_once 'vetnav.php';

?>




<!DOCTYPE html>
<html>
<head>
  <title>REGISTRATION</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div class="container">
<h1>REGISTER NEW GOAT</h1>


<form action="ingoats.php" method="POST" class="form-horizontal" role="form">


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
      <button name="save" type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>

</form>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
</div>


<?php

require_once 'footer.php';

?>

