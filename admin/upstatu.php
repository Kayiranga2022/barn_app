<?php

require_once 'adnav.php';

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






<form action="upstat.php" method="post" class="form-horizontal" role="form">

    <input type="hidden" name="id" value="<?php echo $i; ?>">

   <div class="form-group">
   
    <div class="col-lg-4">
      <input type="text" class="form-control" id="id" placeholder="Enter ID" name="id" required \>
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-4">
      <input type="text" class="form-control" id="visit" placeholder="Enter date_of_visit" name="visit" required \>
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
      <button name="update" type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>

</form>
</div>

<script src="bootstrap.min.js"></script>
</body>
</html>


<?php

require_once 'footer.php';

?>
