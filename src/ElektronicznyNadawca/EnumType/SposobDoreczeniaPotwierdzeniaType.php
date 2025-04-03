<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\EnumType;


/**
 * This class stands for sposobDoreczeniaPotwierdzeniaType EnumType
 * @subpackage Enumerations
 */
class SposobDoreczeniaPotwierdzeniaType
{
    /**
     * Constant for value 'TELEFON'
     * @return string 'TELEFON'
     */
    const VALUE_TELEFON = 'TELEFON';
    /**
     * Constant for value 'TELEFAX'
     * @return string 'TELEFAX'
     */
    const VALUE_TELEFAX = 'TELEFAX';
    /**
     * Constant for value 'SMS'
     * @return string 'SMS'
     */
    const VALUE_SMS = 'SMS';
    /**
     * Constant for value 'EMAIL'
     * @return string 'EMAIL'
     */
    const VALUE_EMAIL = 'EMAIL';
    /**
     * Return allowed values
     * @uses self::VALUE_TELEFON
     * @uses self::VALUE_TELEFAX
     * @uses self::VALUE_SMS
     * @uses self::VALUE_EMAIL
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_TELEFON,
            self::VALUE_TELEFAX,
            self::VALUE_SMS,
            self::VALUE_EMAIL,
        ];
    }
}
