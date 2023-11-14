<?php
$fruits = ["mango", "banana", "apple"];
array_push($fruits,"grape");
$fruits[] = "jackfruit";
print_r($fruits);
echo 'Count ' . count($fruits) ;
var_dump(in_array("jackfruit", $fruits));

$arr1 = [1, 3, 5];
$arr2 = [4,6, 8];  
$arr3 = array_merge($arr1, $arr2);

print_r($arr3);

$person_fields = ["fName", "lName", "email"];
$person_data = ["john","doe","test@test.com"];

$p = array_combine($person_fields, $person_data);  

print_r($p);
?>
