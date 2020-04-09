<?php


$connection=mysqli_connect('localhost','root','','login_app');//connecting to the database
if(!$connection){
   echo "Connection failed";
   die('connection failed'); //it kills the process  similar to exit
}

?>