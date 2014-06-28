<html>
<head>
  <title>ABC oline shop</title>
</head>
<body>
  <br> DAFTAR BARANG <br>
<?php
include_once "connect.php";
$result = mysql_query("SELECT kodebarang,namabarang FROM barang limit 0,10");
echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>";
// while ($hasil=mysql_fetch_array($lakukan)) {
// echo "Kode Barang : " . $hasil['kodebarang'] . "<br>";
// echo "Kode Barang : " . $hasil['namabarang'] . "<br>";
while($row = mysql_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['kodebarang'] . "</td>";
  echo "<td>" . $row['namabarang'] . "</td>";
  echo "</tr>";
}
echo "</table>";
?>
</body>
</html>