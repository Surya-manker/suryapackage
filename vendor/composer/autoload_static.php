<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit70020d40dfd0f646717760bc64d65bee
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Vendor\\Suryadev\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Vendor\\Suryadev\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit70020d40dfd0f646717760bc64d65bee::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit70020d40dfd0f646717760bc64d65bee::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit70020d40dfd0f646717760bc64d65bee::$classMap;

        }, null, ClassLoader::class);
    }
}
