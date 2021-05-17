<?php
class clonee{
    public $x,$y,$z;

}
$obj = new clonee();
$clone = clone $obj;
$obj->x="Hello";
$obj->y="World";
$obj->z="How";
$clone->x="are";
$clone->y="you";
$clone->z="doing?";
echo "$obj->x $obj->y </br> $obj->z ";
echo "$clone->x $clone->y $clone->z";



?>