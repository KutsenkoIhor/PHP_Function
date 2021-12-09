<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitedc5f21ce90e3d65bfdb1a9f895bb80b
{
    public static $files = array (
        '4ceedf97791d93203e20d2cdee63c4d8' => __DIR__ . '/..' . '/funct/funct/src/Collection.php',
        '3fa95b6de8b4ba809a4086bd187dc285' => __DIR__ . '/..' . '/funct/funct/src/General.php',
        '9a6e6879c844337a8d58143b6e0512ae' => __DIR__ . '/..' . '/funct/funct/src/Invoke.php',
        'a73a3901d9218302158239badf0be56a' => __DIR__ . '/..' . '/funct/funct/src/Object.php',
        '3fdd7195df86076e7b28f4a0e5b97dbd' => __DIR__ . '/..' . '/funct/funct/src/Strings.php',
    );

    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Funct\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Funct\\' => 
        array (
            0 => __DIR__ . '/..' . '/funct/funct/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitedc5f21ce90e3d65bfdb1a9f895bb80b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitedc5f21ce90e3d65bfdb1a9f895bb80b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitedc5f21ce90e3d65bfdb1a9f895bb80b::$classMap;

        }, null, ClassLoader::class);
    }
}
