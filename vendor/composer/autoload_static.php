<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0870e7e9c6fbd54f531ba01b0a033265
{
    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit0870e7e9c6fbd54f531ba01b0a033265::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit0870e7e9c6fbd54f531ba01b0a033265::$classMap;

        }, null, ClassLoader::class);
    }
}
