<?php

namespace Braip\WayPhp\PhpCsFixer\Fixers;

use Exception;
use PhpCsFixer\Fixer\FixerInterface;
use PhpCsFixer\Tokenizer\Tokens;
use SplFileInfo;

/**
 * Fixer for using prettier-php to fix.
 */
final class Prettier implements FixerInterface
{
    /**
     * {@inheritdoc}
     */
    public function getPriority()
    {
        // should be absolute first
        return 999;
    }

    /**
     * {@inheritdoc}
     */
    public function isCandidate(Tokens $tokens)
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function isRisky()
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function fix(SplFileInfo $file, Tokens $tokens)
    {
        if (0 < $tokens->count() && $this->isCandidate($tokens) && $this->supports($file)) {
            $this->applyFix($file, $tokens);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'Prettier/php';
    }

    /**
     * {@inheritdoc}
     */
    public function supports(SplFileInfo $file)
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    private function applyFix(SplFileInfo $file, Tokens $tokens)
    {
        $tokens->setCode($this->prettier($file->getRealPath()));
    }

    /**
     * @return string
     */
    private function prettier(string $path)
    {
        $prettier = __DIR__.'/../../../tools/prettier.js';
        $output = [];

        if (! file_exists($prettier)) {
            throw new Exception('Prettier não encontrado');
        }

        exec("node $prettier < $path", $output);

        if (! $output) {
            throw new Exception('Falha ao executar Prettier');
        }

        return implode("\n", $output);
    }
}
