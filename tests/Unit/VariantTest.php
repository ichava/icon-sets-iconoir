<?php

declare(strict_types=1);

use Simtabi\Laranail\Ichava\IconSetsIconoir\Enums\Variant;

/**
 * Pure-enum behaviour tests. Anything that touches config.json (default(),
 * isDefault(), getClass(), getPath()) lives in the Feature suite where the
 * Laravel container is bootstrapped.
 */
it(description: 'returns every case from values', closure: function () {
    expect(Variant::values())->toBe(['regular', 'solid']);
});

it(description: 'resolves known values and rejects unknown ones', closure: function () {
    expect(Variant::tryFromValue('regular'))->toBe(Variant::REGULAR)
        ->and(Variant::tryFromValue('solid'))->toBe(Variant::SOLID)
        ->and(Variant::tryFromValue('not-a-real-variant'))->toBeNull();
});
