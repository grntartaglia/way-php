<?php

namespace Braip\WayPhp\PhpCsFixer;

use PhpCsFixer;
use PhpCsFixer\Finder;

class Config extends PhpCsFixer\Config
{
    public function __construct(Finder $finder = null)
    {
        parent::__construct();

        $finder = $finder ?? Finder::create()->in(__DIR__);

        $this->setFinder($finder);
    }
}
