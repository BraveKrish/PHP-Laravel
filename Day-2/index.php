<?php 

 // conditional statements
//  if, if else , if elseif else

// if : one condition and one statement
$age = 12;
// true or false
//  if($age > 18){
//     // statement goes here
//     echo "You are eligible to vote."; 
//  }

// if else
// one condition but two statement
// if($age > 18){
//     // true result
//     echo "You are eligible to vote."; 
//  }else{
//     // for false result
//     echo "You are too young to vote.";
// }

// // 3. if elseif else
// if($age > 18){
//     // true result
//     echo "You are eligible to vote."; 
//  }elseif($age < 18 && $age > 10){
//     // for false result
//     echo "You are closely eligible to vote.";
// }elseif($age<10){
//     echo "You are too young to vote";
// }else{
//     echo "You cannot vote.Your age is invalid.";
// }

// loops in php
// 1. for 2. while and 3. foreach (most important)

// program to display 10 natural number
// 1. for loop
// this is initial value
// $i=1; 
// for($i; $i<=10; $i++){
//     // echo " $i <br>";
//     echo "<ul>
//         <li>$i</li>
//     </ul>";
// }

// 2. while loop
// $n = 1;
// while($n<10){
//     echo " $n <br>";
//     $n = $n + 1;
// }

// #. function in php
// defining function
// function add($a,$b){
//     $sum = $a + $b;
//     return $sum;
// }

// // calling a function
// $res = add(5,4);
// echo "The result of sum: ".$res;

// $res1 = add(5,10);
// echo "The result of sum: ".$res1;

// array in php
$a = 5;

// indexed array
// $num = [1,3,5,6,10,15];

// // 1
// echo $num[0];
// // 3
// echo $num[1];
// // 5
// echo $num[2];
// //6
// echo $num[3];
// // 10
// echo $num[4];
// // 15
// echo $num[5];

// indexed array with foreach
// $numbers = [1,3,5,6,10,15];

// foreach($numbers as $number){
//     echo "The number in array are: ".$number. "<br>";
// }

// associative array
// $student = [
//     'name' => "Ram",
//     'age' => 25,
//     'address' => "Itahari"
// ];

// foreach($student as $key => $std ){
//     echo "$key: $std <br>";
// }


// multidimentional array
$students = [
    ["Ram", 20, "Itahari"],
    ["Hari", 25, "KTM"],
    ["Sita", 19, "Dharan"],
];

// echo $students[0][0];
// echo $students[1][1];

foreach($students as $student){
    echo "Name: $student[0], Age:$student[1], Address: $student[2] <br>";
}

// HTTP Methods
// SUPERGLOBALS in php -> TYPE OF ARRAY ($_POST, $_GET, $_REQUEST_METHOD)

// POST, GET, DELETE, PUT,


?>