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
Login Sukses
<?php echo "<a href='show.php'>Show</a>";
?>
  </body>
</html>