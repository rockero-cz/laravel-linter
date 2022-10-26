<?php

namespace Rockero\Linter;

use Illuminate\Support\Facades\File;
use Rockero\Linter\Commands\LintCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LinterServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('linter')
            ->hasCommand(LintCommand::class);
    }

    public function boot()
    {
        parent::boot();

        $filesToPublish = collect(File::allFiles(__DIR__.'/../stubs', true))
            ->mapWithKeys(fn ($file) => [$file->getPathname() => $this->app->basePath($file->getRelativePathname())])
            ->toArray();

        $this->publishes($filesToPublish, "{$this->package->shortName()}-config");
    }
}
