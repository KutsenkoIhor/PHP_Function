<?php

function sayPrimeOrNot(float $number):string
{
//    $arrdelitel = [];
    if ($number === 1) {
        return 'yes';
    }
    return 'no';
}
print_r(sayPrimeOrNot(1.5));
