<?php
$f = "lab9.txt";
$c = file_get_contents($f);
file_put_contents($file,$c+1);
echo "count is $c";


?>