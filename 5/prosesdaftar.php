<?php
require_once("connect.php");
$username = $_POST['username'];
$pass = $_POST['password'];
$cekuser = mysql_query("SELECT * FROM pengguna WHERE username= '$username'");
$num=mysql_num_rows($cekuser);
if ($num <> 0) {
  # code...
  echo "Username sudah terdaftar<br>";
  echo "<a href='daftar.php'> Back </a>";
} else {
  # code...
  if (!$username || !$pass) {
    # code...
    echo "form harus disi<br>";
    echo "<a href='daftar.php'> Back </a>";
  } else {
    # code...
    $simpan = mysql_query("INSERT INTO pengguna(username,password) VALUES ('$username','$pass')");
    if ($simpan) {
      # code...
      echo "Pendaftaran sukses, silahkan <a href='daftar.php'> Login </a>";
    } else {
      # code...
      echo "Proses gagal";
    } 
  }
}
?>