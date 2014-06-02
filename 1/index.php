<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location:login.php');
  } else {
    $username = $_SESSION['username'];
  }
require_once ("koneksi.php");
$query = mysql_query("SELECT * FROM user WHERE username = '$username'");
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
  /*
  $ISI = "Helo world";
  $A = "estu";
  echo "ini {$ISI}on $A";
  $Reno = 36;
  $Pasadena = 13;
  $Name = "Reno";
  echo "satu $Name is ${$Name}";
  $Name = "Pasadena";
  echo nl2br("\ndua $Name is ${$Name}");
  define("RATE", 2.2);
  $US_dollars = 20;
  $CA_dollars = $US_dollars * RATE;
  echo RATE;
  echo nl2br("\nnilai is $CA_dollars");
  */
  echo "<h2> Selamat Datang, $username</h2>";

?>
<a href="logout.php"><br>Logout</a>
  </center>
  </body>
</html>
