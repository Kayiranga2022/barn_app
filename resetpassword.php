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
			<h1>Reset Your Password</h1>
			<p>An e-mail will be sent to you with instructions on how to reset your password</p>


<form action="reset.php" method="post" class="form-horizontal" role="form">
 <div class="form-group">
    <div class="col-lg-4">
      <input type="text" class="form-control" id="email" placeholder="Enter Your e-mail Address..." name="email" required \>
    </div>
  </div>


      <div class="form-group">
    <div class="col-sm-16">
      <button name="reset" type="submit" class="btn btn-default">Receve New Password By e-mail</button>
    </div>
  </div>
</form>
<?php
if (isset($_GET["reset"])) {
	if ($_GET["reset"]=="success") {
		echo '<p class="signupsuccess">Check your e-mail!</p>';
	}
}

?>
</section>
</div>
</main>
</div>
</body>
</html>