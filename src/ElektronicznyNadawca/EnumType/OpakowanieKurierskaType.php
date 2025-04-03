<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\EnumType;


/**
 * This class stands for opakowanieKurierskaType EnumType
 * @subpackage Enumerations
 */
class OpakowanieKurierskaType
{
    /**
     * Constant for value 'FIRMOWA_DO_1KG'
     * @return string 'FIRMOWA_DO_1KG'
     */
    const VALUE_FIRMOWA_DO_1_KG = 'FIRMOWA_DO_1KG';
    /**
     * Return allowed values
     * @uses self::VALUE_FIRMOWA_DO_1_KG
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_FIRMOWA_DO_1_KG,
        ];
    }
}
