<?php
// if(isset($_POST['submit'])){

//     $names=array('Abdellah','Sandra','Ilyas');
//    $name= $_POST['name'];
//    $password= $_POST['password'];
//    if(!$name && !$password){
//        echo "enter a valid name or password";
//    }
// if(strlen($name)<5){
// echo "User name is too short";
// }
// if(!in_array($name,$names)){
// echo "youre not allowed";
// }elseif (in_array($name,$names)) {
//     echo "Welcome";
// }


// }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="form_process.php" method="post">


<input type="text" placeholder="Name" name="name"> <br>
<input type="password" placeholder="Password"  name="password"> <br>
<input type="submit" name="submit">
</form>
    <?php 
   /*  $name='Abdellah';
    $number=100;

    echo $name .' is '. $number .' years old'// concatination is . in php
 */
/////////////////////////////////////////////////////////Math///////////////////////////

// echo 65 + 45;
// echo '<br>';
// echo 65 - 45;
// echo '<br>';
// echo 65 * 45;
// echo '<br>';
// echo 65 / 45;
// echo '<br>';
// echo 65 + 45 * 10 / 20 - 2;
// echo '<br>';
// echo 5 + 5 * 10;
// echo '<br>';
// $num1=30;
// $num2=100;
// echo $num1+$num2;
// echo '<br>';
// echo 5 + 5 * 10;
// echo '<br>';
// echo (5 + 5 )* 10;

//////////////////////////////////////////////Arrays///////////////////////////////////

//the way of using arrays in php
// $numberList=array(23,25,10,20,'<h1>Hello</h1>','1234',10);
// print_r($numberList); //prints the index position and the value
// echo $numberList[4];

///////////////////////////////////////Arrays assossiatives///////////////////

// $names=array('Ilyas','Isaac','Sandra','abd');
// echo $names[2].'<br>';
// print_r($names);

// $names2=array('first_name'=>'Abdellah','family_name'=>'Fihri');


// print_r($names2);
// echo '<br>';
// //reffereing to data by labels in place of index numbers
// echo $names2['first_name'].' '.$names2['family_name'];



//////////////////////////////////////////////////////if statement///////////////////////////////////////////////

// if(1>3){
// echo 'yes'.'<br>';

// }
// elseif(1>0){
//     echo "1 is grater than 0";
// }
// else{
//     echo "no";
// }

////////////////////////////////////////////////////Comparison operators//////////////////////////////////

// echo " <ul>
// <li> equal ==</li>
// <li> identical ===</li>
// <li>compare > < >= <=  <>(smaller than or greater than) </li>
// <li>not equal !=</li>
// <li>not identical !==</li>
// </ul> ";
// if (1<>1){
//     echo"thats true";
// };

//////////////////////////////////////////////////////switch statment//////////////////////////////

// $number=10;
// switch($number){
//     case 30:
//         echo "its 30";
//     break;
//         case 40:
//             echo "its 40";
//         break;
//             case 50:
//                 echo "its 50";  
//             break;
//             default:
//             echo "none above";
// }

///////////////////////////////////////////////////while Loop/////////////////////////////////////////////

// $number2=10;
// $counter=0;
// while($counter<=$number2){
//     echo $counter++;

// };

////////////////////////////////////////////////////for loop///////////////////////////////////////////////

// for($counter=0;$counter<=20;$counter++){
// echo $counter.'<br>';
// }

//////////////////////////////////////////////////foreach loop//////////////////////////////////////////

// $numbers=array(1,2,3,4,5,6,7,8,9,10);
// //looping in an array
// foreach($numbers as $number){

// echo $number. '<br>';

// };
//////////////////////////////////////////////////functions//////////////////////////////////////////
// function saySomething($someText){

//     echo $someText;
// };
// function calc($sum1,$sum2){
//     saySomething('Hello there..do you like PHP?'.'<br>');
//     echo $sum1+$sum2."<br>";
// };
// calc(2,2);

/////////////////////////////////////////////////return values from functions////////////////////////
//getting the value out of the function
// function calculator($num1,$num2){
// $sum=$num1+$num2;
// return $sum;
// };
// $result=calculator(10,20);
// echo $result.'<br>';
// //adds new parameter to the result obtained from the last returned sum (assigning values from right to left)
// $result=calculator(30,$result);
// echo $result.'<br>';

////////////////////////////////////////////////Global variables and scope///////////////////////////////////

// $x="outside";//global

// function convert(){
//     global $x; //global is a keyword  we can change its value anytime
//     $x="inside";//local
// };
// echo $x;
// echo "<br>";

// convert();

// echo $x."<br>";//after calling the function the global x is converted as in the function

// echo $x;


/////////////////////////////////////////////////Constant/////////////////////////////////

// define("NAME","Abdellah"); //this is the way to define a constant in  PHP  define("NAME OF CONSTANT",value of constant);
// echo NAME;//we call the constant without the $

///////////////////////////////////////////////Predfined functions in php//////////////////////////////////

// echo pow(2,5)."<br>";  // 2 to the 5th power 2*2*2*2*2

// echo rand(1,100)."<br>"; //generates a random number if its empty or limits the range by setting limits rand(1,100)

// echo sqrt(25)."<br>"; //square root
// echo ceil(4.6)."<br>";  //next int 5
// echo floor(4.6)."<br>";  //previous int 4
// echo round(4.4)."<br>"; //will round the number to choose the closer int

/////////////////////////////////////////////String functions in php///////////////////////////////////

// $string ="Hello there";

// echo strlen($string)."<br>"; //string length including spaces

// echo strtoupper($string)."<br>"; //to uppercase

// echo strtolower($string)."<br>";//to lowercase

///////////////////////////////////////////Array functions///////////////////////////////////////

// $list=[52,10,458,102,25,69];
// echo max($list)."<br>"; //selects the mqx value in q string
// echo min($list)."<br>";//selects the menimum
//  sort($list)."<br>"; //will sort the values in array from  smaller to greater
//  print_r($list)."<br>"; //print_r($list[2]) to select a specific item





//////////////////////////////////////////////Form/////////////////////////////////////////////



    ?> 
   
</body>

</html>