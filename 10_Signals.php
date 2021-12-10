<?php

$emails = [
    'info@gmail.com',
    'info@yandex.ru',
    'info@hotmail.com',
    'mk@host.com',
    'support@hexlet.io',
    'key@yandex.ru',
    'sergey@gmail.com',
    'vovan@gmail.com',
    'vovan@hotmail.com'
];

const FREE_EMAIL_DOMAINS = [
    'gmail.com', 'yandex.ru', 'hotmail.com'
];

function getFreeDomainsCount($emails): array
{
    $NameAddDomain = array_map(fn($str) => explode("@", $str), $emails);
    $Domain = array_map(fn ($arr) => $arr[1], $NameAddDomain);
    $DomainFilter = array_filter($Domain, fn($arr) => in_array($arr, FREE_EMAIL_DOMAINS));
    $DomainFilterSort = array_values($DomainFilter);

    $spi = [];
    foreach ($DomainFilterSort as $value) {
        if (!array_key_exists($value, $spi)) {
            $spi[$value] = 1;
        } else {
            $spi[$value] += 1;
        }
    }

    return $spi;
}

print_r(getFreeDomainsCount($emails));
# Array (
#     'gmail.com' => 3
#     'yandex.ru' => 2
#     'hotmail.com' => 2
#  )