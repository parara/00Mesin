<?php
$con = mysqli_connect("localhost","root","alpa","mesin");
if (mysqli_connect_errno()) {
  echo "Failde to connet: " . mysqli_connect_errno();
}

// Dinamic Query
// $result = mysqli_query($con, "SELECT * FROM Persons");
// $result = mysqli_query($con,"SELECT * FROM Persons WHERE FirstName='Estu'");
$result = mysqli_query($con,"SELECT * FROM Persons ORDER BY age DESC "); // tambahin ASC|DESC untuk query

// make logical command to dinamic update table content. How?

// show result query
// while ($row = mysqli_fetch_array($result)) {
//   # code...
//   echo $row['FirstName'] . " " . $row['LastName'];
//   echo "<br>";
// }

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['FirstName'] . "</td>";
  echo "<td>" . $row['LastName'] . "</td>";
  echo "<td>" . $row['Age'] . "</td>";
  echo "</tr>";
}
echo "</table>";

//mysqli_query($con,"UPDATE Persons SET Age=40 WHERE FirstName='Estu' AND LastName='Fardani'");
mysqli_query($con,"DELETE FROM Persons WHERE FirstName='Estu'");

mysqli_close($con);

?>