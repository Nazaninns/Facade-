<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite325387181dd995310b72f93da982a1e
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
            $loader->fallbackDirsPsr4 = ComposerStaticInite325387181dd995310b72f93da982a1e::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInite325387181dd995310b72f93da982a1e::$classMap;

        }, null, ClassLoader::class);
    }
}
