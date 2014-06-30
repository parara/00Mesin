<html>
<head>
  <title>Driver Licence</title>
</head>
<body>
  <br> List Drivers <br>
<?php
$con = mysqli_connect("localhost","root","alpa","mesin");
if (mysqli_connect_errno()) {
  echo "Failde to connet: " . mysqli_connect_errno();
}

// SELECT lastname, firstname, tag
// FROM drivers, vehicles
// WHERE drivers.location = vehicles.location
$result = mysqli_query($con,"SELECT lastname, firstname,tag FROM drivers, vehicles WHERE drivers.location = vehicles.location");
echo "<table border='1'>
<tr>
<th>Lastname</th>
<th>Firstname</th>
<th>Tag</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['lastname'] . "</td>";
  echo "<td>" . $row['firstname'] . "</td>";
  echo "<td>" . $row['tag'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>