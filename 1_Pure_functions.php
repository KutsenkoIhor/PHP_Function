<?php

function ret($number)
{
    $arrdelitel = [];
    if ($number < 2) {
        return false;
    } else {
        for ($i = 2; $i <= $number; $i++) {
            if ($number % $i === 0) {
                $arrdelitel[] = $i;
            }
        }
        if (count($arrdelitel) > 1) {
            return false;
        } else {
            return true;
        }
    }
}

function sayPrimeOrNot($num)
{
    $ansver = ret($num) ? 'yes' : 'no';
    print_r($ansver);
}

sayPrimeOrNot(5);
echo "\n";
sayPrimeOrNot(13);
echo "\n";
sayPrimeOrNot(8);
echo "\n";
sayPrimeOrNot(4);
echo "\n";
sayPrimeOrNot(1);
echo "\n";
sayPrimeOrNot(0);
echo "\n";
sayPrimeOrNot(-3);
echo "\n";
sayPrimeOrNot(9);