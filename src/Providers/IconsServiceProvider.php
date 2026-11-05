<?php

declare(strict_types=1);

namespace Simtabi\Laranail\Ichava\IconSetsIconoir\Providers;

use Simtabi\Laranail\Ichava\Support\IconPackServiceProvider;
use Simtabi\Laranail\Ichava\IconSetsIconoir\Constants\IconsConstants;
use Simtabi\Laranail\Ichava\IconSetsIconoir\View\Components\IconComponent;

/**
 * Registers the Iconoir set with the Ichava registry on boot.
 */
class IconsServiceProvider extends IconPackServiceProvider
{
    protected function constantsClass(): string
    {
        return IconsConstants::class;
    }

    protected function componentClass(): string
    {
        return IconComponent::class;
    }
}
