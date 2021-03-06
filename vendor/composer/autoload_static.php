<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit261ec1142e3e04f810228c8be39f31ab
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pcode\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pcode\\' => 
        array (
            0 => __DIR__ . '/..' . '/patrickchagas21/php-classes/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit261ec1142e3e04f810228c8be39f31ab::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit261ec1142e3e04f810228c8be39f31ab::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit261ec1142e3e04f810228c8be39f31ab::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
