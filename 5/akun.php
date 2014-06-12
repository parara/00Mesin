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
     $name = test_input($_POST["name"]);
   }
  
   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {
     $email = test_input($_POST["email"]);
   }
    
   if (empty($_POST["website"])) {
     $website = "";
   } else {
     $website = test_input($_POST["website"]);
   }

   if (empty($_POST["comment"])) {
     $comment = "";
   } else {
     $comment = test_input($_POST["comment"]);
   }

   if (empty($_POST["gender"])) {
     $genderErr = "Gender is required";
   } else {
     $gender = test_input($_POST["gender"]);
   }
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
   Name: <input type="text" name="name">
   <span class="error">* <?php echo $nameErr;?></span>
   <br><br>
   E-mail: <input type="text" name="email">
   <span class="error">* <?php echo $emailErr;?></span>
   <br><br>
   Website: <input type="text" name="website">
   <span class="error"><?php echo $websiteErr;?></span>
   <br><br>
   Comment: <textarea name="comment" rows="5" cols="40"></textarea>
   <br><br>
   Gender:
   <input type="radio" name="gender" value="female">Female
   <input type="radio" name="gender" value="male">Male
   <span class="error">* <?php echo $genderErr;?></span>
   <br><br>
   <input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;

// $simpan = mysql_query("INSERT INTO pengguna(username,password) VALUES ('$username','$pass')");
//   if ($simpan) {
//     # code...
//     echo "Pendaftaran sukses, silahkan <a href='daftar.php'> Login </a>";
//   } else {
//     # code...
//     echo "Proses gagal";
//   } 
?>


<?php
echo "<h2>Selamat datang, $username </h2>";
?>
<br>
<a href="logout.php"><b>Logout</b></a>
</center>
  </body>
</html>