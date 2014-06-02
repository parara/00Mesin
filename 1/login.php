<?php
session_start();
if (isset($_SESSION['username'])) {
  header('location:index.php');
}
require_once ("koneksi.php");
?>
<html>
<head>
  <title>Form Login</title>
</head>
<body>
<center>
  <form action="proseslogin.php" method="post">
    <tr><td colspan="2" align="center"><h1>Masuk</h1></td></tr>
    <table>
    <tr>
      <td>Username</td><td> : <input type="text" name="username"></td>
      <td>Password</td><td> : <input type="password" name="password"></td>
    </tr>
    <tr>
      <td colspan="2" align="right">
        <input type="submit" value="Login">
        <input type="reset" value="Batal">
      </td>
    </tr>
    <tr>
      <td colspan="2" align="center">Belum Punya akun ?<a href="daftar.php"><b>Daftar</b></a></td>
    </tr>
    </table>
  </form>
</center>
</body>
</html>