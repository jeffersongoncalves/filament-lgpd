<?php

namespace JeffersonGoncalves\Filament\Lgpd\Pages;

use BackedEnum;
use Filament\Pages\Page;
use Filament\Panel;
use JeffersonGoncalves\Filament\Lgpd\LgpdPlugin;
use JeffersonGoncalves\Lgpd\Lgpd;

/**
 * Read-only view of laravel-lgpd's inventory: one card per model, one row per declared column.
 */
class PersonalDataInventory extends Page
{
    protected string $view = 'filament-lgpd::pages.inventory';

    /**
     * @return array<class-string, list<array<string, mixed>>>
     */
    public function getInventory(): array
    {
        $models = [];

        foreach (app(Lgpd::class)->inventory() as $row) {
            $models[$row['model']][] = $row;
        }

        return $models;
    }

    public static function label(string $group, ?string $value): ?string
    {
        return $value === null ? null : __("filament-lgpd::filament-lgpd.{$group}.{$value}");
    }

    public function getTitle(): string
    {
        return __('filament-lgpd::filament-lgpd.page.title');
    }

    public static function getNavigationLabel(): string
    {
        return __('filament-lgpd::filament-lgpd.page.navigation_label');
    }

    public static function getNavigationGroup(): ?string
    {
        return LgpdPlugin::get()->getNavigationGroup();
    }

    public static function getNavigationSort(): ?int
    {
        return LgpdPlugin::get()->getNavigationSort();
    }

    public static function getNavigationIcon(): string|BackedEnum|null
    {
        return LgpdPlugin::get()->getNavigationIcon();
    }

    public static function getSlug(?Panel $panel = null): string
    {
        return LgpdPlugin::get()->getSlug();
    }
}
