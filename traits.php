<?php

trait hell1
{
    public function Helloworld()
    {
            echo "</br> Hello World";
    }
}
trait hell2
{
    public function Byeworld()
    {
            echo "</br> Byee World";
    }
}

class A
{
    use hell1;
    use hell2;
    
}

$obj =new A();
$obj -> helloworld();
$obj -> Byeworld();



?>