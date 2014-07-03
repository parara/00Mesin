<?php
/* File: fields_login.inc
 * Desc: Contains arrays with the field names and form
 * elements for the login Web page. The arrays named
 * with l are displayed in form 1 and those named
 * with 2 are displayed in form 2. The forms are 
 * defined in the file double_form.inc.
 */

$page = array( 
  "title" => "Customer Login Page",
  "top" => "",
  "bottom" => "Send question and commnet to admin");
$elements_1 = array(
  "top" => "Retuning Customers : <span style=\"front-size: 80%; front-weight:100%\"><i>Login Here</i></span>",
  "bottom" => "",
  "submit" => "Login");
$elements_2 = array(
  "top" => "Retuning Customers : <span style=\"front-size: 80%; front-weight:100%\"><i>Login Here</i></span>",
  "bottom" => "",
  "submit" => "Register");
$fields_1 = array(
  "fusername" => "User Name",
  "fpassword" => "Password");
$length_1 = array(
  "fusername" => "10",
  "fpassword" => "10");
$fields_2 = array(
  "username" => "User Name",
  "password" => "Password",
  "first_name" => "Fisrt Name",
  "last_name" => "Last Name",
  "street" => "Street",
  "city" => "City");
$length_2 = array(
  "username" => "20",
  "password" => "8",
  "first_name" => "40",
  "last_name" => "40",
  "street" => "55",
  "city" => "40");
 ?>