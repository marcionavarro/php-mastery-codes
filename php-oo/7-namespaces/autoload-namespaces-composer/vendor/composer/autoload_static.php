<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbc8fa3bf6bbd3c282e88418ca934da31
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CodeExperts\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CodeExperts\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitbc8fa3bf6bbd3c282e88418ca934da31::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbc8fa3bf6bbd3c282e88418ca934da31::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbc8fa3bf6bbd3c282e88418ca934da31::$classMap;

        }, null, ClassLoader::class);
    }
}
