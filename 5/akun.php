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
    $emailErr = "";
  } else {
    $kolom = "email";
    test_input($_POST["email"],$username,$kolom);
  }
  if (empty($_POST["web"])) {
    $desk = "";
  } else {
    $kolom = "web";
    test_input($_POST["web"],$username,$kolom);
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
function placeholder($username,$kolom) {
  // make dynamic
  $ygpunya = $username;
  $bagian = $kolom;
  $query = mysql_query("SELECT $bagian FROM pengguna WHERE username = '$ygpunya'");
  $row = mysql_fetch_row($query);
  $hasil = $row[0];
  echo "$hasil";
  return;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
   Firstname: <input type="text" name="firstname" placeholder= "<?php $kolom = "firstname"; placeholder($username,$kolom) ?>" >
   <span class="error">* <?php echo $nameErr;?></span>
   <br><br>
   Lastname: <input type="text" name="lastname" placeholder= "<?php $kolom = "lastname"; placeholder($username,$kolom) ?>" >
   <span class="error">* <?php echo $nameErr;?></span>
   <br><br>
   E-mail: <input type="text" name="email" placeholder= "<?php $kolom = "email"; placeholder($username,$kolom) ?>">
   <span class="error">* <?php echo $emailErr;?></span>
   <br><br>
   Website: <input type="text" name="web" placeholder= "<?php $kolom = "web"; placeholder($username,$kolom) ?>">
   <span class="error">* <?php echo $websiteErr;?></span>
   <br><br>
   Comment: <textarea name="desk" rows="5" cols="40" placeholder= "<?php $kolom = "desk"; placeholder($username,$kolom) ?>"></textarea>
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
//echo placeholder();
//echo "<h2>Your Input:</h2>";
?>

<br>
<a href="logout.php"><b>Logout</b></a>
</center>
  </body>
</html>