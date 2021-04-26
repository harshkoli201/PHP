<?php

$n = array("Tip","zip","lip","pip");
echo "Using FOR Each <br>";
foreach($n as $v){
    echo $v,"</br>";
}
echo "<br>";
echo "Using FOR <br>";
for($i=0; $i < count($n) ;$i++)
{
    echo $n[$i], "<br>";
}

?>