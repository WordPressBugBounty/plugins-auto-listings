<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1ba6dcb9f4bcd8faad86bb0a7492d91b
{
    public static $files = array (
        '4423a9a7b9dcbfb1adf6e69b6c55b0d3' => __DIR__ . '/..' . '/elightup/plugin-search/bootstrap.php',
        '4f6bfac5880e9e16cb1be3bf40865224' => __DIR__ . '/../..' . '/src/functions.php',
        'ca86bebd7a7adda372be9e92f0622477' => __DIR__ . '/../..' . '/src/functions-conditionals.php',
        '9ea25700a020167978a87e756a7c2e27' => __DIR__ . '/../..' . '/src/functions-enquiry.php',
        'f1a3a3fe98fece49cf4e623d21f38f45' => __DIR__ . '/../..' . '/src/functions-formatting.php',
        'f9803e00772776d3207070b363d681d3' => __DIR__ . '/../..' . '/src/functions-general.php',
        'a872b70be4f9d410707626d681964d0f' => __DIR__ . '/../..' . '/src/functions-listing.php',
        '6f04e33201b10d967d5c2d468d43af71' => __DIR__ . '/../..' . '/src/functions-sidebars.php',
        '67044878b0dc26239c83e213a6ac4e25' => __DIR__ . '/../..' . '/src/SearchForm/functions.php',
        '6b6b1f4986f46522e7c0e9ae0dca8041' => __DIR__ . '/../..' . '/src/Frontend/template-hooks.php',
        '315ebd61770793434c70b58288e3d288' => __DIR__ . '/../..' . '/src/Frontend/template-tags.php',
    );

    public static $prefixLengthsPsr4 = array (
        'e' => 
        array (
            'eLightUp\\PluginUpdater\\' => 23,
            'eLightUp\\PluginSearch\\' => 22,
        ),
        'M' => 
        array (
            'MetaBox\\Columns\\' => 16,
            'MBSP\\' => 5,
            'MBFS\\' => 5,
        ),
        'A' => 
        array (
            'AutoListings\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'eLightUp\\PluginUpdater\\' => 
        array (
            0 => __DIR__ . '/..' . '/elightup/plugin-updater/src',
        ),
        'eLightUp\\PluginSearch\\' => 
        array (
            0 => __DIR__ . '/..' . '/elightup/plugin-search/src',
        ),
        'MetaBox\\Columns\\' => 
        array (
            0 => __DIR__ . '/..' . '/meta-box/meta-box-columns/src',
        ),
        'MBSP\\' => 
        array (
            0 => __DIR__ . '/..' . '/meta-box/mb-settings-page/src',
        ),
        'MBFS\\' => 
        array (
            0 => __DIR__ . '/..' . '/meta-box/mb-frontend-submission/src',
        ),
        'AutoListings\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Gamajo_Template_Loader' => __DIR__ . '/..' . '/gamajo/template-loader/class-gamajo-template-loader.php',
        'RWMB_Backup_Field' => __DIR__ . '/..' . '/meta-box/mb-settings-page/src/BackupField.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1ba6dcb9f4bcd8faad86bb0a7492d91b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1ba6dcb9f4bcd8faad86bb0a7492d91b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1ba6dcb9f4bcd8faad86bb0a7492d91b::$classMap;

        }, null, ClassLoader::class);
    }
}
