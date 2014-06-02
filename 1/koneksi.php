<?php 
$host = "localhost";
$user = "root";
$pass = "alpa";
$db = "mesin";
$konek = mysql_connect($host, $user, $pass) or die ('Koneksi Gagal! ');
mysql_select_db($db);
?>