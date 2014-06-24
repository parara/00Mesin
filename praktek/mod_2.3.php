<html>
<head>
  <title>Struktir Control IF</title>
</head>
<body>
  <?php
  $nilai1 = 4;
  $nilai2 = -7;
  if ($nilai1 > $nilai2)
    echo "$nilai1 lebih besar dari pada $nilai2 <br>";
  if ($nilai2 < 0)
    echo "$nilai2 adalah negative<br>";
  $bil = 8;
  if ($bil % 2 ==0)
    echo "Bilang $bil merupakan bilangan genap <br>";
  else
    echo "bilangn $bil merupakan bilangan ganjil <br>";

  $jurusan = "SI";
  switch($jurusan)
  {
    case "KA":
      echo "$jurusan = Komputerisasi akuntansi";
    break;
    case "MI":
      echo "$jurusan = Manajemen Informatika";
    break;
    case "SI":
      echo "$jurusan = Sistem Informasi";
    break;
    case "TI":
      echo "$jurusan = Teknik Informatika";
    break;
    default:
      echo "$jurusan tidak terdaftar";
  }
  ?>
</body>
</html>