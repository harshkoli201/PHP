<?php 
$str = "hello world";
echo $str,"</br>";
echo "strlen: ",strlen($str),"</br>";
echo "ucfirst: ",ucfirst($str),"</br>";
echo "lcfirst: ",lcfirst($str),"</br>";
echo "str_rev: ",strrev($str),"</br>";
echo "str_replace: ",str_replace("world","PHP",$str),"</br>";
echo "stripos: ",stripos("I love php, I love php too!","PHP"),"</br>";
$str1 = "Hello php";
echo $str1,"</br>";
echo "strcmp :",strcmp($str,$str1),"</br>";
echo "strlen: ",strlen($str),"</br>";
echo "strtolower: ",strtolower($str1),"</br>";
echo "strtoupper: ",strtoupper($str1),"</br>";
echo "ucwords: ",ucwords($str),"</br>";
echo "str_word_count: ",str_word_count("Hello php"),"</br>";
?>