<?php

function add($a, $b) {
    return $a + $b;
}


function isEven($number) {
    return $number % 2 === 0;
}

echo    "isEven(4): " . (isEven(4) ? 'true' : 'false') . "\n    ";
?>

