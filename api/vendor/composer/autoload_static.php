<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit92158ff8e83082b05e01b9970b57aca8
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jerry\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jerry\\' => 
        array (
            0 => __DIR__ . '/..' . '/jerry/src',
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
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit92158ff8e83082b05e01b9970b57aca8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit92158ff8e83082b05e01b9970b57aca8::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit92158ff8e83082b05e01b9970b57aca8::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
