<?php
include "dbconfig.php";
$uid=$_GET['uid'];
$qry="delete from emp_table where id=$uid";
if($con->query($qry)){
  header("location:emplist.php");
}
else{
  echo "data not deleted";
}


?>