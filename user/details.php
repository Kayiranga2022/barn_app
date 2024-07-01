<?php

require_once 'config.php';

?>

<?php

require_once 'usernav.php';

?>




<html lang="en">
<head>
  <title>DETAILS</title>
 <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
 <style>
   
   #nesta{
    margin-left: 820px;
   }
 </style>
</head>
<body>

<div class="container">
   <form id="nesta" class="form-inline" id="search" method="post" action="searchgoat.php">
          <input type="text" name="search" class="form-control" placeholder="search goat" aria-label="Search">
          <button type="submit" class="btn btn-default">Search</button>
        </form>



  <h1>OWN INFORMATION</h1>
         
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>COLOR</th>
         <th>SEX</th>
        <th>AGE</th>
        <th>DEPENDENT</th>
         
      </tr>
    </thead>

    <?php
   $id=$_GET['i'];


  $query="select * from goats where $id=id" ;

$result=mysqli_query($conn,$query);

while ($rows=mysqli_fetch_array($result)) {




   ?>
    <tbody>
      <tr>
        <td><?php echo $rows['id']; ?></td>
       <td><?php echo $rows['color']; ?></td>
        <td><?php echo $rows['sex']; ?></td>
        <td><?php echo $rows['age']; ?></td>
        <td><?php echo $rows['dependent']; ?></td>


        <?php
}
?>
      </tr>
     
    </tbody>
  </table>

       

  <h1>DEPENDENCIES</h1>
         
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>COLOR</th>
         <th>SEX</th>
        <th>AGE</th>
        <th>DEPENDENT</th>
         
          <th>UPDATE</th>
          <th>DETAILS</th>
         <th>DELETE</th>
         
      </tr>
    </thead>

    <?php
   $id=$_GET['i'];


  $query="select * from goats where $id=dependent" ;

$result=mysqli_query($conn,$query);

while ($rows=mysqli_fetch_array($result)) {




   ?>
    <tbody>
      <tr>
        <td><?php echo $rows['id']; ?></td>
       <td><?php echo $rows['color']; ?></td>
        <td><?php echo $rows['sex']; ?></td>
        <td><?php echo $rows['age']; ?></td>
        <td><?php echo $rows['dependent']; ?></td>
       
         <td><div class="form-group">
    <div class="col-sm-16">
      <button name="update" type="submit" class="btn btn-default"><a href="upgoats.php?i=<?php echo $rows['id'];?>">update</a></button>
    </div>
  </div></td>


   <td><div class="form-group">
    <div class="col-sm-16">
      <button name="details" type="submit" class="btn btn-default"><a href="details.php?i=<?php echo $rows['id'];?>">details</a></button>
    </div>
  </div></td>
          
          <td><div class="form-group">
    <div class="col-sm-16">
      <button name="delete" type="submit" class="btn btn-danger"><a href="delgoat.php?i=<?php echo $rows['id'];?>">delete</a></button>
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