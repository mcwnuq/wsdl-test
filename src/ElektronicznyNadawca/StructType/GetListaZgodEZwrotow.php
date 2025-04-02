<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getListaZgodEZwrotow StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetListaZgodEZwrotow extends AbstractStructBase
{
    /**
     * The status
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $status = null;
    /**
     * The idShop
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    public ?int $idShop = null;
    /**
     * Constructor method for getListaZgodEZwrotow
     * @uses GetListaZgodEZwrotow::setStatus()
     * @uses GetListaZgodEZwrotow::setIdShop()
     * @param string $status
     * @param int $idShop
     */
    public function __construct(?string $status = null, ?int $idShop = null)
    {
        $this
            ->setStatus($status)
            ->setIdShop($idShop);
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \App\ElektronicznyNadawca\StructType\GetListaZgodEZwrotow
     */
    public function setStatus(?string $status = null): self
    {
        $this->status = $status;
        
        return $this;
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
     * @return \App\ElektronicznyNadawca\StructType\GetListaZgodEZwrotow
     */
    public function setIdShop(?int $idShop = null): self
    {
        $this->idShop = $idShop;
        
        return $this;
    }
}
