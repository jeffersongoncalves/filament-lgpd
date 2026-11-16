<?php

namespace JeffersonGoncalves\Filament\Lgpd;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LgpdServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-lgpd')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigrations();
    }
}
