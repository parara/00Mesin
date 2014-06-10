<!DOCTYPE html>
<html>
  <head>
    <title>WarSi | Warung Aplikasi BlankOn</title>
  </head>
  <body>
<?php
session_start();
if(!$_SESSION['username']){
  header("location:login.php");
}
?>
<center>
Login Sukses<br>
<?php echo "<a href='logout.php'>Logout</a>";
?>
</center>
  </body>
</html>