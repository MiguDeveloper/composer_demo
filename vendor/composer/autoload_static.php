<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit36177bd95d3dda5f473d7edafc952846
{
    public static $files = array (
        '2371fe58591751a9b725c6706865644e' => __DIR__ . '/..' . '/lichtner/fluentpdo/FluentPDO/FluentPDO.php',
    );

    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit36177bd95d3dda5f473d7edafc952846::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit36177bd95d3dda5f473d7edafc952846::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
