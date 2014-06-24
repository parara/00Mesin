<html>
<head>
  <title> Pemograman PHP dengan Array</title>
</head>
<body>
  <?php
  // Array
  $nama[] = "Issabela";
  $nama[] = "Affan";
  $nama[] = "Desty";
  echo $nama[1] . $nama[2] . $nama[0];
  echo "<br>";

  // hitung jumlah array
  $jum_array = count($nama);
  echo "jumlah element array = ". $jum_array;
  
  // bentuk lain
  $kampus[sekolah] = "STMIK";
  $kampus[nama_kampus] = "Akakom";
  echo "Kampusku adalah $kampus[sekolah] $kampus[nama_kampus]";
  ?>
</body>
</html>