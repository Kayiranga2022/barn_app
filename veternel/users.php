<?php

require_once 'vetnav.php';

?>




<!DOCTYPE html>
<html>
<head>
  <title>USERS</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div class="container">
<h1> USERS  </h1>


<form action="inuser.php" method="post" class="form-horizontal" role="form">

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