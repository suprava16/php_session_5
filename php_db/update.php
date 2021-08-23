<?php
//database connection
$con=new mysqli("localhost","root","","emp_info");
if($con->connect_error){
  die("something wrong in database connection....try again");
}
//get id value
$uid=$_GET['uid'];

if(isset($_POST['edit'])){
  $name=$_POST['username'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $desig=$_POST['designation'];
 $salary=$_POST['salary'];

 $qry="update emp_table set empname='$name',email='$email',phone='$phone',designation='$desig',salary='$salary' where id=$uid";
 if($con->query($qry)){
  header("location:profile.php");
}
else{
  echo "failed";
}
}



//fetch all user data
$sql="select * from emp_table where id=$uid";
$result=$con->query($sql);
if($result->num_rows>0){
  $data=$result->fetch_assoc();
  $username=$data['empname'];
  $email=$data['email'];
  $phone=$data['phone'];
  $desig=$data['designation'];
  $salary=$data['salary'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
      <input type="text" name="username" value="<?php echo $username;?>" placeholder="enter username" id="" required><br>
      <input type="email" name="email" value="<?php echo $email;?>" placeholder="enter email" id="" required><br>
      <input type="text" name="phone" value="<?php echo $phone;?>" placeholder="enter phone" id="" required><br>
      <input type="text" name="designation" value="<?php echo $desig;?>" placeholder="enter designation" id="" required><br>
      <input type="text" name="salary" value="<?php echo $salary;?>" placeholder="enter salary" id="" required><br>

      <button type="submit" name="edit">Edit</button>
  </form>
</body>
</html>