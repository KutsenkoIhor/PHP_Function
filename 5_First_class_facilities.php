<?php
$last = function (string $str) {
    if ($str === '') {
        return null;
    } else {
        return $str[-1];
    }
};

//$last = fn(string $str) => ($str === '') ? null : $str[-1];

print_r($last(''));     // null
print_r($last('0'));    // 0
print_r($last('210'));  // 0
print_r($last('pow'));  // w
print_r($last('kids')); // s

//$x = 'dfdfs';
//print_r($x[-1]);
