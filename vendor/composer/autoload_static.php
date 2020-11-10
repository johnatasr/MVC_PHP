<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8e87a7e0d8ad54e421dda11bf7930bf5
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MF\\' => 3,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MF\\' => 
        array (
            0 => __DIR__ . '/..' . '/MF',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8e87a7e0d8ad54e421dda11bf7930bf5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8e87a7e0d8ad54e421dda11bf7930bf5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8e87a7e0d8ad54e421dda11bf7930bf5::$classMap;

        }, null, ClassLoader::class);
    }
}
