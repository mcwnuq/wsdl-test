<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for addShipment StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AddShipment extends AbstractStructBase
{
    /**
     * The przesylki
     * Meta information extracted from the WSDL
     * - maxOccurs: 500
     * - minOccurs: 1
     * @var \App\ElektronicznyNadawca\StructType\PrzesylkaType[]
     */
    public array $przesylki;
    /**
     * The idBufor
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    public ?int $idBufor = null;
    /**
     * Constructor method for addShipment
     * @uses AddShipment::setPrzesylki()
     * @uses AddShipment::setIdBufor()
     * @param \App\ElektronicznyNadawca\StructType\PrzesylkaType[] $przesylki
     * @param int $idBufor
     */
    public function __construct(array $przesylki, ?int $idBufor = null)
    {
        $this
            ->setPrzesylki($przesylki)
            ->setIdBufor($idBufor);
    }
    /**
     * Get przesylki value
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaType[]
     */
    public function getPrzesylki(): array
    {
        return $this->przesylki;
    }
    /**
     * Set przesylki value
     * @param \App\ElektronicznyNadawca\StructType\PrzesylkaType[] $przesylki
     * @return \App\ElektronicznyNadawca\StructType\AddShipment
     */
    public function setPrzesylki(array $przesylki): self
    {
        $this->przesylki = $przesylki;
        
        return $this;
    }
    /**
     * Add item to przesylki value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\PrzesylkaType $item
     * @return \App\ElektronicznyNadawca\StructType\AddShipment
     */
    public function addToPrzesylki(\App\ElektronicznyNadawca\StructType\PrzesylkaType $item): self
    {
        $this->przesylki[] = $item;
        
        return $this;
    }
    /**
     * Get idBufor value
     * @return int|null
     */
    public function getIdBufor(): ?int
    {
        return $this->idBufor;
    }
    /**
     * Set idBufor value
     * @param int $idBufor
     * @return \App\ElektronicznyNadawca\StructType\AddShipment
     */
    public function setIdBufor(?int $idBufor = null): self
    {
        $this->idBufor = $idBufor;
        
        return $this;
    }
}
