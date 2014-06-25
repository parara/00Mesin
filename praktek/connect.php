<?php
$host = "localhost";
$username = "root";
$password = "alpa";
$db_name = "mesin";
$tbl_name = "pengguna";
mysql_connect("$host","$username","$password") or die("cannot connect");
mysql_select_db("$db_name") or die("cannot select DB");
?>