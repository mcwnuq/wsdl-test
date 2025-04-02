<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createShopEZwrotyResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateShopEZwrotyResponse extends AbstractStructBase
{
    /**
     * The idShop
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    public ?int $idShop = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\ErrorType[]
     */
    public ?array $error = null;
    /**
     * Constructor method for createShopEZwrotyResponse
     * @uses CreateShopEZwrotyResponse::setIdShop()
     * @uses CreateShopEZwrotyResponse::setError()
     * @param int $idShop
     * @param \App\ElektronicznyNadawca\StructType\ErrorType[] $error
     */
    public function __construct(?int $idShop = null, ?array $error = null)
    {
        $this
            ->setIdShop($idShop)
            ->setError($error);
    }
    /**
     * Get idShop value
     * @return int|null
     */
    public function getIdShop(): ?int
    {
        return $this->idShop;
    }
    /**
     * Set idShop value
     * @param int $idShop
     * @return \App\ElektronicznyNadawca\StructType\CreateShopEZwrotyResponse
     */
    public function setIdShop(?int $idShop = null): self
    {
        $this->idShop = $idShop;
        
        return $this;
    }
    /**
     * Get error value
     * @return \App\ElektronicznyNadawca\StructType\ErrorType[]
     */
    public function getError(): ?array
    {
        return $this->error;
    }
    /**
     * Set error value
     * @param \App\ElektronicznyNadawca\StructType\ErrorType[] $error
     * @return \App\ElektronicznyNadawca\StructType\CreateShopEZwrotyResponse
     */
    public function setError(?array $error = null): self
    {
        $this->error = $error;
        
        return $this;
    }
    /**
     * Add item to error value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\ErrorType $item
     * @return \App\ElektronicznyNadawca\StructType\CreateShopEZwrotyResponse
     */
    public function addToError(\App\ElektronicznyNadawca\StructType\ErrorType $item): self
    {
        $this->error[] = $item;
        
        return $this;
    }
}
