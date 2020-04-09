<?php
 include "db.php"; //imports the connection params from the db.php 
 include "functions.php";
 ?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
   <div class="container">
   <div class="col-sm-6">
   <form action="login_update.php" method="post">
   <div class="form-group">
   <label for="username">User name</label>
   <input type="text" name="username" id="" class="form-control">
   </div>
   <div class="form-group">
   <label for="password">Password</label>
   <input type="password" name="password" id="" class="form-control">
   </div>
   <div class="form-group">
       <label for="id">Select a row Id:</label>
       <select name="id" id="">
  <?php
  updateRows();
  ?>
      </select>
      </div>
   <div class="form-group">
   <label for="select">Choose action:</label>
   <select name="action" id="">
   <option value="update" name="update">Update</option>
   <option value="delete" name="delete">Delete</option>
   </select>
   </div>
  
<input type="submit" name="submit" value="Submit" class="btn btn-primary">
   </form>
   </div>
   </div>




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>