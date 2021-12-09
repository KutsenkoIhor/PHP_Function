<?php
//
//require_once 'vendor/autoload.php';
//
//use function Funct\Collection\findWhere;
//use function Funct\Collection\flattenAll;
//use function Funct\Collection\last;
//use function Funct\Collection\rest;
//use function Funct\Collection\without;
//use function Funct\Strings\camelize;
//use function Funct\Strings\contains;
//use function Funct\Strings\endsWith;
//use function Funct\Strings\slugify;
//
//
//echo last([1, 5, 7]);
//echo "\n";
//print_r(rest([5, 4, 3, 2, 1]));
//echo "\n";
//print_r(without([1, 2, 1, 0, 3, 1, 4], 0, 1)); // [2, 3, 4]
//echo "\n";
//print_r(flattenAll(['a', ['b', ['c', ['d']]]])); // ['a', 'b', 'c', 'd'])
//echo "\n";
//print_r(\Funct\Collection\union([1, 2, 3], [101, 2, 1, 10], [2, 1]));
//echo "\n";
//print_r(findWhere(
//    [
//        ['title' => 'Book of Fooos', 'author' => 'FooBar', 'year' => 1111],
//        ['title' => 'Cymbeline', 'author' => 'Shakespeare', 'year' => 1611],
//        ['title' => 'The Tempest', 'author' => 'Shakespeare', 'year' => 1611],
//        ['title' => 'Book of Foos Barrrs', 'author' => 'FooBar', 'year' => 2222],
//        ['title' => 'Still foooing', 'author' => 'FooBar', 'year' => 3333],
//        ['title' => 'Happy Foo', 'author' => 'FooBar', 'year' => 4444],
//    ],
//    ['author' => 'Shakespeare', 'year' => 1611]
//)); // ['title' => 'Cymbeline', 'author' => 'Shakespeare', 'year' => 1611])
//echo "\n";
//print_r(camelize('background-color')); // 'backgroundColor')
//echo "\n";
//var_dump(contains('PHP is one of the best languages!', 'one')); // true;
//echo "\n";
//var_dump(endsWith("hello jon", 'jonj')); // true);
//echo "\n";
//print_r(slugify('Global Thermonuclear Warfare')); // 'global-thermonuclear-warfare')
//
//$func = function () {
//    echo "hi gays!";
//};
//
//$func();
//
//$sum = function ($a, $b) {
//    print_r($a + $b);
//};
//
//$sum(1, 6);
//
//function sum($a, $b)
//{
//    $sum = function ($a, $b) {
//        return $a + $b;
//    };
//    return $sum($a, $b);
//}
//print_r(sum(1, 5));
//
//$f1 = fn() => print_r('Hexlet');
//$f1();
//echo "\n";
//$f2 = fn(int $a, int $b) => $a + $b;
//print_r($f2(4, 9));
//
//$fn = 'count';
//print_r($fn([1, 5, 7, 3, 5]));
//$fn = 'strlen';
//print_r($fn('clojure for brave')); // => 17
//
//
//$users = [
//    ['name' => 'Igor', 'age' => 19],
//    ['name' => 'Danil', 'age' => 1],
//    ['name' => 'Vovan', 'age' => 4],
//    ['name' => 'Matvey', 'age' => 16],
//];
//
//$cmp = function ($a, $b) {
//    if ($a['age'] === $b['age']) {
//        return 0;
//    }
//    return $a['age'] > $b['age'] ? 1 : -1;
//};
//
//$cmp = fn($a, $b) => $a['age'] <=> $b['age'];
//
//usort($users, $cmp);
//
//print_r($users);
//
//$users = [
//    ['name' => 'Igor', 'age' => 19],
//    ['name' => 'Danil', 'age' => 1],
//    ['name' => 'Vovan', 'age' => 4],
//    ['name' => 'Matvey', 'age' => 16],
//];
//
//$names = array_map(fn($user) => $user['name'], $users);
//
////$result = [];
////foreach ($users as ['name' => $name]) {
////    $result[] = $name;
////}
//
////$result = array_column($users, 'name');
//
////print_r($result);
//echo "\n";
//
//$numbers = [5, 7, 3];
//$newNumbers = array_map(fn($arr) => $arr **3, $numbers);
//print_r($newNumbers);
//
//echo "\n";
//
//function myMap($callback, $coll)
//{
//    $result = [];
//    foreach ($coll as $item) {
//        $result[] = $callback($item);
//    }
//}
use function Funct\Collection\flatten;
require_once 'vendor/autoload.php';

$x =[['name' => 'Mira', 'birdhday' => '1983-03-23']];
flatten($x);
print_r($x);