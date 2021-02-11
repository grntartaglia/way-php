<?php

namespace Braip\WayPhp\PhpCsFixer\Finders;

use PhpCsFixer\Finder;

class LaravelFinder extends Finder
{
    /** @var string */
    protected $projectPath;

    /**
     * @param string $projectPath
     */
    public function __construct($projectPath)
    {
        $this->projectPath = $projectPath;

        $this->in($this->dirs())
            ->name('*.php')
            ->notName('*.blade.php')
            ->ignoreDotFiles(true)
            ->ignoreVCS(true);
    }

    /**
     * @return array
     */
    protected function dirs()
    {
        return [
            $this->projectPath.'/app',
            $this->projectPath.'/config',
            $this->projectPath.'/database',
            $this->projectPath.'/resources',
            $this->projectPath.'/routes',
        ];
    }
}
