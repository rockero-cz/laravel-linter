<?php

namespace Rockero\Linter\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Rockero\Linter\LinterServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app): array
    {
        return [
            LinterServiceProvider::class,
        ];
    }
}
