<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for AccompanyingDocumentsEnum EnumType
 * @subpackage Enumerations
 */
class AccompanyingDocumentsEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'LICENSE'
     * @return string 'LICENSE'
     */
    const VALUE_LICENSE = 'LICENSE';
    /**
     * Constant for value 'CERTIFICATE'
     * @return string 'CERTIFICATE'
     */
    const VALUE_CERTIFICATE = 'CERTIFICATE';
    /**
     * Constant for value 'INVOICE'
     * @return string 'INVOICE'
     */
    const VALUE_INVOICE = 'INVOICE';
    /**
     * Return allowed values
     * @uses self::VALUE_LICENSE
     * @uses self::VALUE_CERTIFICATE
     * @uses self::VALUE_INVOICE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_LICENSE,
            self::VALUE_CERTIFICATE,
            self::VALUE_INVOICE,
        ];
    }
}
