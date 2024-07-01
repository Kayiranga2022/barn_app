<?php

require_once 'config.php';

?>

<?php

require_once 'adnav.php';

?>




<html lang="en">
<head>
  <title>ALL WISHES</title>
 <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
 <style>
   
   #nesta{
    margin-left: 820px;
   }
 </style>
</head>
<body>

<div class="container">
   <form id="nesta" class="form-inline" id="search" method="post" action="searchwish.php">
          <input type="text" name="search" class="form-control" placeholder="search wish" aria-label="Search">
          <button type="submit" class="btn btn-default">Search</button>
        </form>

  <h1>ALL WISHES</h1>
         
  <table class="table table-striped">
    <thead>
      <tr>
        <th>WISHES</th>
        
        
         
          
         <th>DELETE</th>
      </tr>
    </thead>

    <?php
  $id='id';


  $query="select * from wish" ;

$result=mysqli_query($conn,$query);

while ($rows=mysqli_fetch_array($result)) {




   ?>
    <tbody>
      <tr>
        <td><?php echo $rows['wish']; ?></td>
       
          
          <td><div class="form-group">
    <div class="col-sm-16">
      <button name="delete" type="submit" class="btn btn-default"><a href="deluser.php?i=<?php echo $rows['id'];?>">delete</a></button>
    </div>
  </div></td>
        
        
        <?php
}
?>
      </tr>
     
    </tbody>
  </table>
</div>

<script src="bootstrap.min.js"></script>

</body>

</html>

<?php

require_once 'footer.php';

?>