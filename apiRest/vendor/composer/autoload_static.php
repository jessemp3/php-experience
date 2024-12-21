<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf567ef0a6ec261ab314d428e1a047f95
{
    public static $prefixLengthsPsr4 = array (
        'J' =>
        array (
            'Jesse\\ApiRest\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jesse\\ApiRest\\' =>
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/vendor' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf567ef0a6ec261ab314d428e1a047f95::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf567ef0a6ec261ab314d428e1a047f95::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf567ef0a6ec261ab314d428e1a047f95::$classMap;

        }, null, ClassLoader::class);
    }
}
