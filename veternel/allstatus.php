<?php

require_once 'config.php';

?>

<?php

require_once 'vetnav.php';

?>




<html lang="en">
<head>
  <title>HEALTH STATUS DASHBOARD</title>
 <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
 <style>
   
   #nesta{
    margin-left: 820px;
   }
 </style>
</head>
<body>

<div class="container">
   <form id="nesta" class="form-inline" id="search" method="post" action="searchstatus">
          <input type="text" name="search" class="form-control" placeholder="search " aria-label="Search">
          <button type="submit" class="btn btn-default">Search</button>
        </form>

  <h1> HEALTH STATUS</h1>
         
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>VISIT DATE</th>
         <th>RECORDED DATE</th>
        <th>COMMENT</th>
         
          <th>UPDATE</th>
         <th>DELETE</th>
      </tr>
    </thead>

    <?php
  $id='id';


  $query="select * from discharge" ;

$result=mysqli_query($conn,$query);

while ($rows=mysqli_fetch_array($result)) {




   ?>
    <tbody>
      <tr>
        <td><?php echo $rows['id']; ?></td>
       <td><?php echo $rows['visit']; ?></td>
        <td><?php echo $rows['recorded']; ?></td>
        <td><?php echo $rows['comment']; ?></td>
       
         <td><div class="form-group">
    <div class="col-sm-16">
      <button name="update" type="submit" class="btn btn-default"><a href="upstatu?i=<?php echo $rows['id'];?>">update</a></button>
    </div>
  </div></td>
          
          <td><div class="form-group">
    <div class="col-sm-16">
      <button name="delete" type="submit" class="btn btn-default"><a href="delstatus.php?i=<?php echo $rows['id'];?>">delete</a></button>
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