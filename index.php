<?php

// $conn = mysqli_connect('localhost','root','','dictionary');
// if(!$conn){
// die();
// }

function DataHandler($endpoint)
{
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $endpoint);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_TIMEOUT,3);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST,'GET');
$txt = curl_exec($ch);
// $array = explode("\n", $txt);
return $txt;
}

$textEndpoint ="https://raw.githubusercontent.com/meetDeveloper/freeDictionaryAPI/master/meta/wordList/english.txt";

$arr = DataHandler($textEndpoint);
print_r($arr);
 die("not");
for ($i=0; $i < 2; $i++) { 	
$meaningEndpoint = "https://api.dictionaryapi.dev/api/v2/entries/en/". $arr[$i];

$allData = DataHandler($meaningEndpoint);


}
?>
