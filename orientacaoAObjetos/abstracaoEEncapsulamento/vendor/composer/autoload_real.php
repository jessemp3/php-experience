<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit9d0092b6583ba3760741b13c4ea7e36f
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit9d0092b6583ba3760741b13c4ea7e36f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit9d0092b6583ba3760741b13c4ea7e36f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit9d0092b6583ba3760741b13c4ea7e36f::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}