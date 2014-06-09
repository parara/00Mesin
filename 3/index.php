<!DOCTYPE html>
<html>
  <head>
    <title>WarSi | Warung Aplikasi BlankOn</title>
  </head>
  <body>
ini jalan kagak?<br>
<center>
  <form action="insert.php" method="post">
  Firstname: <input type="text" name="first">
  Lastname: <input type="text" name="last">
  Age: <input type="text" name="age">
  <input type="submit">
  </form>

</center>

<?php
echo "<a href='show.php'>Show</a>";
// // Create connection
// $con=mysqli_connect("localhost","root","alpa","mesin");

// // Check connection
// if (mysqli_connect_errno()) {
//   echo "Failed to connect to MySQL: " . mysqli_connect_error();
// } else {
//   //echo "sukses";
// }

//mysqli_query($con,"INSERT INTO Persons (Fistname, LastName, Age) VALUES ('Peter','Grifin',35)");
//mysqli_close($con);

// create database
// $sql = "CREATE DATABASE my_db";
// if (mysqli_query($con,$sql)) {
//   echo "database created";
// } else {
//   echo "error :" . mysqli_error($con);
// }

// create table
// $sql = "CREATE TABLE Persons (
//   PID INT NOT NULL AUTO_INCREMENT,
//   PRIMARY KEY (PID),
//   FirsName CHAR(30),
//   LastName CHAR(30),
//   Age INT
// )";

// excute quary
// if (mysqli_query($con,$sql)) {
//   echo "Table terbuat";
// } else {
//   echo "error table: " . mysqli_error($con);
// }

// db lama
// $host = "localhost";
// $user = "root";
// $pass = "alpa";
// $db = "mesin";
// $konek = mysql_connect($host, $user, $pass) or die ('Koneksi Gagal! ');
// mysql_select_db($db);

?> 

  </body>
</html>