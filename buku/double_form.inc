<?php
/* File: double_form.inc
 * Desc: Contains the code for a Web page that displays
 * two HTML forms, side by side in a table.
 */

// include("function.inc");
 ?>
<html>
  <head><title><?php echo $page["title"];?></title></head>
<body stule="margin: 0">
<h1 align="center"><?php echo $page["top"];?></h1>
<hr size="10" noshade>
<table border="0" cellpadding="5" cellspacing="0">
<?php
##########
# Form 1 #
##########
?>
<tr>
  <td width="33%" valign="top">
    <p style="font-size:110%; font-wight:bold">
    <?php echo $elements_1["top"];?></p>
    <!-- Beginning of form 1 (left) -->
    <form action=<?php echo $_SERVER['PHP_SELF']?> method="POST">
      <table border="0">
<?php
  if (isset($GLOBALS['message_1'])) {
    echo "
    <tr>
    <td colspan='2' style=\"font-weight: bold; font-style: italic; font-size: 90%; color: red\">
        {$GLOBALS['message_1']}<p></td></tr>\n";
  }
  foreach ($fields_1 as $field => $value) {
    if(ereg("pass", $fields_1))
      $type = "password";
    else
      $type = "text";
    echo "<tr><td style=\”text-align: right;
                  font-weight: bold\">$value</td>
              <td><input type='$type' name='$field' value='".@$$field."' size='{$length_1[$field]}' maxsize='{$length_1[$field]}'>
              </td>
          </tr>\n";
  }
?>
  <tr>
    <td colspan="2" style="text-align: center" ><br/>
      <input type="submit" name="Button" value="<?php echo $elements_1['submit']?>">
    </td>
  </tr>
      </table>
    </form>
  </td>
  <!-- Column that separates the two forms -->
  <td style="background-color: gray"></td>
<?php
#########
# Form2 #
#########
?>
  <td width="67%">
    <p style="font-size: 110%; font-weight: bold">
      <?php echo $elements_2["top"]; ?>
    <!-- Beginning of Form 1 (right side) --> 
      <form action=<?php echo $_SERVER["PHP_SELF"];?> method="POST">
    <p>
    <table border="0" width="100%">
<?php
if (isset($GLOBALS["message_2"])) {
  echo "
  <tr>
    <td colspan='2'style=\"font-weight: bold; font-style: italic; font-size: 90%; color: red\"> {$GLOBALS['message_2']}<p></td></tr>";
  }
  foreach($fields_2 as $field => $value) {
    if($field == "state")
    {
      echo "
      <tr>
        <td style=\"text-align: right; font-weight: bold\">State</td>
        <td>
          <select name='state'>";
      //$stateName=getStateName();
      //$stateCode=getStateCode();
// for ($n=1;$n<=50;$n++) {
//   $state=$stateName[$n];
//   $scode=$stateCode[$n];
//   echo "<option value='$scode'";
//   if ($scode== @$_POST['state'])
//     echo " selected"; echo ">$state\n";
//   }
    echo "</select>";
  } else {
      if(ereg("pass",$field)) $type = "password";
        else
      $type = "text";
  echo "
  <tr>
    <td style=\"text-align: right; font-weight: bold\">$value</td>
    <td>
      <input type='$type' name='$field' value=\'".@$$field."\' size='{$length_2[$field]}' maxsize='{$length_2[$field]}''>
    </td>
  </tr>"; 
  }
}
?>
  <tr>
    <td colspan="2" style="text-align: center">
      <p style="margin-top: .05in">
      <input type="submit" name=”Button" value="<?php echo $elements_2['submit'];?>""></p>
    </td>
  </tr>
  </table>
 </form>
</td>
</tr>
</table>
<hr size="10" noshade>
<div style="text-align: center; font-size: 75%">
  <?php echo $page['bottom']?>
</div>
</body>
</html>