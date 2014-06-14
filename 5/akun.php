<?php
session_start();
if (!isset($_SESSION['username'])) {
  header('location:login.php');
} else {
  $username= $_SESSION['username'];
}
require_once("connect.php");
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
  if (empty($_POST["firstname"])) {
    $nameErr = "Name is required";
  } else {
    $kolom = "firstname";
    test_input($_POST["firstname"],$username,$kolom);
  }
  if (empty($_POST["lastname"])) {
    $nameErr = "Name is required";
  } else {
    $kolom = "lastname";
    test_input($_POST["lastname"],$username,$kolom);
  }
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $kolom = "email";
    test_input($_POST["email"],$username,$kolom);
  }
  if (empty($_POST["desk"])) {
    $desk = "";
  } else {
    $kolom = "desk";
    test_input($_POST["desk"],$username,$kolom);
  }

   // if (empty($_POST["gender"])) {
   //   $genderErr = "Gender is required";
   // } else {
   //   test_input($_POST["gender"],$username);
   // }
}

function test_input($inputan,$username,$kolom) {
  $isi = $inputan;
  $ygpunya = $username;
  $bagian = $kolom;
  // echo "$bagian";
  // kolom apa yang disi
  $con = mysql_query("UPDATE pengguna SET $bagian='$isi' WHERE username = '$ygpunya'") or die(mysql_error());
  if($con) {
    echo "successful";
  }else {
    echo "error";
  }
  return;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
   Firstname: <input type="text" name="firstname">
   <span class="error">* <?php echo $nameErr;?></span>
   <br><br>
   Lastname: <input type="text" name="lastname">
   <span class="error">* <?php echo $nameErr;?></span>
   <br><br>
   E-mail: <input type="text" name="email">
   <span class="error">* <?php echo $emailErr;?></span>
   <br><br>
   Website: <input type="text" name="desk">
   <span class="error"><?php echo $websiteErr;?></span>
   <br><br>
   Comment: <textarea name="comment" rows="5" cols="40"></textarea>
   <br><br>
   <!-- Gender:
   <input type="radio" name="gender" value="female">Female
   <input type="radio" name="gender" value="male">Male
   <span class="error">* <?php echo $genderErr;?></span>
   <br><br> -->
   <input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>Selamat datang, $username </h2>";
//echo "<h2>Your Input:</h2>";
?>

<br>
<a href="logout.php"><b>Logout</b></a>
</center>
  </body>
</html>