<!DOCTYPE html>
<html>
  <head>
    <title>WarSi | Warung Aplikasi BlankOn</title>
  </head>
  <body>
<?php
$host = "localhost";
$username = "root";
$password = "alpa";
$db_name = "mesin";
$tbl_name = "pengguna";

// connect
mysql_connect("$host","$username","$password") or die("cannot connect");
mysql_select_db("$db_name") or die("cannot select DB");

// username and pass from form
$username = $_POST['username'];
$password = $_POST['password'];

// protect sql injection
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$sql = "SELECT * FROM $tbl_name WHERE username='$username' and password='$password'";
$result = mysql_query($sql); 

// mysql counting table row
$count=mysql_num_rows($result);

// if result good
if ($count===1) {
  # code...
  session_start("$username");
  $_SESSION['username']="username";
  header("location:login_success.php");
} else {
  echo "Wrong username or password";
}
ob_end_flush();
?>
  </body>
</html>