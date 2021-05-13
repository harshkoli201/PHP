<?php

class overlo
{
    function __call($n,$a)
    {
        if($n == 'addition')
        {
            switch(count($a))
            {
                case 2:return($a[0]+$a[1]);
                case 3:return($a[0]+$a[1]+$a[2]);
            }
        }
    }
}

$o = new overlo;
echo "addition of two integer number = ",$o->addition(2,2);
echo "</br>";
echo "addition of three integer number = ",$o->addition(1,1,1);
?>