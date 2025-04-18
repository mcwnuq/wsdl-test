<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for eSposobPowiadomieniaType EnumType
 * @subpackage Enumerations
 */
class ESposobPowiadomieniaType extends AbstractStructEnumBase
{
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
     * @uses self::VALUE_SMS
     * @uses self::VALUE_EMAIL
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SMS,
            self::VALUE_EMAIL,
        ];
    }
}
