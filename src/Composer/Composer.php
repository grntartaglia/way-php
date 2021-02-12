<?php

namespace Braip\WayPhp\Composer;

class Composer
{
    public static function npmInstall()
    {
        $root = __DIR__.'/../..';

        if (! file_exists($nodeModules = "{$root}/node_modules")) {
            mkdir($nodeModules);
        }

        passthru("npm install --prefix {$root}");
    }
}
