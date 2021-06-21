<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6994ddeae5f925c3ad1e3a57b7deabbf
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Src\\Model\\' => 10,
            'Src\\Database\\' => 13,
            'Src\\Controller\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Src\\Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/model',
        ),
        'Src\\Database\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/database',
        ),
        'Src\\Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/controller',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6994ddeae5f925c3ad1e3a57b7deabbf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6994ddeae5f925c3ad1e3a57b7deabbf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6994ddeae5f925c3ad1e3a57b7deabbf::$classMap;

        }, null, ClassLoader::class);
    }
}