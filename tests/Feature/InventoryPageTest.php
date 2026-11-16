<?php

use JeffersonGoncalves\Filament\Lgpd\LgpdPlugin;
use JeffersonGoncalves\Filament\Lgpd\Pages\PersonalDataInventory;
use JeffersonGoncalves\Filament\Lgpd\Tests\Fixtures\TestUser;
use Livewire\Livewire;

beforeEach(function () {
    $this->actingAs(TestUser::create(['name' => 'Admin', 'email' => 'admin@example.com']));
});

it('lists every declared column grouped by model', function () {
    Livewire::test(PersonalDataInventory::class)
        ->assertSuccessful()
        ->assertSee('Personal data inventory')
        ->assertSee('TestUser')
        ->assertSee('email')
        ->assertSee('Account login')
        ->assertSee('Contract (art. 7, V)')
        ->assertSee('5 years')
        ->assertSee('Hash')
        ->assertSee('Sensitive');
});

it('flags columns without a legal basis', function () {
    Livewire::test(PersonalDataInventory::class)
        ->assertSee('Not declared');
});

it('explains how to register models when the inventory is empty', function () {
    config()->set('lgpd.models', []);

    Livewire::test(PersonalDataInventory::class)
        ->assertSee('No models registered');
});

it('is translated to Brazilian Portuguese', function () {
    app()->setLocale('pt_BR');

    Livewire::test(PersonalDataInventory::class)
        ->assertSee('Inventário de dados pessoais')
        ->assertSee('Execução de contrato (art. 7º, V)')
        ->assertSee('Sensível');
});

it('applies the fluent plugin options', function () {
    LgpdPlugin::get()->navigationGroup('LGPD')->navigationSort(3)->slug('inventory');

    expect(PersonalDataInventory::getNavigationGroup())->toBe('LGPD')
        ->and(PersonalDataInventory::getNavigationSort())->toBe(3)
        ->and(PersonalDataInventory::getSlug())->toBe('inventory');
});
