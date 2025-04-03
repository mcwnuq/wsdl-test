<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\EnumType;


/**
 * This class stands for obszarType EnumType
 * @subpackage Enumerations
 */
class ObszarType
{
    /**
     * Constant for value 'MIASTO'
     * @return string 'MIASTO'
     */
    const VALUE_MIASTO = 'MIASTO';
    /**
     * Constant for value 'KRAJ'
     * @return string 'KRAJ'
     */
    const VALUE_KRAJ = 'KRAJ';
    /**
     * Return allowed values
     * @uses self::VALUE_MIASTO
     * @uses self::VALUE_KRAJ
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_MIASTO,
            self::VALUE_KRAJ,
        ];
    }
}
