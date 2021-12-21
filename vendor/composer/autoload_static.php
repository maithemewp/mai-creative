<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb4e00c11e78086506b521bf449a90d60
{
    public static $files = array (
        '20716b7470cda7cd561f4000f723e024' => __DIR__ . '/..' . '/maithemewp/mai-installer/mai-installer.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'WP_Dependency_Installer' => __DIR__ . '/..' . '/afragen/wp-dependency-installer/wp-dependency-installer.php',
        'WP_Dependency_Installer_Skin' => __DIR__ . '/..' . '/afragen/wp-dependency-installer/wp-dependency-installer-skin.php',
        'WP_Dismiss_Notice' => __DIR__ . '/..' . '/afragen/wp-dismiss-notice/wp-dismiss-notice.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitb4e00c11e78086506b521bf449a90d60::$classMap;

        }, null, ClassLoader::class);
    }
}
