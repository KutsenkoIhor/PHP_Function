<?php
//////
//////require_once 'vendor/autoload.php';
//////
//////use function Funct\Collection\findWhere;
//////use function Funct\Collection\flattenAll;
//////use function Funct\Collection\last;
//////use function Funct\Collection\rest;
//////use function Funct\Collection\without;
//////use function Funct\Strings\camelize;
//////use function Funct\Strings\contains;
//////use function Funct\Strings\endsWith;
//////use function Funct\Strings\slugify;
//////
//////
//////echo last([1, 5, 7]);
//////echo "\n";
//////print_r(rest([5, 4, 3, 2, 1]));
//////echo "\n";
//////print_r(without([1, 2, 1, 0, 3, 1, 4], 0, 1)); // [2, 3, 4]
//////echo "\n";
//////print_r(flattenAll(['a', ['b', ['c', ['d']]]])); // ['a', 'b', 'c', 'd'])
//////echo "\n";
//////print_r(\Funct\Collection\union([1, 2, 3], [101, 2, 1, 10], [2, 1]));
//////echo "\n";
//////print_r(findWhere(
//////    [
//////        ['title' => 'Book of Fooos', 'author' => 'FooBar', 'year' => 1111],
//////        ['title' => 'Cymbeline', 'author' => 'Shakespeare', 'year' => 1611],
//////        ['title' => 'The Tempest', 'author' => 'Shakespeare', 'year' => 1611],
//////        ['title' => 'Book of Foos Barrrs', 'author' => 'FooBar', 'year' => 2222],
//////        ['title' => 'Still foooing', 'author' => 'FooBar', 'year' => 3333],
//////        ['title' => 'Happy Foo', 'author' => 'FooBar', 'year' => 4444],
//////    ],
//////    ['author' => 'Shakespeare', 'year' => 1611]
//////)); // ['title' => 'Cymbeline', 'author' => 'Shakespeare', 'year' => 1611])
//////echo "\n";
//////print_r(camelize('background-color')); // 'backgroundColor')
//////echo "\n";
//////var_dump(contains('PHP is one of the best languages!', 'one')); // true;
//////echo "\n";
//////var_dump(endsWith("hello jon", 'jonj')); // true);
//////echo "\n";
//////print_r(slugify('Global Thermonuclear Warfare')); // 'global-thermonuclear-warfare')
//////
//////$func = function () {
//////    echo "hi gays!";
//////};
//////
//////$func();
//////
//////$sum = function ($a, $b) {
//////    print_r($a + $b);
//////};
//////
//////$sum(1, 6);
//////
//////function sum($a, $b)
//////{
//////    $sum = function ($a, $b) {
//////        return $a + $b;
//////    };
//////    return $sum($a, $b);
//////}
//////print_r(sum(1, 5));
//////
//////$f1 = fn() => print_r('Hexlet');
//////$f1();
//////echo "\n";
//////$f2 = fn(int $a, int $b) => $a + $b;
//////print_r($f2(4, 9));
//////
//////$fn = 'count';
//////print_r($fn([1, 5, 7, 3, 5]));
//////$fn = 'strlen';
//////print_r($fn('clojure for brave')); // => 17
//////
//////
//////$users = [
//////    ['name' => 'Igor', 'age' => 19],
//////    ['name' => 'Danil', 'age' => 1],
//////    ['name' => 'Vovan', 'age' => 4],
//////    ['name' => 'Matvey', 'age' => 16],
//////];
//////
//////$cmp = function ($a, $b) {
//////    if ($a['age'] === $b['age']) {
//////        return 0;
//////    }
//////    return $a['age'] > $b['age'] ? 1 : -1;
//////};
//////
//////$cmp = fn($a, $b) => $a['age'] <=> $b['age'];
//////
//////usort($users, $cmp);
//////
//////print_r($users);
//////
//////$users = [
//////    ['name' => 'Igor', 'age' => 19],
//////    ['name' => 'Danil', 'age' => 1],
//////    ['name' => 'Vovan', 'age' => 4],
//////    ['name' => 'Matvey', 'age' => 16],
//////];
//////
//////$names = array_map(fn($user) => $user['name'], $users);
//////
////////$result = [];
////////foreach ($users as ['name' => $name]) {
////////    $result[] = $name;
////////}
//////
////////$result = array_column($users, 'name');
//////
////////print_r($result);
//////echo "\n";
//////
//////$numbers = [5, 7, 3];
//////$newNumbers = array_map(fn($arr) => $arr **3, $numbers);
//////print_r($newNumbers);
//////
//////echo "\n";
//////
//////function myMap($callback, $coll)
//////{
//////    $result = [];
//////    foreach ($coll as $item) {
//////        $result[] = $callback($item);
//////    }
//////}
////use function Funct\Collection\flatten;
////require_once 'vendor/autoload.php';
////
////$x = [1, ['name' => 'Mira', 'birdhday' => '1983-03-23']];
////
//////flatten($x, 3);
////print_r(flatten($x, 3));
////
////print_r(flatten(['a', ['b', 'f', ['c', ['d']]]], 3));
////
////$users = [
////    ['name' => 'Igor', 'age' => 19],
////    ['name' => 'Danil', 'age' => 1],
////    ['name' => 'Vovan', 'age' => 4],
////    ['name' => 'Matvey', 'age' => 16],
////];
////
//////$result = [];
//////foreach ($users as $user) {
//////    if ($user['age'] > 10) {
//////        $result[] = $user;
//////    }
//////}
//////print_r($result);
////
////$filtereduser = array_filter($users, fn($user) => $user['age'] > 10);
////print_r($filtereduser);
//
//$x =['name' => 'Tirion', 'friends' => [ ['name' => 'Mira', 'gender' => 'female'],['name' => 'Ramsey', 'gender' => 'male'] ]];
//print_r($x['friends']);

//$users = [
//    ['name' => 'Igor', 'age' => 19],
//    ['name' => 'Danil', 'age' => 4],
//    ['name' => 'Vovan', 'age' => 4],
//    ['name' => 'Matvey', 'age' => 16],
//];
//
////$older = $users[0];
////foreach ($users as $user) {
////    if($user['age'] > $older['age']) {
////        $older = $user;
////    }
////}
////print_r($older);
//
//
//$oldest = array_reduce($users, function($acc, $user) {
//    return $user['age'] > $acc['age'] ? $user : $acc;
//}, $users[0]);
//print_r($oldest);

//---------------------------------------------
//$usersByAge = [];
//foreach ($users as $user) {
//    $usersByAge[$user['age']][] = $user['name'];
//}
//print_r($usersByAge);

//$useByAg = array_reduce($users, function ($acc, $user) {
//    $acc[$user['age']][] = $user['name'];
//    return $acc;
//}, []);
//print_r($useByAg);

//    $t = '2012-11-03';
//    $d = strtotime($t);
//    $dd = date('Y', strtotime('2012-11-03'));
//    echo $dd;


require_once 'vendor/autoload.php';

[$first, $second] = Funct\Collection\partition([1, 2, 3, 4, 5, 6, 7, 8, 9], function ($num) {
    return $num % 2 === 0;
});

//print_r($first);
//print_r($second);

var_dump(Funct\Collection\every([true, 1, null, 'yes']));
var_dump(Funct\Collection\every([true, 1, 'yes']));
var_dump(Funct\Collection\every([2, 6, 4], function ($value) {
    return ($value % 2) === 0;
}));

print_r(Funct\Collection\groupBy([1.3, 2.1, 5.8], function ($num) {
    return floor($num);
}));

print_r(Funct\Collection\minValue(
    [
        10 => [
            'title' => 'a',
            'size' => 6
        ],
        20 => [
            'title' => 'b',
            'size' => 2
        ],
        30 => [
            'title' => 'c',
            'size' => 3
        ],
        40 => [
            'title' => 'd',
            'size' => 1
        ],
    ],
    function ($item) {
        return $item['title'];
    }
));


function without(array $items, $value)
{
    $filtered = array_filter($items, function ($item) use ($value) {
        return $item !== $value;
    });
    return array_values($filtered);
}

without([3, 4, 10, 4, 'true'], 4); // [3, 10, 'true']


$numbers = [10, 20, 52, 105, 56, 89, 96];
$max = $numbers[0];
foreach ($numbers as $value) {
    if ($max < $value) {
        $max = $value;
    }
}
print_r($max);
print_r("\n");

function factorial($number)
{
    if ($number <= 1) {
        return 1;
    } else {
        return $number * factorial($number - 1);
    }
}
print_r(factorial(4));
