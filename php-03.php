<?php
$name = "PATRIK";

$heardoc = <<<EOD
data 1
new line {$name}
more text goes here
EOD;

echo $heardoc;

echo "<br>";

//Reverse string
// Using -1 for reverse counting from array element.
$length = strlen($name) - 1;
echo $length;
echo "<br>";



for ($i=$length; $i>=0; $i--){
	echo $name[$i];
}
echo "<br>";

$x = strrev($name);
echo $x;
echo "<br>";

//convert a var(str) to an array
$var = (array)$x;

var_dump($var);
echo "<br>";

var_dump($var[0]);
echo "<br>";

$y = gettype($var);
var_dump($y);
echo "<br>";

$z = implode(" ",$y);
echo $z;
var_dump($z[0]);
echo "<br>";
echo PHP_EOL;

//Parsing string in a specified format by using sscanf funtion.
$data = "Jone doe +13232 jon@doe.com";
$parts = sscanf($data, "%s %s %6s %s");
print_r($parts);

?>
