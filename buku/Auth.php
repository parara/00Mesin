<?php
/* Program:
* Desc: Auth.php
*       Program that prompts for a user name and
*       password from the user using HTTP authentication.
*       The program then tests whether the user
*       name and password match a user name and password
*       pair stored in a MySQL database. 
*/

//Testing whether the user has been prompted for a user name
if(!isset($_SERVER['PHP_AUTH_USER'])) {
  header('WWW-Authenticate: Basic realm="secret section"');
  header('HTTP/1.0 401 Unauthorized');
  exit("This page requires authentication!");
}
// Testing the user name and password entered by the user
else {
  include("Vars.inc");
  $user_name = trim($_SERVER['PHP_AUTH_USER']);
  $user_password = trim($_SERVER['PHP_AUTH_PW']);
  $connection = mysql_connect("$host","$user","$password") or die ("Couldn’t connect to server.");

  $db = mysql_select_db("$database") or die ("Couldn’t select database.");
  $sql = "SELECT user_name FROM Valid_User WHERE user_name = '$user_name' AND password = md5('$user_password')";
  $result = mysql_query($sql) or die("Couldn’t execute query.");
  
  echo "hasil = $result <br>";
  $num = mysql_num_rows($result);
  echo "num = $num <br>";
  // ini logikane bubar
  if ($num < 1) {
    exit("The User Name or password you entered is not valid.<br>");
  } 
  // Web page content.
  include("Welcome.inc");
}
?>