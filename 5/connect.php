<?php
$host = "localhost";
$user_name = "root";
$pass_word = "alpa";
$db_name = "mesin";
//$tbl_name = "pengguna";

// connect
$con=mysql_connect("$host","$user_name","$pass_word") or die("cannot connect");
mysql_select_db("$db_name") or die("cannot select DB");
?>