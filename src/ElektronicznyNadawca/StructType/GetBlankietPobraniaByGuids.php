<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getBlankietPobraniaByGuids StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetBlankietPobraniaByGuids extends AbstractStructBase
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
     * Constructor method for getBlankietPobraniaByGuids
     * @uses GetBlankietPobraniaByGuids::setGuid()
     * @uses GetBlankietPobraniaByGuids::setIdBufor()
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
     * @return \App\ElektronicznyNadawca\StructType\GetBlankietPobraniaByGuids
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
     * @return \App\ElektronicznyNadawca\StructType\GetBlankietPobraniaByGuids
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
     * @return \App\ElektronicznyNadawca\StructType\GetBlankietPobraniaByGuids
     */
    public function setIdBufor(?int $idBufor = null): self
    {
        $this->idBufor = $idBufor;
        
        return $this;
    }
}
