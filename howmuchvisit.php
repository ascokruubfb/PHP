<?php
$file=fopen("website.num","r");
$a=fread($file,filesize("website.num"));
echo $a;
$a++;
fclose($file);
file_put_contents("website.num",strval($a));
?>
