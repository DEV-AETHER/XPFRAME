<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite440f315f6a065c6f51576f14b7215b0
{
    public static $prefixLengthsPsr4 = array (
        'X' => 
        array (
            'XENONMC\\XPFRAME\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'XENONMC\\XPFRAME\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite440f315f6a065c6f51576f14b7215b0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite440f315f6a065c6f51576f14b7215b0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite440f315f6a065c6f51576f14b7215b0::$classMap;

        }, null, ClassLoader::class);
    }
}
