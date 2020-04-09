<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */
$num1=1;
$num2=3;

if($num1==$num2){
	echo 'thats smaller than 3'.'<br>';
}
elseif ($num1>$num2) {
	echo 'thats not it'.'<br>';
}
elseif($num1<>$num2){
	echo 'this should work using the <> operator'.'<br>';
}
else{
	echo 'none of above';
};

//for loop 

for($counter=0;$counter<=10;$counter++){
	echo $counter.'<br>';
}

///switch

switch($num2){
	case 0:
		echo 'no';
	break;
		case 1:
		echo 'also no';	
		break;
		case 2:
			echo 'also no';	
			break;
			case 15:
				echo 'also no';	
				break;
				case 3:
					echo 'thats it';	
					break;
					default: echo 'none of above';
};

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>