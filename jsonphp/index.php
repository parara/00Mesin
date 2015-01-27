<?php
// retrive form: 
// [0] https://eval.in/60114
// [1] http://blog-en.openalfa.com/how-to-read-and-write-json-files-in-php
$btppm = file_get_contents("data.json");
// decode JSON
$json = json_decode($btppm, true);

// get the data
// get the data
//$temperatureMin = $json['daily']['data'][0]['temperatureMin'];
//$temperatureMax = $json['daily']['data'][0]['temperatureMax'];

$isi2 = $json['Pelayanan Perizinan Bidang']['Ekonomi']['data'][0]['Diterbitkan'];
$isi1 = $json['Pelayanan Perizinan Bidang']['Ekonomi']['title'];


// echo it
echo "title: ".$isi1." "; 
echo $isi2;
?>