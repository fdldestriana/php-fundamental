<?php
$name = "Agung";
var_dump($name);
var_dump(is_null($name));
var_dump(isset($name));
echo "---";
echo "\n";

$name = NULL;
var_dump($name);
var_dump(is_null($name));
echo "---";
echo "\n";

var_dump(isset($name));
unset($name);
var_dump(isset($name));