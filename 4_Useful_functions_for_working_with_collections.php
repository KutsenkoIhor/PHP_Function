<?php




require_once 'vendor/autoload.php';

//function slugify(string $str): string
//{
//    $andArr = [];
//    $allArr = explode(' ', $str);
//    foreach ($allArr as $value) {
//        if ($value !== '') {
//            $andArr[] = $value;
//        }
//    }
//    $endStr = implode('-',$andArr);
//    return mb_strtolower($endStr);
//}

function slugify(string $str): string
{
    $allArr = explode(' ', $str);
    $endArr = \Funct\Collection\compact($allArr);
    $endStr = implode('-',$endArr);
    return \Funct\Strings\toLower($endStr);
}


print_r(slugify('')); // ''
echo "\n";
print_r(slugify('test')); // 'test'
echo "\n";
print_r(slugify('test me')); // 'test-me'
echo "\n";
print_r(slugify('La La la LA')); // 'la-la-la-la'
echo "\n";
print_r(slugify('O la      lu')); // 'o-la-lu'
echo "\n";
print_r(slugify(' yOu   ')); // 'you'