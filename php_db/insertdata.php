<?php

if(isset($_POST['register'])){
  $empname=$_POST['empname'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $designation=$_POST['designation'];
  $salary=$_POST['salary'];
  $password=$_POST['password'];

  //database connection
$con=new mysqli("localhost","root","","emp_info");
if($con->connect_error){
  die("something wrong in database connection....try again");
}


//insert data into table
$sql="insert into emp_table values(0,'$empname','$email','$phone','$designation',$salary,'$password')";
if($con->query($sql)){
echo "data inserted successfully";
}
else{
echo "something wrong .try again";
}
}




?>