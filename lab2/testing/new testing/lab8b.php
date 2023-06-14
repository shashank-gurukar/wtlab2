<?php
function largest($n1,$n2,$n3){
    return max($n1,$n2,$n3);
}

$a1=intval($argv[1]);
$a2=intval($argv[2]);
$a3=intval($argv[3]);


$n = largest($a1,$a2,$a3);
echo "LArgest number is ".$n."\n";



?>