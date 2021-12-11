<?php


function without(array $arr, ...$arr2): array
{
    foreach ($arr2 as $val) {
        $arrFilte = array_filter($arr, function ($ar) use ($val) {
            return $ar !== $val;
        });
        $arr = $arrFilte;
    }
    return array_values($arr);
}

print_r(without([3, 4, 10, 4, 'true'], 4)); // [3, 10, 'true']
print_r(without(['3', 2], 0, 5, 11)); // ['3', 2]
print_r(without(['wow', 3, 4, 10, 4, 'true'], null, 4)); // ['wow', 3, 10, 'true']