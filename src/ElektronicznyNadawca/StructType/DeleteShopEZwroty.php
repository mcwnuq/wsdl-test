<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for deleteShopEZwroty StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteShopEZwroty
{
    /**
     * The idShop
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public int $idShop;
    /**
     * Constructor method for deleteShopEZwroty
     * @uses DeleteShopEZwroty::setIdShop()
     * @param int $idShop
     */
    public function __construct(int $idShop)
    {
        $this
            ->setIdShop($idShop);
    }
    /**
     * Get idShop value
     * @return int
     */
    public function getIdShop(): int
    {
        return $this->idShop;
    }
    /**
     * Set idShop value
     * @param int $idShop
     * @return \App\ElektronicznyNadawca\StructType\DeleteShopEZwroty
     */
    public function setIdShop(int $idShop): self
    {
        $this->idShop = $idShop;
        
        return $this;
    }
}
