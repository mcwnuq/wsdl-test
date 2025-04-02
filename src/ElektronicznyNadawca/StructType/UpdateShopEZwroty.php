<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updateShopEZwroty StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdateShopEZwroty extends AbstractStructBase
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
     * Constructor method for updateShopEZwroty
     * @uses UpdateShopEZwroty::setShop()
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
     * @return \App\ElektronicznyNadawca\StructType\UpdateShopEZwroty
     */
    public function setShop(\App\ElektronicznyNadawca\StructType\ShopEZwrotyType $shop): self
    {
        $this->shop = $shop;
        
        return $this;
    }
}
