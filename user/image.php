
<?php

require_once 'usernav.php';

?>



<!DOCTYPE html>
<html>
<head>
  <title>UPLOAD</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div class="container">
<h1>UPLOAD PICTURE</h1>


<form action="upload.php" method="POST" enctype="multipart/form-data">

  <div class="form-group">
    <div class="col-lg-4">
      <input type="text" class="form-control" id="id" placeholder="Enter id" name="id" required \>
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-4">
    <input type="file"name="image"  class="form-control">
</div>
</div>
   
    <div class="form-group">
    <div class="col-sm-16">
      <button name="submit" type="submit">UPLOAD</button>
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