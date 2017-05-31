<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit18363fe3882e91aa6406b29c2188884c
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Overtrue\\Pinyin\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Overtrue\\Pinyin\\' => 
        array (
            0 => __DIR__ . '/..' . '/overtrue/pinyin/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit18363fe3882e91aa6406b29c2188884c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit18363fe3882e91aa6406b29c2188884c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
