<?php
function add($i,$j) 
{
$add = $i + $j;
return $add;  
}
function sub($g,$h)
{
$sub = $g - $h;
return $sub;  
}
$addition = add(6,8);
$subtraction = sub(50,25);
echo " addition is $addition <br>"; 
echo " subtraction is $subtraction <br>";
function areac() 
{
$r = 5;	$area = 3.14*$r*$r;
return $area;  
}
function areal()
{
$l = 6;	$b = 10;
$areal = $l*$b;
return $areal;
 }
$circle = areac();
$rect = areal();
echo " area of circle is $circle <br>"; 
echo " area of retangle is $rect"; 
?>