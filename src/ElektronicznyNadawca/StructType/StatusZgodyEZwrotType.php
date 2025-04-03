<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for statusZgodyEZwrotType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class StatusZgodyEZwrotType
{
    /**
     * The eZwrotPrzesylki
     * Meta information extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 1
     * @var string[]
     */
    public array $eZwrotPrzesylki;
    /**
     * The guidZgodaEZwrot
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $guidZgodaEZwrot = null;
    /**
     * The status
     * @var string|null
     */
    public ?string $status = null;
    /**
     * The platnoscZaPrzesylke
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    public ?bool $platnoscZaPrzesylke = null;
    /**
     * The kosztKontrahenta
     * Meta information extracted from the WSDL
     * - documentation: Kwota w groszach
     * - use: optional
     * @var int|null
     */
    public ?int $kosztKontrahenta = null;
    /**
     * The dataWygasnieciaZgody
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $dataWygasnieciaZgody = null;
    /**
     * Constructor method for statusZgodyEZwrotType
     * @uses StatusZgodyEZwrotType::setEZwrotPrzesylki()
     * @uses StatusZgodyEZwrotType::setGuidZgodaEZwrot()
     * @uses StatusZgodyEZwrotType::setStatus()
     * @uses StatusZgodyEZwrotType::setPlatnoscZaPrzesylke()
     * @uses StatusZgodyEZwrotType::setKosztKontrahenta()
     * @uses StatusZgodyEZwrotType::setDataWygasnieciaZgody()
     * @param string[] $eZwrotPrzesylki
     * @param string $guidZgodaEZwrot
     * @param string $status
     * @param bool $platnoscZaPrzesylke
     * @param int $kosztKontrahenta
     * @param string $dataWygasnieciaZgody
     */
    public function __construct(array $eZwrotPrzesylki, ?string $guidZgodaEZwrot = null, ?string $status = null, ?bool $platnoscZaPrzesylke = null, ?int $kosztKontrahenta = null, ?string $dataWygasnieciaZgody = null)
    {
        $this
            ->setEZwrotPrzesylki($eZwrotPrzesylki)
            ->setGuidZgodaEZwrot($guidZgodaEZwrot)
            ->setStatus($status)
            ->setPlatnoscZaPrzesylke($platnoscZaPrzesylke)
            ->setKosztKontrahenta($kosztKontrahenta)
            ->setDataWygasnieciaZgody($dataWygasnieciaZgody);
    }
    /**
     * Get eZwrotPrzesylki value
     * @return string[]
     */
    public function getEZwrotPrzesylki(): array
    {
        return $this->eZwrotPrzesylki;
    }
    /**
     * Set eZwrotPrzesylki value
     * @param string[] $eZwrotPrzesylki
     * @return \App\ElektronicznyNadawca\StructType\StatusZgodyEZwrotType
     */
    public function setEZwrotPrzesylki(array $eZwrotPrzesylki): self
    {
        $this->eZwrotPrzesylki = $eZwrotPrzesylki;
        
        return $this;
    }
    /**
     * Add item to eZwrotPrzesylki value
     * @uses \App\ElektronicznyNadawca\EnumType\EZwrotPrzesylkiType::valueIsValid()
     * @uses \App\ElektronicznyNadawca\EnumType\EZwrotPrzesylkiType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \App\ElektronicznyNadawca\StructType\StatusZgodyEZwrotType
     */
    public function addToEZwrotPrzesylki(string $item): self
    {
        $this->eZwrotPrzesylki[] = $item;
        
        return $this;
    }
    /**
     * Get guidZgodaEZwrot value
     * @return string|null
     */
    public function getGuidZgodaEZwrot(): ?string
    {
        return $this->guidZgodaEZwrot;
    }
    /**
     * Set guidZgodaEZwrot value
     * @param string $guidZgodaEZwrot
     * @return \App\ElektronicznyNadawca\StructType\StatusZgodyEZwrotType
     */
    public function setGuidZgodaEZwrot(?string $guidZgodaEZwrot = null): self
    {
        $this->guidZgodaEZwrot = $guidZgodaEZwrot;
        
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
     * @return \App\ElektronicznyNadawca\StructType\StatusZgodyEZwrotType
     */
    public function setStatus(?string $status = null): self
    {
        $this->status = $status;
        
        return $this;
    }
    /**
     * Get platnoscZaPrzesylke value
     * @return bool|null
     */
    public function getPlatnoscZaPrzesylke(): ?bool
    {
        return $this->platnoscZaPrzesylke;
    }
    /**
     * Set platnoscZaPrzesylke value
     * @param bool $platnoscZaPrzesylke
     * @return \App\ElektronicznyNadawca\StructType\StatusZgodyEZwrotType
     */
    public function setPlatnoscZaPrzesylke(?bool $platnoscZaPrzesylke = null): self
    {
        $this->platnoscZaPrzesylke = $platnoscZaPrzesylke;
        
        return $this;
    }
    /**
     * Get kosztKontrahenta value
     * @return int|null
     */
    public function getKosztKontrahenta(): ?int
    {
        return $this->kosztKontrahenta;
    }
    /**
     * Set kosztKontrahenta value
     * @param int $kosztKontrahenta
     * @return \App\ElektronicznyNadawca\StructType\StatusZgodyEZwrotType
     */
    public function setKosztKontrahenta(?int $kosztKontrahenta = null): self
    {
        $this->kosztKontrahenta = $kosztKontrahenta;
        
        return $this;
    }
    /**
     * Get dataWygasnieciaZgody value
     * @return string|null
     */
    public function getDataWygasnieciaZgody(): ?string
    {
        return $this->dataWygasnieciaZgody;
    }
    /**
     * Set dataWygasnieciaZgody value
     * @param string $dataWygasnieciaZgody
     * @return \App\ElektronicznyNadawca\StructType\StatusZgodyEZwrotType
     */
    public function setDataWygasnieciaZgody(?string $dataWygasnieciaZgody = null): self
    {
        $this->dataWygasnieciaZgody = $dataWygasnieciaZgody;
        
        return $this;
    }
}
