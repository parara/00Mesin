<!DOCTYPE html>
<html>
<head>
  <title>Warsi | Input Data</title>
</head>
<body>

<?php
$con=mysqli_connect("localhost","root","alpa","mesin");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
} 

// escape variables for security
$first = mysqli_real_escape_string($con,$_POST['first']);
$last = mysqli_real_escape_string($con,$_POST['last']);
$age = mysqli_real_escape_string($con,$_POST['age']);

$sql = "INSERT INTO Persons (FirstName,LastName,Age) VALUES ('$first','$last','$age')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added<br>";
echo "<a href='index.php'>Back</a>";
?>

</body>
</html>