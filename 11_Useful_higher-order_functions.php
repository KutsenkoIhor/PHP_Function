<?php

require_once 'vendor/autoload.php';
use Funct\Collection;

$users = [
    ['name' => 'Tirion', 'friends' => [
        ['name' => 'Mira', 'gender' => 'female']
    ]],
    ['name' => 'Sam', 'friends' => [
        ['name' => 'Aria', 'gender' => 'female'],
        ['name' => 'Keit', 'gender' => 'female'],
        ['name' => 'Tanisha', 'gender' => 'female']
    ]],
    ['name' => 'Bronn', 'friends' => [
        ['name' => 'Taywin', 'gender' => 'male']
    ]],
    ['name' => 'Rob', 'friends' => [
        ['name' => 'Taywin', 'gender' => 'male'],
        ['name' => 'Keit', 'gender' => 'female'],
        ['name' => 'Ramsey', 'gender' => 'male']
    ]],
];

function getManWithLeastFriends($users)
{
    if ($users === []) {
        return null;
    } else {
        $countFrends = array_map(fn($user) => ['name' => $user['name'], 'friends' => count($user['friends'])], $users);
        $UserMinFrends = Collection\minValue($countFrends, function ($item) {
            return $item['friends'];
        });
        $filterUser = array_filter($users, fn($us) => $us['name'] === $UserMinFrends['name']);
        return array_values($filterUser)[0];
    }
}

print_r(getManWithLeastFriends($users));
// => ['name' => 'Keit', 'friends' => []];