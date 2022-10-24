<?php
$age = false;
echo gettype($age);

$age = (integer) $age;
echo gettype($age);
echo "$age";