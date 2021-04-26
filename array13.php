<?php

$a = array("One"=>1, "Two"=>2, "Three"=>3, "Seventeen"=>17);
foreach($a as $v)
{
    echo "Current value of \$a " ,  $v ,"<br>";

}   

$t = 0; 
foreach($a as $v)
{
    echo "\$a[$t] => $v <br>";
    $t++;
}

foreach($a as $i => $v)
{
    echo "\$a[$i] => $v <br> ";
}


?>