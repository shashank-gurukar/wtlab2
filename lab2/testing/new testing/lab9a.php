<?php
$name = $_GET['name'];
$greet = array("hi","fuck u","gtfo");
$rand = array_rand($greet);
$msg= $greet[$rand];

echo "$msg $name";


?>