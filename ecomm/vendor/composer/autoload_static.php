<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbe7d5135a3e67ba120f7094e2708e91d
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbe7d5135a3e67ba120f7094e2708e91d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbe7d5135a3e67ba120f7094e2708e91d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
