<?php 
$a = [
	"a" => 1,
	"b" => 2,
	"c" => "Yo <3 JSON"
];

$a_json = json_encode($a);

echo $a_json;
echo "<br>";

$b = json_decode($a_json,true);



echo $b['c']." | ".$b['a']." | ".$b['b'];

 ?>