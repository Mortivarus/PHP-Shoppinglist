<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit560bf3b3d579e043de4f7d16c737d819
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'Request' => __DIR__ . '/../..' . '/core/Request.php',
        'Router' => __DIR__ . '/../..' . '/core/Router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit560bf3b3d579e043de4f7d16c737d819::$classMap;

        }, null, ClassLoader::class);
    }
}
