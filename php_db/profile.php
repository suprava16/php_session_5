<?php
session_start();
//database connection
$con=new mysqli("localhost","root","","emp_info");
if($con->connect_error){
  die("something wrong in database connection....try again");
}

if(isset($_SESSION['email'])){
  // echo "welcome $_SESSION[email]";

  $qry="select * from emp_table where id=$_SESSION[id]";
  $result=$con->query($qry);
  if($result->num_rows>0){
    $data=$result->fetch_assoc();
    $name=$data['empname'];
    $email=$data['email'];
    $phone=$data['phone'];
    $desig=$data['designation'];
    $salary=$data['salary'];
    $profile=$data['profile'];
  }

}


?>
<div style="display:flex">
<img src="<?php echo $profile; ?>" alt="profile pic">
<h3> welcome <?php echo $name;?></h3>
</div>
<table border="1">
  <tr>
    <th>name</th>
    <th>email</th>
    <th>phone</th>
    <th>designation</th>
    <th>salary</th>
  </tr>
  <tr>
    <td><?php echo $name;?></td>
    <td><?php echo $email;?></td>
    <td><?php echo $phone;?></td>
    <td><?php echo $desig;?></td>
    <td><?php echo $salary;?></td>
  </tr>
</table>