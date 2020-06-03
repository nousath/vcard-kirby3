<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb49ea2a1bfc0057aeb422da2d9a43b2c
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kirby\\' => 6,
        ),
        'J' => 
        array (
            'JeroenDesloovere\\VCard\\' => 23,
        ),
        'B' => 
        array (
            'Behat\\Transliterator\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kirby\\' => 
        array (
            0 => __DIR__ . '/..' . '/getkirby/composer-installer/src',
        ),
        'JeroenDesloovere\\VCard\\' => 
        array (
            0 => __DIR__ . '/..' . '/jeroendesloovere/vcard/src',
        ),
        'Behat\\Transliterator\\' => 
        array (
            0 => __DIR__ . '/..' . '/behat/transliterator/src/Behat/Transliterator',
        ),
    );

    public static $classMap = array (
        'Behat\\Transliterator\\SyncTool' => __DIR__ . '/..' . '/behat/transliterator/src/Behat/Transliterator/SyncTool.php',
        'Behat\\Transliterator\\Transliterator' => __DIR__ . '/..' . '/behat/transliterator/src/Behat/Transliterator/Transliterator.php',
        'JeroenDesloovere\\VCard\\VCard' => __DIR__ . '/..' . '/jeroendesloovere/vcard/src/VCard.php',
        'JeroenDesloovere\\VCard\\VCardException' => __DIR__ . '/..' . '/jeroendesloovere/vcard/src/VCardException.php',
        'JeroenDesloovere\\VCard\\VCardParser' => __DIR__ . '/..' . '/jeroendesloovere/vcard/src/VCardParser.php',
        'Kirby\\ComposerInstaller\\CmsInstaller' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/CmsInstaller.php',
        'Kirby\\ComposerInstaller\\Installer' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/Installer.php',
        'Kirby\\ComposerInstaller\\Plugin' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/Plugin.php',
        'Kirby\\ComposerInstaller\\PluginInstaller' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/PluginInstaller.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb49ea2a1bfc0057aeb422da2d9a43b2c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb49ea2a1bfc0057aeb422da2d9a43b2c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb49ea2a1bfc0057aeb422da2d9a43b2c::$classMap;

        }, null, ClassLoader::class);
    }
}
