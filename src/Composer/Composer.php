<?php

namespace Braip\WayPhp\Composer;

class Composer
{
    public static function npmInstall()
    {
        passthru('npm install');
    }
}
