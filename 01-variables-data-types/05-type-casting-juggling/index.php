<?php

$a = 10;
$b = 5;
$c = '8';
(int) $d = '10';

$result = $a + $b + $c;

$result = $c + $a + $b;

$result = $a == $d;

//$b = $b + $a;
$b %= $a;

$result = 2028 % 4;   // modulus


var_dump($result);