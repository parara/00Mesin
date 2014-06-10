<?php
session_start();
require_once("connect.php");

$username = $_POST['username'];
$pass = $_POST['password'];
$cekuser = mysql_query("SELECT * FROM pengguna WHERE username = '$username'");
$jumlah = mysql_num_rows($cekuser);
$hasil = mysql_fetch_array($cekuser);

if($jumlah == 0) {
  echo "Username Belum Terdaftar!<br/>";
  echo "<a href='login.php'>Back</a>";
} else {
  if($pass <> $hasil['password']) {
    echo "Password Salah!<br/>";
    echo "<a href='login.php'>Back</a>";
  } else {
    $_SESSION['username'] = $hasil['username'];
    header('location:index.php');
  }
}
?>
