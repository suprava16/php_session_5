<?php

if(isset($_POST['login'])){
$email=$_POST['email'];
$password=$_POST['password'];

 //database connection
 $con=new mysqli("localhost","root","","emp_info");
 if($con->connect_error){
   die("something wrong in database connection....try again");
 }
 

$sql="select * from emp_table where email='$email' and password='$password'";
$result=$con->query($sql);
if($result->num_rows>0){
  $data=$result->fetch_assoc();
  $emp_name=$data['empname'];
  $email=$data['email'];
  // echo "welcome $emp_name and your email id is $email";
  header("location:home.php");
}
else{
  echo "wrong email or password.try again";
}

}

?>