<?php

namespace JeffersonGoncalves\Filament\Lgpd\Tests\Fixtures;

use Filament\Panel;
use Filament\PanelProvider;
use JeffersonGoncalves\Filament\Lgpd\LgpdPlugin;

class TestPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->plugins([
                LgpdPlugin::make(),
            ]);
    }
}
