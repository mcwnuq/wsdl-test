<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for gabarytType EnumType
 * @subpackage Enumerations
 */
class GabarytType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'GABARYT_A'
     * @return string 'GABARYT_A'
     */
    const VALUE_GABARYT_A = 'GABARYT_A';
    /**
     * Constant for value 'GABARYT_B'
     * @return string 'GABARYT_B'
     */
    const VALUE_GABARYT_B = 'GABARYT_B';
    /**
     * Return allowed values
     * @uses self::VALUE_GABARYT_A
     * @uses self::VALUE_GABARYT_B
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_GABARYT_A,
            self::VALUE_GABARYT_B,
        ];
    }
}
