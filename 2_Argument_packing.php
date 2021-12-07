<?php

function average(...$number)
{
    if ($number === []) {
        return null;
    } else {
        return array_sum($number) / count($number);
    }
}

print_r(average(0)); // 0
echo "\n";
print_r(average(0, 10)); // 5
echo "\n";
print_r(average(-3, 4, 2, 10)); // 3.25
echo "\n";
//print_r(average()); // null