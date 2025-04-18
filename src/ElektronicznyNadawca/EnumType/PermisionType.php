<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for permisionType EnumType
 * @subpackage Enumerations
 */
class PermisionType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'MANAGE_USERS'
     * @return string 'MANAGE_USERS'
     */
    const VALUE_MANAGE_USERS = 'MANAGE_USERS';
    /**
     * Constant for value 'TRANSMIT'
     * @return string 'TRANSMIT'
     */
    const VALUE_TRANSMIT = 'TRANSMIT';
    /**
     * Constant for value 'MANAGE_PROFILES'
     * @return string 'MANAGE_PROFILES'
     */
    const VALUE_MANAGE_PROFILES = 'MANAGE_PROFILES';
    /**
     * Constant for value 'MANAGE_ORGANIZATION_UNIT'
     * @return string 'MANAGE_ORGANIZATION_UNIT'
     */
    const VALUE_MANAGE_ORGANIZATION_UNIT = 'MANAGE_ORGANIZATION_UNIT';
    /**
     * Constant for value 'MANAGE_TEMPLATES'
     * @return string 'MANAGE_TEMPLATES'
     */
    const VALUE_MANAGE_TEMPLATES = 'MANAGE_TEMPLATES';
    /**
     * Constant for value 'EDIT_PARCELS'
     * @return string 'EDIT_PARCELS'
     */
    const VALUE_EDIT_PARCELS = 'EDIT_PARCELS';
    /**
     * Constant for value 'EDIT_PARCELS_FROM_TEMPLATES'
     * @return string 'EDIT_PARCELS_FROM_TEMPLATES'
     */
    const VALUE_EDIT_PARCELS_FROM_TEMPLATES = 'EDIT_PARCELS_FROM_TEMPLATES';
    /**
     * Constant for value 'MANAGE_ADDRESS_BOOK'
     * @return string 'MANAGE_ADDRESS_BOOK'
     */
    const VALUE_MANAGE_ADDRESS_BOOK = 'MANAGE_ADDRESS_BOOK';
    /**
     * Constant for value 'SAVE_SELF_SETTINGS'
     * @return string 'SAVE_SELF_SETTINGS'
     */
    const VALUE_SAVE_SELF_SETTINGS = 'SAVE_SELF_SETTINGS';
    /**
     * Constant for value 'MANAGE_DICTIONARIES'
     * @return string 'MANAGE_DICTIONARIES'
     */
    const VALUE_MANAGE_DICTIONARIES = 'MANAGE_DICTIONARIES';
    /**
     * Constant for value 'MANAGE_RETURN_DOCUMENTS_ADDRESSES'
     * @return string 'MANAGE_RETURN_DOCUMENTS_ADDRESSES'
     */
    const VALUE_MANAGE_RETURN_DOCUMENTS_ADDRESSES = 'MANAGE_RETURN_DOCUMENTS_ADDRESSES';
    /**
     * Constant for value 'VIEW_INVOICE'
     * @return string 'VIEW_INVOICE'
     */
    const VALUE_VIEW_INVOICE = 'VIEW_INVOICE';
    /**
     * Constant for value 'VIEW_RODO_DATA'
     * @return string 'VIEW_RODO_DATA'
     */
    const VALUE_VIEW_RODO_DATA = 'VIEW_RODO_DATA';
    /**
     * Return allowed values
     * @uses self::VALUE_MANAGE_USERS
     * @uses self::VALUE_TRANSMIT
     * @uses self::VALUE_MANAGE_PROFILES
     * @uses self::VALUE_MANAGE_ORGANIZATION_UNIT
     * @uses self::VALUE_MANAGE_TEMPLATES
     * @uses self::VALUE_EDIT_PARCELS
     * @uses self::VALUE_EDIT_PARCELS_FROM_TEMPLATES
     * @uses self::VALUE_MANAGE_ADDRESS_BOOK
     * @uses self::VALUE_SAVE_SELF_SETTINGS
     * @uses self::VALUE_MANAGE_DICTIONARIES
     * @uses self::VALUE_MANAGE_RETURN_DOCUMENTS_ADDRESSES
     * @uses self::VALUE_VIEW_INVOICE
     * @uses self::VALUE_VIEW_RODO_DATA
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_MANAGE_USERS,
            self::VALUE_TRANSMIT,
            self::VALUE_MANAGE_PROFILES,
            self::VALUE_MANAGE_ORGANIZATION_UNIT,
            self::VALUE_MANAGE_TEMPLATES,
            self::VALUE_EDIT_PARCELS,
            self::VALUE_EDIT_PARCELS_FROM_TEMPLATES,
            self::VALUE_MANAGE_ADDRESS_BOOK,
            self::VALUE_SAVE_SELF_SETTINGS,
            self::VALUE_MANAGE_DICTIONARIES,
            self::VALUE_MANAGE_RETURN_DOCUMENTS_ADDRESSES,
            self::VALUE_VIEW_INVOICE,
            self::VALUE_VIEW_RODO_DATA,
        ];
    }
}
