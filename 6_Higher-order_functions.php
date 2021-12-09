<?php
require_once 'vendor/autoload.php';
use function Funct\Collection\firstN;

$users = [
    ['name' => 'Tirion', 'birthday' => '1988-11-19'],
    ['name' => 'Sam', 'birthday' => '1999-11-22'],
    ['name' => 'Rob', 'birthday' => '1975-01-11'],
    ['name' => 'Sansa', 'birthday' => '2001-03-20'],
    ['name' => 'Tisha', 'birthday' => '1992-02-27']
];


function takeOldest (array $users, $count = 1): array
{
    $arr = function ($a, $b) {
        if ($a['birthday'] === $b['birthday']) {
            return 0;
        }
        return $a['birthday'] > $b['birthday'] ? 1 : -1;
    };

    usort($users, $arr);
    return firstN($users, $count);
}

print_r(takeOldest($users, 4));
# Array (
#     ['name' => 'Rob', 'birthday' => '1975-01-11']
# )