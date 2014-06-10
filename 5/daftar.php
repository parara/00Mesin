<?php
session_start();
if (isset($_SESSION['username'])) {
  # code...
  header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>WarSi | Warung Aplikasi BlankOn</title>
  </head>
  <body>
<center>
<form action="prosesdaftar.php" method="post">
  <table>
    <tr>
      <td colspan="2" align="center"><h1>Daftar Baru</h1></td>
    </tr>
    <tr>
      <td>Username</td><td> : <input type="text" name="username"></td>
    </tr>
    <tr>
      <td>Password</td><td> : <input type="password" name="password"></td>
    </tr>
    <tr>
      <td colspan="2" align="right">
        <input type="submit" value="Daftar">
        <input type="reset" value="Batal">
      </td>
    </tr>
    <tr>
      <td colspan="2" align="center">Sudah Punya akun ? <a href="login.php"><b>Login</b></a></td>
      </tr>
  </table>
</form>
</center>
  </body>
</html>