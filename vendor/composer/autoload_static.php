<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit817d349c296896e89bfcafa8edd919c9
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Projetophp\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Projetophp\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit817d349c296896e89bfcafa8edd919c9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit817d349c296896e89bfcafa8edd919c9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit817d349c296896e89bfcafa8edd919c9::$classMap;

        }, null, ClassLoader::class);
    }
}
