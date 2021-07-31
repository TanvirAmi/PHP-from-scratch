<?php
/*
Data type in PHP
----------------
Int
Double/Float
String
Boolean
Null
String
Array
Object
Resource
*/
$result = true;
$grade = "Pass";
var_dump($result, $grade);
$name = "Earth";
$x = strtoupper($name);
echo "<br />";
echo "We're liveing on {$x}";
echo "<br />";
$fname = "Tanvir";
$lname = "Ami";
$x = "Full";
printf("My %sName is %s %s", $x, $fname, $lname);
echo "<br />";
echo "My 
Name 
is\n
Tanvir";

echo "<br />";

printf('The binary equivalent of %d is %b', 12, 12);

echo "<br />";

$m = 123.0231; //count total number 8 here
$n = 23.21;

printf("%08.2f", $m);
echo "<br />";
printf("%08.2f", $n);
echo "<br />";


//Operator in different way.
$number = 12;

$numberInWord = ($number == 13)? "Thirteen" : "Any Other number";

echo $numberInWord;


//Multiple steping in for loop
//for($i=10, $j=1; $i>0, $i--, $j++){
//	echo $i.":".$j;
//}

echo "<br />";
//unlimited parameter in function for same data type.
function sum(int ...$z):int{
	$result = 0;
	for($i = 0; $i<count($z); $i++){
		$result += $z[$i];
	}
	return $result;
}
echo sum(1,2,4,7,9);


echo "<br />";
//Associative array
$foods = [
	'vegetables' => 'carrot, brocoli, brinjal',
	'fruits' => 'mango, orange, lichi',
	'drinks' => 'water, milk'
];

echo $foods['drinks'];
echo "<br />";


foreach ($foods as $key => $value) {
	# code...
	echo $key."=>".$value."<br />";
}
echo "<br />";

$keys = array_keys($foods);
print_r($keys);
echo "<br />";

for($i=0; $i<count($keys); $i++){
	$key = $keys[$i];
	echo $foods[$key]."<br/>";
}
?>