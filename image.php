<?php

$img = imagecreate(500,300);

$imgcolor = imagecolorallocate($img,0,0,0);

$ellipse = imagecolorallocate($img, 120, 50, 70);
imagefilledellipse($img, 225, 150, 400, 250,$ellipse);

header("content-type:image/jpeg");
imagejpeg($img);
?>