<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc495e3d59766f8e302f511a7ffaa793f
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc495e3d59766f8e302f511a7ffaa793f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc495e3d59766f8e302f511a7ffaa793f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc495e3d59766f8e302f511a7ffaa793f::$classMap;

        }, null, ClassLoader::class);
    }
}
