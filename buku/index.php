<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Judul</title>
<script>
function getValue()
  {
  var x=document.getElementById("myHeader");
  alert(x.innerHTML);
  }
</script>
<body>
<?php
  $selectdivisi = '
  <form action="index.php" name="fdivisi" method="get" style="margin:0px" onMouseOver="document.getElementById(\'divinfom\').innerHTML=\'Pilihan untuk divisi aplikasi yang tersedia\'" onMouseOut="document.getElementById(\'divinfom\').innerHTML=\'&nbsp;\'">
  <input type="hidden" name="m" value="mulai">
  <select name="d" onChange="document.fdivisi.submit()">
  ';
  foreach ($JJDIVISI as $key => $val) {
      $key == $DIVISI ? $sel = "selected" : $sel = "";
      $selectdivisi .= "<option $sel value=\"$key\">$val</option>\n";
  }
  $selectdivisi .= '
  </select>
  </form>
  ';
?>
<?php
$makan = true;
if ($makan)
  include "header.php";
  include "footer.php";
?>
ini jalan tidak

<h1 id="myHeader" onclick="getValue()">Click me!</h1>

</body>
</html>
