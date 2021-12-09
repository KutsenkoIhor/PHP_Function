<?php

use function Funct\Collection\flatten;
require_once 'vendor/autoload.php';

$users = [
    ['name' => 'Tirion', 'friends' => [
        ['name' => 'Mira', 'gender' => 'female'],
        ['name' => 'Ramsey', 'gender' => 'male']
    ]],
    ['name' => 'Bronn', 'friends' => []],
    ['name' => 'Sam', 'friends' => [
        ['name' => 'Aria', 'gender' => 'female'],
        ['name' => 'Keit', 'gender' => 'female']
    ]],
    ['name' => 'Rob', 'friends' => [
        ['name' => 'Taywin', 'gender' => 'male']
    ]],
];

function getGirlFriends(array $users): array
{
    $filtArr = array_map(fn($arr) => $arr['friends'], $users);
    $flatArr = flatten($filtArr);
    $girlFrend =  array_filter($flatArr, fn($arr) => $arr['gender'] === 'female');
    return array_values($girlFrend);
}


print_r(getGirlFriends($users));
# Array (
#     ['name' => 'Mira', 'gender' => 'female'],
#     ['name' => 'Aria', 'gender' => 'female'],
#     ['name' => 'Keit', 'gender' => 'female']
# )