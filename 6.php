
<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
<form action="6.php" method="post">


<input type="text" placeholder="Name" name="name"> <br>
<input type="password" placeholder="Password"  name="password"> <br>
<input type="submit" name="submit">
</form>

	<?php  

/*  Step1: Make a form that submits one value to POST super global


 */
if(isset($_POST["submit"])){
	$user=$_POST["name"];
	$password=$_POST["password"];
	$users=["abdellah","sandra"];
	if(!in_array($user,$users)){
		echo "not allowed";
	}
	elseif(in_array($user,$users)){
		echo "Welcome";
	}
};
	
?>


</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<form action="6.php" method="post">


<input type="text" placeholder="Name" name="name"> <br>
<input type="password" placeholder="Password"  name="password"> <br>
<input type="submit" name="submit">
</form>
</body>
</html>