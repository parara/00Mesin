<?php
include_once "connect.php";
$kodebarang = $_POST['kodebarang'];
$namabarang = $_POST['namabarang'];
$stok = $_POST['stok'];
$satuan = $_POST['satuan'];
$harga = $_POST['harga'];
$simpan = mysql_query("INSERT INTO barang(kodebarang,namabarang,stok,satuan,harga) VALUES('$kodebarang','$namabarang','$stok','$satuan','$harga')");
if (!$simpan) {
  echo "Proses gagal";
}
?>