<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static KILOGRAMS()
 * @method static static UNIT()
 * @method static static OptionThree()
 */
final class ProductUnitEnum extends Enum
{
    const KILOGRAMS = 0;
    const CUBIC = 1;
}
