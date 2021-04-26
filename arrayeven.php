<?php

$a = array(1,2,3,4,5);

for($i=0;$i<count($a);$i++)
{
    if($a[$i] % 2 == 0)
    {
        @$eve = $eve+$a[$i];
    }   
    else{
        @$odd = $odd+$a[$i];
    }
}
echo "Sum of even =" .$eve."<br>";
echo "Sum of Odd =" .$odd."<br>";

?>