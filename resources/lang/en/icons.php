<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Iconoir -- localisable strings
|--------------------------------------------------------------------------
|
| An overlay, not a second source of truth. `name` and `description` are
| deliberately absent: IconRegistry::fromDirectory() reads those from
| resources/assets/svg/config.json, which is canonical. A non-English locale
| may add them to override; `en` must not.
|
| Variant keys match Simtabi\Laranail\Ichava\IconSetsIconoir\Enums\Variant.
|
*/

return [
    'variants' => [
        'regular' => 'Regular',
        'solid'   => 'Solid',
    ],

    'variant_descriptions' => [
        'regular' => 'Stroked icons on a 1.5px line, transparent fill',
        'solid'   => 'Solid icons filled with the current colour',
    ],
];
