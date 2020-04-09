<?php
if(isset($_POST['submit'])){

    $names=array('Abdellah','Sandra','Ilyas');
   $name= $_POST['name'];
   $password= $_POST['password'];
   if(!$name && !$password){
       echo "enter a valid name or password";
   }
if(strlen($name)<5){
echo "User name is too short";
}
if(!in_array($name,$names)){
echo "youre not allowed";
}elseif (in_array($name,$names)) {
    echo "Welcome";
}


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- 
<form action="lesson_following.php" method="post">


<input type="text" placeholder="Name" name="name"> <br>
<input type="password" placeholder="Password"  name="password"> <br>
<input type="submit" name="submit">
</form> -->
<h1>hi</h1>

     <?php





     ?>
</body>
</html>