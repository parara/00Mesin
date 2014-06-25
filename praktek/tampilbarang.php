<html>
<head>
  <title>ABC oline shop</title>
</head>
<body>
  <br> DAFTAR BARANG <br>
<?php
include_once "connect.php";
$lakukan = mysql_query("SELECT kodebarang,namabarang FROM barang limit 0,10");
while ($hasil=mysql_fetch_array($lakukan)) {
?>
Kode Barang : <?php echo $hasil[kodebarang]; ?><br>
Kode Barang : <?php echo $hasil[namabarang]; ?><br>
<?php } ?>
</body>
</html>