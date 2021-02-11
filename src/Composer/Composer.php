<?php

namespace Braip\WayPhp\Composer;

class Composer
{
    public static function postInstall()
    {
        passthru('npm install');
    }
}
