<?php

namespace JeffersonGoncalves\Filament\Lgpd;

use JeffersonGoncalves\FilamentPluginCore\BasePackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

class LgpdServiceProvider extends BasePackageServiceProvider
{
    public static string $name = 'filament-lgpd';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasViews()
            ->hasTranslations();
    }
}
