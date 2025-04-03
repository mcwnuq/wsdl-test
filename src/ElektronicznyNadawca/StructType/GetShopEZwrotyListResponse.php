<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for getShopEZwrotyListResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetShopEZwrotyListResponse
{
    /**
     * The shops
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\ShopEZwrotyInfoType[]
     */
    public ?array $shops = null;
    /**
     * Constructor method for getShopEZwrotyListResponse
     * @uses GetShopEZwrotyListResponse::setShops()
     * @param \App\ElektronicznyNadawca\StructType\ShopEZwrotyInfoType[] $shops
     */
    public function __construct(?array $shops = null)
    {
        $this
            ->setShops($shops);
    }
    /**
     * Get shops value
     * @return \App\ElektronicznyNadawca\StructType\ShopEZwrotyInfoType[]
     */
    public function getShops(): ?array
    {
        return $this->shops;
    }
    /**
     * Set shops value
     * @param \App\ElektronicznyNadawca\StructType\ShopEZwrotyInfoType[] $shops
     * @return \App\ElektronicznyNadawca\StructType\GetShopEZwrotyListResponse
     */
    public function setShops(?array $shops = null): self
    {
        $this->shops = $shops;
        
        return $this;
    }
    /**
     * Add item to shops value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\ShopEZwrotyInfoType $item
     * @return \App\ElektronicznyNadawca\StructType\GetShopEZwrotyListResponse
     */
    public function addToShops(\App\ElektronicznyNadawca\StructType\ShopEZwrotyInfoType $item): self
    {
        $this->shops[] = $item;
        
        return $this;
    }
}
