<?php

function duble(array $arrey): array
{
    $l = count($arrey) * 2;
    $resultArr = [];
    for ($i = 0; $i < $l; $i++) {
        $resultArr[$i] = $arrey[intdiv($i, 2)];
    }
    return $resultArr;
}

function enlargeArrayImage(array $arr): array
{
    $vShir = array_map(fn($ar) => duble($ar), $arr);
    return duble($vShir);
}


$image = [
    ['*','*','*','*'],
    ['*',' ',' ','*'],
    ['*',' ',' ','*'],
    ['*','*','*','*']
];
// ****
// *  *
// *  *
// ****

print_r(enlargeArrayImage($image));
// ********
// ********
// **    **
// **    **
// **    **
// **    **
// ********
// ********