<?php

$arr=[12,40,50,60];
$arr1=[20,"suprava",30.5,true];

// echo $arr1[0];//20
// echo $arr[3];//60

// for($i=0;$i<count($arr);$i++){
//   echo $arr[$i]."<br>";
// }

//for each loop
// foreach($arr1 as $v){
//   echo $v ."<br>";
// }


//associative array
$arr2=[1=>"Ram","B"=>30,"C"=>"laxman"];
// echo $arr2[B];

foreach($arr2 as $k=>$v ){
  echo "$k=>$v<br>";
}
?>