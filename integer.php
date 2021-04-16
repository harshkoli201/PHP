<?php
$arr = array("John","Jacob","Tom");

$arr2 = array(10,20,30);

foreach( $arr as $value ){
    echo "<br> $value <br>";
}

echo "<br>";
print_r($arr);
echo "<br>";
echo "<br>";
var_dump($arr);

echo "<br>";
echo "<br>";


var_dump($arr2);

foreach( $arr2 as $value ){
    echo "<br> $value";
}

?>