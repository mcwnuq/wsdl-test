<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for przesylkaShortType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrzesylkaShortType extends AbstractStructBase
{
    /**
     * The guid
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    public string $guid;
    /**
     * The czynnosciUpustowe
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public ?array $czynnosciUpustowe = null;
    /**
     * The numerNadania
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 20
     * - minLength: 10
     * @var string|null
     */
    public ?string $numerNadania = null;
    /**
     * The dataNadania
     * @var string|null
     */
    public ?string $dataNadania = null;
    /**
     * The razem
     * @var int|null
     */
    public ?int $razem = null;
    /**
     * The pobranie
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    public ?int $pobranie = null;
    /**
     * The status
     * @var string|null
     */
    public ?string $status = null;
    /**
     * Constructor method for przesylkaShortType
     * @uses PrzesylkaShortType::setGuid()
     * @uses PrzesylkaShortType::setCzynnosciUpustowe()
     * @uses PrzesylkaShortType::setNumerNadania()
     * @uses PrzesylkaShortType::setDataNadania()
     * @uses PrzesylkaShortType::setRazem()
     * @uses PrzesylkaShortType::setPobranie()
     * @uses PrzesylkaShortType::setStatus()
     * @param string $guid
     * @param string[] $czynnosciUpustowe
     * @param string $numerNadania
     * @param string $dataNadania
     * @param int $razem
     * @param int $pobranie
     * @param string $status
     */
    public function __construct(string $guid, ?array $czynnosciUpustowe = null, ?string $numerNadania = null, ?string $dataNadania = null, ?int $razem = null, ?int $pobranie = null, ?string $status = null)
    {
        $this
            ->setGuid($guid)
            ->setCzynnosciUpustowe($czynnosciUpustowe)
            ->setNumerNadania($numerNadania)
            ->setDataNadania($dataNadania)
            ->setRazem($razem)
            ->setPobranie($pobranie)
            ->setStatus($status);
    }
    /**
     * Get guid value
     * @return string
     */
    public function getGuid(): string
    {
        return $this->guid;
    }
    /**
     * Set guid value
     * @param string $guid
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaShortType
     */
    public function setGuid(string $guid): self
    {
        $this->guid = $guid;
        
        return $this;
    }
    /**
     * Get czynnosciUpustowe value
     * @return string[]
     */
    public function getCzynnosciUpustowe(): ?array
    {
        return $this->czynnosciUpustowe;
    }
    /**
     * Set czynnosciUpustowe value
     * @param string[] $czynnosciUpustowe
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaShortType
     */
    public function setCzynnosciUpustowe(?array $czynnosciUpustowe = null): self
    {
        $this->czynnosciUpustowe = $czynnosciUpustowe;
        
        return $this;
    }
    /**
     * Add item to czynnosciUpustowe value
     * @uses \App\ElektronicznyNadawca\EnumType\CzynnoscUpustowaType::valueIsValid()
     * @uses \App\ElektronicznyNadawca\EnumType\CzynnoscUpustowaType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaShortType
     */
    public function addToCzynnosciUpustowe(string $item): self
    {
        $this->czynnosciUpustowe[] = $item;
        
        return $this;
    }
    /**
     * Get numerNadania value
     * @return string|null
     */
    public function getNumerNadania(): ?string
    {
        return $this->numerNadania;
    }
    /**
     * Set numerNadania value
     * @param string $numerNadania
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaShortType
     */
    public function setNumerNadania(?string $numerNadania = null): self
    {
        $this->numerNadania = $numerNadania;
        
        return $this;
    }
    /**
     * Get dataNadania value
     * @return string|null
     */
    public function getDataNadania(): ?string
    {
        return $this->dataNadania;
    }
    /**
     * Set dataNadania value
     * @param string $dataNadania
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaShortType
     */
    public function setDataNadania(?string $dataNadania = null): self
    {
        $this->dataNadania = $dataNadania;
        
        return $this;
    }
    /**
     * Get razem value
     * @return int|null
     */
    public function getRazem(): ?int
    {
        return $this->razem;
    }
    /**
     * Set razem value
     * @param int $razem
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaShortType
     */
    public function setRazem(?int $razem = null): self
    {
        $this->razem = $razem;
        
        return $this;
    }
    /**
     * Get pobranie value
     * @return int|null
     */
    public function getPobranie(): ?int
    {
        return $this->pobranie;
    }
    /**
     * Set pobranie value
     * @param int $pobranie
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaShortType
     */
    public function setPobranie(?int $pobranie = null): self
    {
        $this->pobranie = $pobranie;
        
        return $this;
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaShortType
     */
    public function setStatus(?string $status = null): self
    {
        $this->status = $status;
        
        return $this;
    }
}
