<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit82a446a604eafda1e46dd2614bf1112e
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit82a446a604eafda1e46dd2614bf1112e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit82a446a604eafda1e46dd2614bf1112e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit82a446a604eafda1e46dd2614bf1112e::$classMap;

        }, null, ClassLoader::class);
    }
}
