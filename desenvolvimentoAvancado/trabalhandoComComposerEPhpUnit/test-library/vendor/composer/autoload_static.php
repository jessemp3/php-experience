<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8d33668431622c8cc7fa7848c58b5a16
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wead\\DigitalCep\\' => 16,
        ),
        'J' => 
        array (
            'Jesse\\TestLibrary\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wead\\DigitalCep\\' => 
        array (
            0 => __DIR__ . '/..' . '/jessemkv/projeto-cep/src',
        ),
        'Jesse\\TestLibrary\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Search' => 
            array (
                0 => __DIR__ . '/..' . '/jessemkv/projeto-cep/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8d33668431622c8cc7fa7848c58b5a16::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8d33668431622c8cc7fa7848c58b5a16::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit8d33668431622c8cc7fa7848c58b5a16::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit8d33668431622c8cc7fa7848c58b5a16::$classMap;

        }, null, ClassLoader::class);
    }
}
