<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbb4629f8b4fb2e2f54843d49b8f9f8ed
{
    public static $files = array (
        'c65d09b6820da036953a371c8c73a9b1' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/polyfills.php',
    );

    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Facebook\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Facebook\\' => 
        array (
            0 => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbb4629f8b4fb2e2f54843d49b8f9f8ed::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbb4629f8b4fb2e2f54843d49b8f9f8ed::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
