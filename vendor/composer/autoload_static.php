<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8f79e1299e51a19d48b6e3c15cab2a3a
{
    public static $files = array (
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
    );

    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Ramsey\\Uuid\\' => 12,
        ),
        'D' => 
        array (
            'DawidMazurek\\CleanArchitectureDemo\\' => 35,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ramsey\\Uuid\\' => 
        array (
            0 => __DIR__ . '/..' . '/ramsey/uuid/src',
        ),
        'DawidMazurek\\CleanArchitectureDemo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8f79e1299e51a19d48b6e3c15cab2a3a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8f79e1299e51a19d48b6e3c15cab2a3a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}