<?php
// $email=$_GET['use_email'];
// $password=$_GET['user_password'];

if(isset($_POST['submit'])){
  $email=$_POST['use_email'];
  $password=$_POST['user_password'];
  
  // echo "your email id is $email and password is $password";

  if($email==="suprava@gmail.com" && $password==="sup"){
    header("location:home.php?id=10");
  }
  else{
   ?>
<script>
  alert("wrong username and password");
</script>
<?php
  }
}

?>