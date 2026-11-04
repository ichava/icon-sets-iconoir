<?php

declare(strict_types=1);

use Simtabi\Laranail\Ichava\Services\IconRegistry;
use Simtabi\Laranail\Ichava\IconSetsIconoir\Enums\Variant;
use Simtabi\Laranail\Ichava\IconSetsIconoir\Constants\IconsConstants;
use Simtabi\Laranail\Ichava\IconSetsIconoir\Providers\IconsServiceProvider;

it(description: 'boots the provider without error', closure: function () {
    $providers = array_keys($this->app->getLoadedProviders());

    expect($providers)->toContain(IconsServiceProvider::class);
});

it(description: 'resolves constants from config json', closure: function () {
    expect(IconsConstants::getVendorPackage())->toBe('ichava/icon-sets-iconoir')
        ->and(IconsConstants::getTitle())->toBe('Iconoir')
        ->and(IconsConstants::getPrefix())->toBe('iconoir')
        ->and(IconsConstants::getDefaultVariant())->toBe('regular');
});

it(description: 'uses the config prefix in enum class helpers', closure: function () {
    expect(Variant::REGULAR->getClass())->toBe('iconoir-regular')
        ->and(Variant::SOLID->getClass())->toBe('iconoir-solid');
});

it(description: 'matches the default variant to config json', closure: function () {
    expect(Variant::default())->toBe(Variant::REGULAR)
        ->and(Variant::REGULAR->isDefault())->toBeTrue()
        ->and(Variant::SOLID->isDefault())->toBeFalse();
});

it(description: 'picks up the package in the icon registry', closure: function () {
    $registry = $this->app->make(IconRegistry::class);

    expect($registry->isRegistered('ichava/icon-sets-iconoir'))->toBeTrue(
        'IconRegistry should have ichava/icon-sets-iconoir registered after boot.',
    );
});
