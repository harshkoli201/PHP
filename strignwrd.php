<?php
 $s = 'My name is harsh';
 $i = 0;
 $a = 1;
 for($i=0; @$s[$i] != NULL; $i++)
  {
      if($s[$i] == ' ')
      {
        $a++;
      }
  }
    echo "Words in String = " , $a;

?>