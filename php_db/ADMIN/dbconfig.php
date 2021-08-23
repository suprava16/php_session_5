<?php
 //database connection
 $con=new mysqli("localhost","root","","emp_info");
 if($con->connect_error){
   die("something wrong in database connection....try again");
 }
?>