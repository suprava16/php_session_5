<?php

// regular function
// function myFun(){
//   echo "hello from myFun function";
// }
// myFun();
// echo "<br>";
// myFun();
// echo "<br>";
// myFun();
// echo "<h1>heading</h1>";

//function with parameters
// function myFun2($a,$b){
//  echo "value of a=$a and b=$b";
// }
// myFun2(20,40);

//function with return value
// function myFun2($a,$b){
//  $sum=$a+$b;
//  return $sum;
//  }
//  $total=myFun2(20,40);
//  echo $total;


//global variable
// $a=20;
// function myFun4(){
//   // global $a;
//   echo "value of a inside function=",$GLOBALS['a'];
//   // echo "value of a inside function=",$a;
// }
// myfun4();
// echo "value of a outside function=$a";

//local variable
// function myFun4(){
//   $a=20;
//   echo "value of a inside function=",$a;
// }
// myfun4();
// echo "value of a outside function=$a";//error

//static variable
function myFun5(){
 static $a=20;
  echo "value=$a";
  $a=$a+2;
}
myFun5();
myFun5();
myFun5();
?>
