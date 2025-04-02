<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for subPrzesylkaBiznesowaPlusType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SubPrzesylkaBiznesowaPlusType extends PrzesylkaType
{
    /**
     * The pobranie
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\PobranieType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\PobranieType $pobranie = null;
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
     * The masa
     * Meta information extracted from the WSDL
     * - documentation: masa przesyłki podana w gramach
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - minInclusive: 1
     * @var int|null
     */
    public ?int $masa = null;
    /**
     * The gabaryt
     * @var string|null
     */
    public ?string $gabaryt = null;
    /**
     * The wartosc
     * Meta information extracted from the WSDL
     * - documentation: zadeklarowana wartość przesyłki w groszach
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - minInclusive: 0
     * @var int|null
     */
    public ?int $wartosc = null;
    /**
     * The ostroznie
     * @var bool|null
     */
    public ?bool $ostroznie = null;
    /**
     * The numerPrzesylkiKlienta
     * @var string|null
     */
    public ?string $numerPrzesylkiKlienta = null;
    /**
     * The kwotaTranzakcji
     * @var int|null
     */
    public ?int $kwotaTranzakcji = null;
    /**
     * The numerTransakcjiOdbioru
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 50
     * @var string|null
     */
    public ?string $numerTransakcjiOdbioru = null;
    /**
     * Constructor method for subPrzesylkaBiznesowaPlusType
     * @uses SubPrzesylkaBiznesowaPlusType::setPobranie()
     * @uses SubPrzesylkaBiznesowaPlusType::setNumerNadania()
     * @uses SubPrzesylkaBiznesowaPlusType::setMasa()
     * @uses SubPrzesylkaBiznesowaPlusType::setGabaryt()
     * @uses SubPrzesylkaBiznesowaPlusType::setWartosc()
     * @uses SubPrzesylkaBiznesowaPlusType::setOstroznie()
     * @uses SubPrzesylkaBiznesowaPlusType::setNumerPrzesylkiKlienta()
     * @uses SubPrzesylkaBiznesowaPlusType::setKwotaTranzakcji()
     * @uses SubPrzesylkaBiznesowaPlusType::setNumerTransakcjiOdbioru()
     * @param \App\ElektronicznyNadawca\StructType\PobranieType $pobranie
     * @param string $numerNadania
     * @param int $masa
     * @param string $gabaryt
     * @param int $wartosc
     * @param bool $ostroznie
     * @param string $numerPrzesylkiKlienta
     * @param int $kwotaTranzakcji
     * @param string $numerTransakcjiOdbioru
     */
    public function __construct(?\App\ElektronicznyNadawca\StructType\PobranieType $pobranie = null, ?string $numerNadania = null, ?int $masa = null, ?string $gabaryt = null, ?int $wartosc = null, ?bool $ostroznie = null, ?string $numerPrzesylkiKlienta = null, ?int $kwotaTranzakcji = null, ?string $numerTransakcjiOdbioru = null)
    {
        $this
            ->setPobranie($pobranie)
            ->setNumerNadania($numerNadania)
            ->setMasa($masa)
            ->setGabaryt($gabaryt)
            ->setWartosc($wartosc)
            ->setOstroznie($ostroznie)
            ->setNumerPrzesylkiKlienta($numerPrzesylkiKlienta)
            ->setKwotaTranzakcji($kwotaTranzakcji)
            ->setNumerTransakcjiOdbioru($numerTransakcjiOdbioru);
    }
    /**
     * Get pobranie value
     * @return \App\ElektronicznyNadawca\StructType\PobranieType|null
     */
    public function getPobranie(): ?\App\ElektronicznyNadawca\StructType\PobranieType
    {
        return $this->pobranie;
    }
    /**
     * Set pobranie value
     * @param \App\ElektronicznyNadawca\StructType\PobranieType $pobranie
     * @return \App\ElektronicznyNadawca\StructType\SubPrzesylkaBiznesowaPlusType
     */
    public function setPobranie(?\App\ElektronicznyNadawca\StructType\PobranieType $pobranie = null): self
    {
        $this->pobranie = $pobranie;
        
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
     * @return \App\ElektronicznyNadawca\StructType\SubPrzesylkaBiznesowaPlusType
     */
    public function setNumerNadania(?string $numerNadania = null): self
    {
        $this->numerNadania = $numerNadania;
        
        return $this;
    }
    /**
     * Get masa value
     * @return int|null
     */
    public function getMasa(): ?int
    {
        return $this->masa;
    }
    /**
     * Set masa value
     * @param int $masa
     * @return \App\ElektronicznyNadawca\StructType\SubPrzesylkaBiznesowaPlusType
     */
    public function setMasa(?int $masa = null): self
    {
        $this->masa = $masa;
        
        return $this;
    }
    /**
     * Get gabaryt value
     * @return string|null
     */
    public function getGabaryt(): ?string
    {
        return $this->gabaryt;
    }
    /**
     * Set gabaryt value
     * @param string $gabaryt
     * @return \App\ElektronicznyNadawca\StructType\SubPrzesylkaBiznesowaPlusType
     */
    public function setGabaryt(?string $gabaryt = null): self
    {
        $this->gabaryt = $gabaryt;
        
        return $this;
    }
    /**
     * Get wartosc value
     * @return int|null
     */
    public function getWartosc(): ?int
    {
        return $this->wartosc;
    }
    /**
     * Set wartosc value
     * @param int $wartosc
     * @return \App\ElektronicznyNadawca\StructType\SubPrzesylkaBiznesowaPlusType
     */
    public function setWartosc(?int $wartosc = null): self
    {
        $this->wartosc = $wartosc;
        
        return $this;
    }
    /**
     * Get ostroznie value
     * @return bool|null
     */
    public function getOstroznie(): ?bool
    {
        return $this->ostroznie;
    }
    /**
     * Set ostroznie value
     * @param bool $ostroznie
     * @return \App\ElektronicznyNadawca\StructType\SubPrzesylkaBiznesowaPlusType
     */
    public function setOstroznie(?bool $ostroznie = null): self
    {
        $this->ostroznie = $ostroznie;
        
        return $this;
    }
    /**
     * Get numerPrzesylkiKlienta value
     * @return string|null
     */
    public function getNumerPrzesylkiKlienta(): ?string
    {
        return $this->numerPrzesylkiKlienta;
    }
    /**
     * Set numerPrzesylkiKlienta value
     * @param string $numerPrzesylkiKlienta
     * @return \App\ElektronicznyNadawca\StructType\SubPrzesylkaBiznesowaPlusType
     */
    public function setNumerPrzesylkiKlienta(?string $numerPrzesylkiKlienta = null): self
    {
        $this->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;
        
        return $this;
    }
    /**
     * Get kwotaTranzakcji value
     * @return int|null
     */
    public function getKwotaTranzakcji(): ?int
    {
        return $this->kwotaTranzakcji;
    }
    /**
     * Set kwotaTranzakcji value
     * @param int $kwotaTranzakcji
     * @return \App\ElektronicznyNadawca\StructType\SubPrzesylkaBiznesowaPlusType
     */
    public function setKwotaTranzakcji(?int $kwotaTranzakcji = null): self
    {
        $this->kwotaTranzakcji = $kwotaTranzakcji;
        
        return $this;
    }
    /**
     * Get numerTransakcjiOdbioru value
     * @return string|null
     */
    public function getNumerTransakcjiOdbioru(): ?string
    {
        return $this->numerTransakcjiOdbioru;
    }
    /**
     * Set numerTransakcjiOdbioru value
     * @param string $numerTransakcjiOdbioru
     * @return \App\ElektronicznyNadawca\StructType\SubPrzesylkaBiznesowaPlusType
     */
    public function setNumerTransakcjiOdbioru(?string $numerTransakcjiOdbioru = null): self
    {
        $this->numerTransakcjiOdbioru = $numerTransakcjiOdbioru;
        
        return $this;
    }
}
