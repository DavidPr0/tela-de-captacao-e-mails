<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9f2b5efccc582d990024acb05abec1c8
{
    public static $firstCharsPsr4 = array (
        'P' => true,
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->firstCharsPsr4 = ComposerStaticInit9f2b5efccc582d990024acb05abec1c8::$firstCharsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9f2b5efccc582d990024acb05abec1c8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}