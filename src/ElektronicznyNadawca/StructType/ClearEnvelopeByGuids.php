<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for clearEnvelopeByGuids StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ClearEnvelopeByGuids extends AbstractStructBase
{
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
     * The idBufor
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    public ?int $idBufor = null;
    /**
     * Constructor method for clearEnvelopeByGuids
     * @uses ClearEnvelopeByGuids::setGuid()
     * @uses ClearEnvelopeByGuids::setIdBufor()
     * @param string[] $guid
     * @param int $idBufor
     */
    public function __construct(array $guid, ?int $idBufor = null)
    {
        $this
            ->setGuid($guid)
            ->setIdBufor($idBufor);
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
     * @return \App\ElektronicznyNadawca\StructType\ClearEnvelopeByGuids
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
     * @return \App\ElektronicznyNadawca\StructType\ClearEnvelopeByGuids
     */
    public function addToGuid(string $item): self
    {
        $this->guid[] = $item;
        
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
     * @return \App\ElektronicznyNadawca\StructType\ClearEnvelopeByGuids
     */
    public function setIdBufor(?int $idBufor = null): self
    {
        $this->idBufor = $idBufor;
        
        return $this;
    }
}
