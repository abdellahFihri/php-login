<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */
echo ceil(4.3)."<br>";
echo round(3.2)."<br>";
print floor(2.8)."<br>";
echo random_int(1,50)."<br>";
echo rand(20,200)."<br>";
echo "exercise 2 "."<br>";
$name="Abdellah Fihri";
echo strlen($name)."<br>";
echo strtoupper($name)."<br>";

print "exercise 3"."<br>";

$numbers=[33,25,14,78,105,$name];
print min($numbers)."<br>";
print max($numbers)."<br>";
sort($numbers);
print_r($numbers);
echo "<br>";
$found=in_array($name,$numbers);// finds something in an array in_arrat($tobefound,$array);
if($found){
	echo "found it";
}else{
	"not found";
}




	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>