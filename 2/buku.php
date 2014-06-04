<html>
<body>
ini jalan kagak?<br>
<?php

function add_numbers($numbers) {
  if(!is_array($numbers)) {
    echo "The value passed is not an array";
    exit();
  }
  for($i=0;$i <sizeof($numbers);$i++) {
    @$sum = $sum + $numbers[$i]; 
  }
  return $sum;
}

function add_2_numbers($num1,$num2) {
  $total = $num1 + $num2;
  return $total;
}
$total = add_2_numbers(2,2);

//$arrayofnumbers = array(100,200);
//$total = add_numbers($arrayofnumbers);
echo "$total";
?>

<br>
<br><a href="index.php"><b>Kembali</b></a></td>
</body>
</html>

<!--
// function nama(){
//   echo '<img src="grenrule.jpg" width="100%" height="7" />
//   <address>My Great Company
//   <br />1234 Wonderful Rd.
//   <br />San Diego, CA 92126
//   </address></font>
//   <p>or send questions to
//     <a href="mailto:sales@company.com">sales </a>
//     <img src="greenrule.jpg" width="100%"" height="7" />';
//   return;
// }

// $satu = "Jess";
// $dua = "Jones"; 
// function format_name() {
//   //global $name;
//   global $satu, $dua;
//   $name = $satu.", ".$dua;
//   echo "$name";
// }
// format_name();

//$footer = nama("Sales");
//format_name("jes","jones");
//echo $name;
-->