<?php

include "db.php";//including the connection params in every functions file
function updateRows(){
 if(isset($_POST['submit'])){
     global $connection; //make the connection a globab variable to bring it from other files
    $username=$_POST['username'];
    $password=$_POST['password'];
    $selectedId=$_POST['id'];
    $action=$_POST['action'];
$queryDelete="DELETE FROM users WHERE `id`=$selectedId ";
$queryGetId="SELECT * FROM users ";//retrieving ids from database
$resultID=mysqli_query($connection,$queryGetId);
$query="UPDATE users SET `username`='$username',`password`='$password' "; //deviding the query my be handy
$query.= "WHERE  `id`=$selectedId ";   //.= is adding to the previous query an other one

switch($action){
    case 'update':
        $result=mysqli_query($connection,$query);
    break;
    case 'delete':
        $result=mysqli_query($connection,$queryDelete);
    break;
    default:
    $result=mysqli_query($connection,$query);
}




$result=mysqli_query($connection,$query);

if(!$result){
   die('Query failed '. mysqli_error($connection));
}
while($row=mysqli_fetch_assoc($resultID)){
   $id=$row['id'];//using the retrieved ids  to dynamically make oprtions from it
echo "<option value='$id' name='$id'>$id</option>";

}
}
}

?>