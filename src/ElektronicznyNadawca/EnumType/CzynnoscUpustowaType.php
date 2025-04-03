<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\EnumType;


/**
 * This class stands for czynnoscUpustowaType EnumType
 * @subpackage Enumerations
 */
class CzynnoscUpustowaType
{
    /**
     * Constant for value 'POSORTOWANA'
     * @return string 'POSORTOWANA'
     */
    const VALUE_POSORTOWANA = 'POSORTOWANA';
    /**
     * Return allowed values
     * @uses self::VALUE_POSORTOWANA
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_POSORTOWANA,
        ];
    }
}
