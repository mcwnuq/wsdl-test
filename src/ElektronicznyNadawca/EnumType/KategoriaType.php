<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\EnumType;


/**
 * This class stands for kategoriaType EnumType
 * @subpackage Enumerations
 */
class KategoriaType
{
    /**
     * Constant for value 'EKONOMICZNA'
     * @return string 'EKONOMICZNA'
     */
    const VALUE_EKONOMICZNA = 'EKONOMICZNA';
    /**
     * Constant for value 'PRIORYTETOWA'
     * @return string 'PRIORYTETOWA'
     */
    const VALUE_PRIORYTETOWA = 'PRIORYTETOWA';
    /**
     * Return allowed values
     * @uses self::VALUE_EKONOMICZNA
     * @uses self::VALUE_PRIORYTETOWA
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_EKONOMICZNA,
            self::VALUE_PRIORYTETOWA,
        ];
    }
}
