<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\EnumType;


/**
 * This class stands for DeklaracaCelnaRodzajEnum EnumType
 * @subpackage Enumerations
 */
class DeklaracaCelnaRodzajEnum
{
    /**
     * Constant for value 'CN22'
     * @return string 'CN22'
     */
    const VALUE_CN_22 = 'CN22';
    /**
     * Constant for value 'CN23'
     * @return string 'CN23'
     */
    const VALUE_CN_23 = 'CN23';
    /**
     * Return allowed values
     * @uses self::VALUE_CN_22
     * @uses self::VALUE_CN_23
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CN_22,
            self::VALUE_CN_23,
        ];
    }
}
