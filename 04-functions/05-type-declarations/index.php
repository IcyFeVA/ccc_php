<?php
declare(strict_types=1);

function getSum(int $a, int $b) : int {
    return $a + $b;
}

$result = getSum(10, 45);

// echo $result;


function greeting(string $name) : string {
    return "Hello " . $name;
}

// echo greeting("Jackie Chan");


function noReturnHere(string $name) : void {
    echo $name;
}

noReturnHere('Charles');

