<?php
/* Display galery
 *
 */
echo "
<html>
  <head>
    <title>WarSi | Warung Aplikasi BlankOn</title>
  </head>
  <body>";
$dir = "image/";
$dh = opendir($dir);
while ($filename = readdir($dh)) {
  $filepath = $dir.$filename;
  if (is_file($filepath) and ereg("\.jpg$", $filename)) {
    $gallery[]= $filepath;
  } 
}
sort($gallery);
foreach ($gallery as $image) {
  echo "<hr>";
  echo "<img src='$image'><br>";
}
?>
ini jalan kagak?<br>
<center>
  
</center>
  </body>
</html>