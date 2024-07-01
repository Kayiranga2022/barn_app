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

<h1>WRITE YOUR WISH HERE</h1>


<form action="inwish.php" method="post" class="form-horizontal" role="form">

    <input type="hidden" name="id" value="<?php echo $i; ?>">

   <div class="form-group">
    <div class="col-lg-4">
      <input type="text" class="form-control" id="wish" placeholder="Enter your wish" name="wish" required \>
    </div>
  </div>

     <div class="form-group">
    <div class="col-sm-16">
      <button name="save" type="submit" class="btn btn-default">Submit</button>
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
