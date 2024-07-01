<?php

require_once 'config.php';

?>


<!DOCTYPE html>
<html>
<head>
  <title>users</title>
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
<div class="container">

<main>
	
	<div class="wrapper-main">
		<section class="section-default">
<?php

$selector = $_GET["selector"];
$validator = $_GET["validator"];

if (empty($selector)|| empty($validator)) {
 echo "Could not validate your request";
}

else{
  if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !==false) {
    ?>


<form action="reset-pass.php.php" method="post" class="form-horizontal" role="form">
  <input type="hidden" name="id" value="<?php echo $selector; ?>">
  <input type="hidden" name="id" value="<?php echo $validator; ?>">
 <div class="form-group">
    <div class="col-lg-4">
      <input type="password" class="form-control" id="password" placeholder="Enter Your new password..." name="password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-lg-4">
      <input type="repeat-password" class="form-control" id="password" placeholder="Repeat new password..." name="password">
    </div>
  </div>


      <div class="form-group">
    <div class="col-sm-16">
      <button name="reset-pass" type="submit" class="btn btn-default">Reset password</button>
    </div>
  </div>
</form>


    <?php
 
  }
}

?>
</section>
</div>
</main>
</div>
</body>
</html>