<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createShopEZwroty StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateShopEZwroty extends AbstractStructBase
{
    /**
     * The shop
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \App\ElektronicznyNadawca\StructType\ShopEZwrotyType
     */
    public \App\ElektronicznyNadawca\StructType\ShopEZwrotyType $shop;
    /**
     * Constructor method for createShopEZwroty
     * @uses CreateShopEZwroty::setShop()
     * @param \App\ElektronicznyNadawca\StructType\ShopEZwrotyType $shop
     */
    public function __construct(\App\ElektronicznyNadawca\StructType\ShopEZwrotyType $shop)
    {
        $this
            ->setShop($shop);
    }
    /**
     * Get shop value
     * @return \App\ElektronicznyNadawca\StructType\ShopEZwrotyType
     */
    public function getShop(): \App\ElektronicznyNadawca\StructType\ShopEZwrotyType
    {
        return $this->shop;
    }
    /**
     * Set shop value
     * @param \App\ElektronicznyNadawca\StructType\ShopEZwrotyType $shop
     * @return \App\ElektronicznyNadawca\StructType\CreateShopEZwroty
     */
    public function setShop(\App\ElektronicznyNadawca\StructType\ShopEZwrotyType $shop): self
    {
        $this->shop = $shop;
        
        return $this;
    }
}
