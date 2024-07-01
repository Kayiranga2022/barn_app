<?php

require_once 'vetnav.php';

?>




<!DOCTYPE html>
<html>
<head>
  <title>HEALTH STATUS</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div class="container">
<h1>RECORD HEALTH STATUS</h1>


<form action="inhealth.php" method="post" class="form-horizontal" role="form">


  <div class="form-group">
   
    <div class="col-lg-4">
      <input type="text" class="form-control" id="id" placeholder="Enter ID" name="id" required \>
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-4">
      <input type="text" class="form-control" id="birth" placeholder="Enter date_of_birth" name="birth" required \>
    </div>
  </div>

  <div class="form-group">
   
    <div class="col-lg-4">
      <input type="text" class="form-control" id="recorded" placeholder="Enter date_recorded" name="recorded" required \>
    </div>
  </div>

  <div class="form-group">
   
    <div class="col-lg-4">
      <input type="text" class="form-control" id="comment" placeholder="Enter comment" name="comment" required \>
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