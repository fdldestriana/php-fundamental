<?php

// && / and
var_dump(true && true); // --> true
var_dump(true && false); // --> false
var_dump(false && true); // --> false
var_dump(false && false); // --> false
echo "\n";

// || / or
var_dump(true || true); // --> true
var_dump(true || false); // --> true
var_dump(false || true); // --> true
var_dump(false || false); // --> false
echo "\n";

// ! !!
var_dump(!true); // --> false
var_dump(!false); // --> true
var_dump(!!true); // --> true
var_dump(!!false); // --> false
var_dump(!!!true); // --> false
var_dump(!!!false); // --> true
echo "\n";

// xor
var_dump(true xor true); // --> false
var_dump(true xor false); // --> true
var_dump(false xor true); // --> true
var_dump(false xor false); // --> false
echo "\n";