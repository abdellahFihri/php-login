<?php  include "db.php";
  if(isset($_POST['submit'])){
     
     $username=$_POST['username'];
     $password=$_POST['password'];
$query="INSERT INTO users (`username`,`password`)"; //deviding the query my be handy
$query.= " VALUES ('$username','$password')";   //.= is adding to the previous query an other one
$result=mysqli_query($connection,$query);
if(!$result){
    die('Query failed' . mysqli_error());
}
  }

?>