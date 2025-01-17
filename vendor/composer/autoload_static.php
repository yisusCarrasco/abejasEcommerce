<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf0eb34dc20cebd8235495c54d3eda892
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Enrique\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Enrique\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf0eb34dc20cebd8235495c54d3eda892::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf0eb34dc20cebd8235495c54d3eda892::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf0eb34dc20cebd8235495c54d3eda892::$classMap;

        }, null, ClassLoader::class);
    }
}
