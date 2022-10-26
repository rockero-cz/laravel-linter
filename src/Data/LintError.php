<?php

namespace Rockero\Linter\Data;

class LintError
{
    public function __construct(
        readonly public string $file,
        readonly public int $line,
        readonly public string $message,
    ) {
    }
}
