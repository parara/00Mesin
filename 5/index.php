<?php
session_start();
if (!isset($_SESSION['username'])) {
  # code...
  header('location:login.php');
} else {
  # code...
  $username= $_SESSION['username'];
}
require_once("connect.php");
$query = mysql_query("SELECT * FROM pengguna WHERE username = '$username'");
$hasil = mysql_fetch_array($query);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>WarSi | Warung Aplikasi BlankOn</title>
  </head>
  <body>
ini jalan kagak?<br>
<center>
<?php
echo "<h2>Selamat datang, $username </h2>";
?>
<a href="logout.php"><b>Logout</b></a>
</center>
  </body>
</html>