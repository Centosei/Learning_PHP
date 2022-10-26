<?php
// is_array
$full = array("Fred", "Brown");
$array = array($full, 'fred');
$fred = array_rand($array, 1);

echo (is_array($array[$fred])) ? "Is an array\n" : "Is not an array\n";

echo count($full) . "\n";
echo count($array, 1) . "\n";

$numbers = array(1, 2, 3, 4, 5, 6);
shuffle($numbers);

print_r($numbers);
sort($numbers, SORT_NUMERIC);
print_r($numbers);
rsort($numbers, SORT_NUMERIC);
print_r($numbers);

$sample = array('q' => "Hi there\n");
extract($sample, EXTR_PREFIX_ALL, 'fromget');
print_r($fromget_q);

$fname         = "Doctor";
$sname         = "Who";
$planet        = "Gallifrey";
$system        = "Gridlock";
$constellation = "Kasterborous";

$contact = compact('fname', 'sname', 'planet', 'system', 'constellation');
print_r($contact);

$j = 23;
$temp = 'Hello';
$address = "1 old street";
$age = 64;

print_r(compact(explode(' ', 'j temp address age')));

$kevin = array('bab', 'cob', 'sob');
print_r(reset($kevin));
$item = reset($kevin);
print_r($item);
print_r(implode('++', $kevin));
