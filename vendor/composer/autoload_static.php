<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc0e38a31e83f1ac113919c735bb2b999
{
    public static $files = array (
        'def43f6c87e4f8dfd0c9e1b1bab14fe8' => __DIR__ . '/..' . '/symfony/polyfill-iconv/bootstrap.php',
        '8825ede83f2f289127722d4e842cf7e8' => __DIR__ . '/..' . '/symfony/polyfill-intl-grapheme/bootstrap.php',
        'e69f7f6ee287b969198c3c9d6777bd38' => __DIR__ . '/..' . '/symfony/polyfill-intl-normalizer/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '25072dd6e2470089de65ae7bf11d3109' => __DIR__ . '/..' . '/symfony/polyfill-php72/bootstrap.php',
        'b46ad4fe52f4d1899a2951c7e6ea56b0' => __DIR__ . '/..' . '/voku/portable-utf8/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'v' => 
        array (
            'voku\\tests\\' => 11,
            'voku\\helper\\' => 12,
            'voku\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Php72\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Intl\\Normalizer\\' => 33,
            'Symfony\\Polyfill\\Intl\\Grapheme\\' => 31,
            'Symfony\\Polyfill\\Iconv\\' => 23,
            'Symfony\\Component\\CssSelector\\' => 30,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'voku\\tests\\' => 
        array (
            0 => __DIR__ . '/..' . '/voku/portable-ascii/tests',
            1 => __DIR__ . '/..' . '/voku/portable-utf8/tests',
        ),
        'voku\\helper\\' => 
        array (
            0 => __DIR__ . '/..' . '/voku/simple_html_dom/src/voku/helper',
        ),
        'voku\\' => 
        array (
            0 => __DIR__ . '/..' . '/voku/portable-ascii/src/voku',
            1 => __DIR__ . '/..' . '/voku/portable-utf8/src/voku',
        ),
        'Symfony\\Polyfill\\Php72\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php72',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Intl\\Normalizer\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-intl-normalizer',
        ),
        'Symfony\\Polyfill\\Intl\\Grapheme\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-intl-grapheme',
        ),
        'Symfony\\Polyfill\\Iconv\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-iconv',
        ),
        'Symfony\\Component\\CssSelector\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/css-selector',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Normalizer' => __DIR__ . '/..' . '/symfony/polyfill-intl-normalizer/Resources/stubs/Normalizer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc0e38a31e83f1ac113919c735bb2b999::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc0e38a31e83f1ac113919c735bb2b999::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc0e38a31e83f1ac113919c735bb2b999::$classMap;

        }, null, ClassLoader::class);
    }
}
