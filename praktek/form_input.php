<html>
<head>
  Pemasukan Data Barang
  <title>Pemasukan data barang dan stok</title>
</head>
<body>
  <form name="form1" method="post" action="simpan_barang.php">
    <table width="400" height="77" border="1">
      <tr>
        <td width="100">Kode Barang</td>
        <td><input name="kodebarang" type="text" size="12" maxlength="4"></td>
      </tr>
      <tr>
        <td width="100">Nama Barang</td>
        <td><input name="namabarang" type="text" size="30" maxlength="30"></td>
      </tr>
      <tr>
        <td width="100">Stok</td>
        <td><input name="stok" type="text" size="12" maxlength="4"></td>
      </tr>
      <tr>
        <td width="100">Satuan</td>
        <td><input name="satuan" type="text" size="12" maxlength="12"></td>
      </tr>
      <tr>
        <td width="100">Harga</td>
        <td><input name="harga" type="text" size="30" maxlength="30"></td>
      </tr>
      <tr>
        <td><input name="sumbit" type="submit" value="sumpan"></td>
      </tr>
    </table>
  </form>
</body>
</html>