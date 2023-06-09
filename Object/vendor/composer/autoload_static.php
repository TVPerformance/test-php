<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit75839687de19df68303f8382c158871e
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInit75839687de19df68303f8382c158871e::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInit75839687de19df68303f8382c158871e::$classMap;

        }, null, ClassLoader::class);
    }
}
