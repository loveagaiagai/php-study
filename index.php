<?php

function checkNumber($number)
{
    if ($number == 5) {
        throw new Exception("值不能等于5");
    }
    return $number;
}

for ($i = 0; $i < 10; $i++) {
    try {
        echo checkNumber($i) . "\r\n";
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
