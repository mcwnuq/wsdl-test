<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for moveShipments StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MoveShipments extends AbstractStructBase
{
    /**
     * The idBuforFrom
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public int $idBuforFrom;
    /**
     * The idBuforTo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public int $idBuforTo;
    /**
     * The guid
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * - whiteSpace: collapse
     * @var string[]
     */
    public array $guid;
    /**
     * Constructor method for moveShipments
     * @uses MoveShipments::setIdBuforFrom()
     * @uses MoveShipments::setIdBuforTo()
     * @uses MoveShipments::setGuid()
     * @param int $idBuforFrom
     * @param int $idBuforTo
     * @param string[] $guid
     */
    public function __construct(int $idBuforFrom, int $idBuforTo, array $guid)
    {
        $this
            ->setIdBuforFrom($idBuforFrom)
            ->setIdBuforTo($idBuforTo)
            ->setGuid($guid);
    }
    /**
     * Get idBuforFrom value
     * @return int
     */
    public function getIdBuforFrom(): int
    {
        return $this->idBuforFrom;
    }
    /**
     * Set idBuforFrom value
     * @param int $idBuforFrom
     * @return \App\ElektronicznyNadawca\StructType\MoveShipments
     */
    public function setIdBuforFrom(int $idBuforFrom): self
    {
        $this->idBuforFrom = $idBuforFrom;
        
        return $this;
    }
    /**
     * Get idBuforTo value
     * @return int
     */
    public function getIdBuforTo(): int
    {
        return $this->idBuforTo;
    }
    /**
     * Set idBuforTo value
     * @param int $idBuforTo
     * @return \App\ElektronicznyNadawca\StructType\MoveShipments
     */
    public function setIdBuforTo(int $idBuforTo): self
    {
        $this->idBuforTo = $idBuforTo;
        
        return $this;
    }
    /**
     * Get guid value
     * @return string[]
     */
    public function getGuid(): array
    {
        return $this->guid;
    }
    /**
     * Set guid value
     * @param string[] $guid
     * @return \App\ElektronicznyNadawca\StructType\MoveShipments
     */
    public function setGuid(array $guid): self
    {
        $this->guid = $guid;
        
        return $this;
    }
    /**
     * Add item to guid value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \App\ElektronicznyNadawca\StructType\MoveShipments
     */
    public function addToGuid(string $item): self
    {
        $this->guid[] = $item;
        
        return $this;
    }
}
