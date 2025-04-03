<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\EnumType;


/**
 * This class stands for sposobPrzekazaniaPotwierdzeniaOdbioruType EnumType
 * @subpackage Enumerations
 */
class SposobPrzekazaniaPotwierdzeniaOdbioruType
{
    /**
     * Constant for value 'MIEJSKI_DO_3H_DO_5KM'
     * @return string 'MIEJSKI_DO_3H_DO_5KM'
     */
    const VALUE_MIEJSKI_DO_3_H_DO_5_KM = 'MIEJSKI_DO_3H_DO_5KM';
    /**
     * Constant for value 'MIEJSKI_DO_3H_DO_10KM'
     * @return string 'MIEJSKI_DO_3H_DO_10KM'
     */
    const VALUE_MIEJSKI_DO_3_H_DO_10_KM = 'MIEJSKI_DO_3H_DO_10KM';
    /**
     * Constant for value 'MIEJSKI_DO_3H_DO_15KM'
     * @return string 'MIEJSKI_DO_3H_DO_15KM'
     */
    const VALUE_MIEJSKI_DO_3_H_DO_15_KM = 'MIEJSKI_DO_3H_DO_15KM';
    /**
     * Constant for value 'MIEJSKI_DO_3H_POWYZEJ_15KM'
     * @return string 'MIEJSKI_DO_3H_POWYZEJ_15KM'
     */
    const VALUE_MIEJSKI_DO_3_H_POWYZEJ_15_KM = 'MIEJSKI_DO_3H_POWYZEJ_15KM';
    /**
     * Constant for value 'MIEJSKI_DO_4H_DO_10KM'
     * @return string 'MIEJSKI_DO_4H_DO_10KM'
     */
    const VALUE_MIEJSKI_DO_4_H_DO_10_KM = 'MIEJSKI_DO_4H_DO_10KM';
    /**
     * Constant for value 'MIEJSKI_DO_4H_DO_15KM'
     * @return string 'MIEJSKI_DO_4H_DO_15KM'
     */
    const VALUE_MIEJSKI_DO_4_H_DO_15_KM = 'MIEJSKI_DO_4H_DO_15KM';
    /**
     * Constant for value 'MIEJSKI_DO_4H_DO_20KM'
     * @return string 'MIEJSKI_DO_4H_DO_20KM'
     */
    const VALUE_MIEJSKI_DO_4_H_DO_20_KM = 'MIEJSKI_DO_4H_DO_20KM';
    /**
     * Constant for value 'MIEJSKI_DO_4H_DO_30KM'
     * @return string 'MIEJSKI_DO_4H_DO_30KM'
     */
    const VALUE_MIEJSKI_DO_4_H_DO_30_KM = 'MIEJSKI_DO_4H_DO_30KM';
    /**
     * Constant for value 'MIEJSKI_DO_4H_DO_40KM'
     * @return string 'MIEJSKI_DO_4H_DO_40KM'
     */
    const VALUE_MIEJSKI_DO_4_H_DO_40_KM = 'MIEJSKI_DO_4H_DO_40KM';
    /**
     * Constant for value 'EKSPRES24'
     * @return string 'EKSPRES24'
     */
    const VALUE_EKSPRES_24 = 'EKSPRES24';
    /**
     * Constant for value 'LIST_ZWYKLY'
     * @return string 'LIST_ZWYKLY'
     */
    const VALUE_LIST_ZWYKLY = 'LIST_ZWYKLY';
    /**
     * Return allowed values
     * @uses self::VALUE_MIEJSKI_DO_3_H_DO_5_KM
     * @uses self::VALUE_MIEJSKI_DO_3_H_DO_10_KM
     * @uses self::VALUE_MIEJSKI_DO_3_H_DO_15_KM
     * @uses self::VALUE_MIEJSKI_DO_3_H_POWYZEJ_15_KM
     * @uses self::VALUE_MIEJSKI_DO_4_H_DO_10_KM
     * @uses self::VALUE_MIEJSKI_DO_4_H_DO_15_KM
     * @uses self::VALUE_MIEJSKI_DO_4_H_DO_20_KM
     * @uses self::VALUE_MIEJSKI_DO_4_H_DO_30_KM
     * @uses self::VALUE_MIEJSKI_DO_4_H_DO_40_KM
     * @uses self::VALUE_EKSPRES_24
     * @uses self::VALUE_LIST_ZWYKLY
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_MIEJSKI_DO_3_H_DO_5_KM,
            self::VALUE_MIEJSKI_DO_3_H_DO_10_KM,
            self::VALUE_MIEJSKI_DO_3_H_DO_15_KM,
            self::VALUE_MIEJSKI_DO_3_H_POWYZEJ_15_KM,
            self::VALUE_MIEJSKI_DO_4_H_DO_10_KM,
            self::VALUE_MIEJSKI_DO_4_H_DO_15_KM,
            self::VALUE_MIEJSKI_DO_4_H_DO_20_KM,
            self::VALUE_MIEJSKI_DO_4_H_DO_30_KM,
            self::VALUE_MIEJSKI_DO_4_H_DO_40_KM,
            self::VALUE_EKSPRES_24,
            self::VALUE_LIST_ZWYKLY,
        ];
    }
}
