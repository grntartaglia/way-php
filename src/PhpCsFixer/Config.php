<?php

namespace Braip\WayPhp\PhpCsFixer;

use Braip\WayPhp\PhpCsFixer\Fixers\Prettier;
use PhpCsFixer;

class Config extends PhpCsFixer\Config
{
    /**
     * @param \PhpCsFixer\Finder $finder
     */
    public function __construct(PhpCsFixer\Finder $finder = null)
    {
        parent::__construct();

        $this->setFinder($finder)
            ->registerCustomFixers([new Prettier()])
            ->setRiskyAllowed(true)
            ->setRules(include __DIR__.'/rules.php');
    }
}
