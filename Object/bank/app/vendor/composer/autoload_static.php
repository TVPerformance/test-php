<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7faccddc59a73da8216b58534356da25
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Front\\' => 6,
        ),
        'A' => 
        array (
            'App\\DB\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Front\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'App\\DB\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7faccddc59a73da8216b58534356da25::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7faccddc59a73da8216b58534356da25::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7faccddc59a73da8216b58534356da25::$classMap;

        }, null, ClassLoader::class);
    }
}