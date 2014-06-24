<html>
<head>
  <title>Konversi Tipe dan tanggalan</title>
</head>
<body>
  <?php
  $a = 300.4;
  $s = (double) $a;
  echo $a;
  echo "<br>";
  echo "tipe Double : ", doubleval($a), "<br>";
  echo "tipe Integer : ", intval($a), "<br>";
  echo "tipe String : ", strval($a), "<br>";
  echo date("m-F-Y, g:i:s a"), "<br>";
  echo "$s";
  ?>
</body>
</html>