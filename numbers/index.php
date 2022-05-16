<?php
$x = 56123;
$y = 45.236;

var_dump($x);
var_dump($y);

var_dump(is_int($x));
var_dump(is_float($x));

var_dump(is_float($y));
var_dump(is_int($y));

$str = "Hi";
$z = "693.569";

//casting
echo (int)$y . "\n";

$num = (float)$z;
echo $num . "\n";

var_dump(is_numeric($str));
var_dump(is_numeric($num));



?>