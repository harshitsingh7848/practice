<?php
$input_array = array("FirSt" => 1, "SecOnd" => 4);

print_r(array_change_key_case($input_array, CASE_LOWER));

echo"<br>";

$input = array('a', 'b', 'c', 'd', 'e');

print_r(array_chunk($input, 2));

print_r(array_chunk($input, 2, true));

echo"<br>";

$b = array('green', 'red', 'yellow');

$a = array(1, 2, 3);

$c = array_combine($a, $b);

$d=array_merge($a,$b);

print_r($c);

echo"<br>";

print_r($d);