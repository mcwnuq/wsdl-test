<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for trasaRequestType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TrasaRequestType
{
    /**
     * The fromUrzadNadania
     * Meta information extracted from the WSDL
     * - base: xsd:int
     * @var int|null
     */
    public ?int $fromUrzadNadania = null;
    /**
     * The toKodPocztowy
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 10
     * - minLength: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $toKodPocztowy = null;
    /**
     * The guid
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $guid = null;
    /**
     * Constructor method for trasaRequestType
     * @uses TrasaRequestType::setFromUrzadNadania()
     * @uses TrasaRequestType::setToKodPocztowy()
     * @uses TrasaRequestType::setGuid()
     * @param int $fromUrzadNadania
     * @param string $toKodPocztowy
     * @param string $guid
     */
    public function __construct(?int $fromUrzadNadania = null, ?string $toKodPocztowy = null, ?string $guid = null)
    {
        $this
            ->setFromUrzadNadania($fromUrzadNadania)
            ->setToKodPocztowy($toKodPocztowy)
            ->setGuid($guid);
    }
    /**
     * Get fromUrzadNadania value
     * @return int|null
     */
    public function getFromUrzadNadania(): ?int
    {
        return $this->fromUrzadNadania;
    }
    /**
     * Set fromUrzadNadania value
     * @param int $fromUrzadNadania
     * @return \App\ElektronicznyNadawca\StructType\TrasaRequestType
     */
    public function setFromUrzadNadania(?int $fromUrzadNadania = null): self
    {
        $this->fromUrzadNadania = $fromUrzadNadania;
        
        return $this;
    }
    /**
     * Get toKodPocztowy value
     * @return string|null
     */
    public function getToKodPocztowy(): ?string
    {
        return $this->toKodPocztowy;
    }
    /**
     * Set toKodPocztowy value
     * @param string $toKodPocztowy
     * @return \App\ElektronicznyNadawca\StructType\TrasaRequestType
     */
    public function setToKodPocztowy(?string $toKodPocztowy = null): self
    {
        $this->toKodPocztowy = $toKodPocztowy;
        
        return $this;
    }
    /**
     * Get guid value
     * @return string|null
     */
    public function getGuid(): ?string
    {
        return $this->guid;
    }
    /**
     * Set guid value
     * @param string $guid
     * @return \App\ElektronicznyNadawca\StructType\TrasaRequestType
     */
    public function setGuid(?string $guid = null): self
    {
        $this->guid = $guid;
        
        return $this;
    }
}
