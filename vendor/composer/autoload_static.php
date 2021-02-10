<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit544022e85a3a5218f8f470ce3ead6fb2
{
    public static $prefixLengthsPsr4 = array (
        'w' => 
        array (
            'watchshop\\' => 10,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'watchshop\\' => 
        array (
            0 => __DIR__ . '/..' . '/watchshop/core',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit544022e85a3a5218f8f470ce3ead6fb2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit544022e85a3a5218f8f470ce3ead6fb2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit544022e85a3a5218f8f470ce3ead6fb2::$classMap;

        }, null, ClassLoader::class);
    }
}
