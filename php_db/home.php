<?php
session_start();

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
  <div>
    <?php
    if(isset($_SESSION['email'])){
      echo "welcome $_SESSION[email] ";
      ?>
      <a href="profile.php">Profile</a>
      <a href="logout.php">Logout</a>
      <?php
    }
    ?>
    
</div>

</body>
</html>