<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for rodzajPrzypisaniaDoJednostkiEnum EnumType
 * @subpackage Enumerations
 */
class RodzajPrzypisaniaDoJednostkiEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'RAPORTOWANIE'
     * @return string 'RAPORTOWANIE'
     */
    const VALUE_RAPORTOWANIE = 'RAPORTOWANIE';
    /**
     * Constant for value 'NADAWANIE'
     * @return string 'NADAWANIE'
     */
    const VALUE_NADAWANIE = 'NADAWANIE';
    /**
     * Return allowed values
     * @uses self::VALUE_RAPORTOWANIE
     * @uses self::VALUE_NADAWANIE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_RAPORTOWANIE,
            self::VALUE_NADAWANIE,
        ];
    }
}
