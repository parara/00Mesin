<!DOCTYPE html>
<html>

<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td, tr {
    padding: 5px;
    text-align: center;    
}
</style>
</head>

<body>

<?php
// retrive form: 
// [0] https://eval.in/60114
// [1] http://blog-en.openalfa.com/how-to-read-and-write-json-files-in-php
// [2] https://jonsuh.com/blog/convert-loop-through-json-php-javascript-arrays-objects/
$ekonomi = file_get_contents("ekonomi.json");
$fisik = file_get_contents("fisik.json");

$izineko = json_decode($ekonomi); //objek
$izinfisik = json_decode($fisik); //objek

?>
<h2>Pelayanan Perizinan Bidang Ekonomi :</h2>
<table style="width:100%">
  <tr>
    <th colspan="1" rowspan="2">NO</th>
    <th colspan="1" rowspan="2">Jenis Pelayanan Perizinan</th>
    <th colspan="4" rowspan="1">Berkas Perizinan</th>
  </tr>
  <tr>
    <td >Diterima</td>
    <td>Dlm Proses</td>
    <td>Ditolak</td>
    <td>Diterbitkan</td>
  </tr>
  <?php
  foreach ($izineko as $key => $value) {
    echo "<tr>";
    echo "<td>".$value->ID."</td><td style='text-align:left;width:50%;'>".$value->Jenis."</td><td>".$value->Diterima."</td><td>".$value->DlmProses."</td><td>".$value->Ditolak."</td><td>".$value->Diterbitkan."</td>";
    echo "</tr>";
  }
  ?>
</table>

<h2>Pelayanan Perizinan Bidang Fisik :</h2>
<table style="width:100%">
  <tr>
    <th colspan="1" rowspan="2">NO</th>
    <th colspan="1" rowspan="2">Jenis Pelayanan Perizinan</th>
    <th colspan="4" rowspan="1">Berkas Perizinan</th>
  </tr>
  <tr>
    <td >Diterima</td>
    <td>Dlm Proses</td>
    <td>Ditolak</td>
    <td>Diterbitkan</td>
  </tr>
  <?php
  foreach ($izinfisik as $key => $value) {
    echo "<tr>";
    echo "<td>".$value->ID."</td><td style='text-align:left;width:50%;'>".$value->Jenis."</td><td>".$value->Diterima."</td><td>".$value->DlmProses."</td><td>".$value->Ditolak."</td><td>".$value->Diterbitkan."</td>";
    echo "</tr>";
  }
  ?>
</table>

</body>
</html>