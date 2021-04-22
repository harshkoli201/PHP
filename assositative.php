<?php
// Define array
$age = array("A"=>20, "B"=>14, "C"=>45, "D"=>35);
 

echo ("kshort ");
ksort($age);
print_r($age);
echo "<br>";

echo ("ashort ");
asort($age);
print_r($age);
echo "<br>";


?>