<?php

declare(strict_types=1);

namespace Simtabi\Laranail\Ichava\IconSetsIconoir\Enums;

use Simtabi\Laranail\Ichava\Traits\HasIconSetVariants;
use Simtabi\Laranail\Ichava\Contracts\IconSetVariantInterface;
use Simtabi\Laranail\Ichava\IconSetsIconoir\Constants\IconsConstants;

/**
 * Type-safe variant selection for Iconoir (regular / solid).
 */
enum Variant: string implements IconSetVariantInterface
{
    use HasIconSetVariants;

    case REGULAR = 'regular';
    case SOLID = 'solid';

    public function getPath(): string
    {
        return IconsConstants::getSvgPath($this->value);
    }

    private static function getDefaultValue(): string
    {
        return IconsConstants::getDefaultVariant() ?? self::REGULAR->value;
    }

    private static function getClassPrefix(): string
    {
        return IconsConstants::getPrefix();
    }
}
