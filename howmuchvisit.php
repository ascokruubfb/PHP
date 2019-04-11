<?php
$w = fopen("a.txt","a");
fwrite($w,"a");
echo "本站访问次数为: " . filesize("a.txt");
fclose($w);
?>
