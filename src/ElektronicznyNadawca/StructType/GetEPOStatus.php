<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getEPOStatus StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetEPOStatus extends AbstractStructBase
{
    /**
     * The guid
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - maxOccurs: 500
     * - minOccurs: 1
     * - whiteSpace: collapse
     * @var string[]
     */
    public array $guid;
    /**
     * The endedOnly
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public bool $endedOnly;
    /**
     * The idEnvelope
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public int $idEnvelope;
    /**
     * The withBioepo
     * Meta information extracted from the WSDL
     * - documentation: Element służy do przekazania żądania uzupełnienia statusu EPO dla wskazanych przesyłek o dane dotyczące podpisu odbiorcy przesyłki. W zalezności od urządzenia wykorzystanego do utrwalenia podpisu, w odpowiedzi na wywołanie
     * metody może zostać zwrócony sam obraz podpisu lub obraz podpisu uzupełniony o jego dane biometryczne.
     * @var bool|null
     */
    public ?bool $withBioepo = null;
    /**
     * Constructor method for getEPOStatus
     * @uses GetEPOStatus::setGuid()
     * @uses GetEPOStatus::setEndedOnly()
     * @uses GetEPOStatus::setIdEnvelope()
     * @uses GetEPOStatus::setWithBioepo()
     * @param string[] $guid
     * @param bool $endedOnly
     * @param int $idEnvelope
     * @param bool $withBioepo
     */
    public function __construct(array $guid, bool $endedOnly, int $idEnvelope, ?bool $withBioepo = null)
    {
        $this
            ->setGuid($guid)
            ->setEndedOnly($endedOnly)
            ->setIdEnvelope($idEnvelope)
            ->setWithBioepo($withBioepo);
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
     * @return \App\ElektronicznyNadawca\StructType\GetEPOStatus
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
     * @return \App\ElektronicznyNadawca\StructType\GetEPOStatus
     */
    public function addToGuid(string $item): self
    {
        $this->guid[] = $item;
        
        return $this;
    }
    /**
     * Get endedOnly value
     * @return bool
     */
    public function getEndedOnly(): bool
    {
        return $this->endedOnly;
    }
    /**
     * Set endedOnly value
     * @param bool $endedOnly
     * @return \App\ElektronicznyNadawca\StructType\GetEPOStatus
     */
    public function setEndedOnly(bool $endedOnly): self
    {
        $this->endedOnly = $endedOnly;
        
        return $this;
    }
    /**
     * Get idEnvelope value
     * @return int
     */
    public function getIdEnvelope(): int
    {
        return $this->idEnvelope;
    }
    /**
     * Set idEnvelope value
     * @param int $idEnvelope
     * @return \App\ElektronicznyNadawca\StructType\GetEPOStatus
     */
    public function setIdEnvelope(int $idEnvelope): self
    {
        $this->idEnvelope = $idEnvelope;
        
        return $this;
    }
    /**
     * Get withBioepo value
     * @return bool|null
     */
    public function getWithBioepo(): ?bool
    {
        return $this->withBioepo;
    }
    /**
     * Set withBioepo value
     * @param bool $withBioepo
     * @return \App\ElektronicznyNadawca\StructType\GetEPOStatus
     */
    public function setWithBioepo(?bool $withBioepo = null): self
    {
        $this->withBioepo = $withBioepo;
        
        return $this;
    }
}
