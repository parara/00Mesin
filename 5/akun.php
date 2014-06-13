<?php
session_start();
if (!isset($_SESSION['username'])) {
  # code...
  header('location:login.php');
} else {
  # code...
  $username= $_SESSION['username'];
}
require_once("connect.php");
//$query = mysql_query("SELECT * FROM pengguna WHERE username = '$username'");
//$hasil = mysql_fetch_array($query);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>WarSi | Warung Aplikasi BlankOn</title>
  </head>
  <body>
<center>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
     $nameErr = "Name is required";
   } else {
     test_input($_POST["name"],$username);
   }
}

// function test_input($data) {
//    $data = trim($data);
//    $data = stripslashes($data);
//    $data = htmlspecialchars($data);
//    return $data;
// }

function test_input($inputan,$username) {
  $inputan = trim($inputan);
  $ygpunya = $username;
  // $con = mysql_query("UPDATE pengguna SET firstname=$inputan WHERE username = '$username'") or die(mysql_error());
  //   if($con) {
  //   echo "successful";
  //   }else {
  //   echo "error";
  //   }
  echo "$inputan satu <br>"; //mahyudin pagi
  echo "$ygpunya dua <br>"; //mahyudin
  echo "$username"; //pagi
  return;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
   Name: <input type="text" name="name">
   <span class="error">* <?php echo $nameErr;?></span>
   <br><br>
   <input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>Selamat datang, $username </h2>";
echo "<h2>Your Input:</h2>";
echo $name;
?>

<br>
<a href="logout.php"><b>Logout</b></a>
</center>
  </body>
</html>