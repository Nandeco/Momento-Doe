<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit06e07c9bcbe09ef82f8ba440a981efdb
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Source',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit06e07c9bcbe09ef82f8ba440a981efdb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit06e07c9bcbe09ef82f8ba440a981efdb::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}