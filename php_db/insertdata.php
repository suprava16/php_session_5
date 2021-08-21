<?php

if(isset($_POST['register'])){
  $empname=$_POST['empname'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $designation=$_POST['designation'];
  $salary=$_POST['salary'];
  $password=$_POST['password'];

  //Getting file name
  $file_name=$_FILES['profile_pic']['name'];
  $tmp_file_name=$_FILES['profile_pic']['tmp_name'];

  //creating folder 
  $file_path="profile_images/$empname";
  if(!is_dir($file_path)){
    mkdir($file_path,0777,true);
  }
  $main_path=$file_path."/".$file_name;

  //database connection
$con=new mysqli("localhost","root","","emp_info");
if($con->connect_error){
  die("something wrong in database connection....try again");
}


//insert data into table
if(move_uploaded_file($tmp_file_name,$main_path)){
$sql="insert into emp_table values(0,'$empname','$email','$phone','$designation',$salary,'$password','$main_path')";
if($con->query($sql)){
echo "data inserted successfully";
}
else{
echo "something wrong .try again";
}
}
}




?>