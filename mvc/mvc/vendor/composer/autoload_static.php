<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit79317f5e3cd2d774698064a1acafe231
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit79317f5e3cd2d774698064a1acafe231::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit79317f5e3cd2d774698064a1acafe231::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit79317f5e3cd2d774698064a1acafe231::$classMap;

        }, null, ClassLoader::class);
    }
}
