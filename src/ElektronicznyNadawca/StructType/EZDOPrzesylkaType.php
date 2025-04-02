<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EZDOPrzesylkaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class EZDOPrzesylkaType extends AbstractStructBase
{
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
     * The rodzaj
     * @var string|null
     */
    public ?string $rodzaj = null;
    /**
     * The kategoria
     * @var string|null
     */
    public ?string $kategoria = null;
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
     * The kwotaPobrania
     * Meta information extracted from the WSDL
     * - documentation: kwota jaką należy pobrać podana w groszach
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - minInclusive: 0
     * @var int|null
     */
    public ?int $kwotaPobrania = null;
    /**
     * The numerWewnetrznyPrzesylki
     * @var string|null
     */
    public ?string $numerWewnetrznyPrzesylki = null;
    /**
     * The zwrot
     * @var string|null
     */
    public ?string $zwrot = null;
    /**
     * Constructor method for EZDOPrzesylkaType
     * @uses EZDOPrzesylkaType::setNumerNadania()
     * @uses EZDOPrzesylkaType::setRodzaj()
     * @uses EZDOPrzesylkaType::setKategoria()
     * @uses EZDOPrzesylkaType::setMasa()
     * @uses EZDOPrzesylkaType::setWartosc()
     * @uses EZDOPrzesylkaType::setKwotaPobrania()
     * @uses EZDOPrzesylkaType::setNumerWewnetrznyPrzesylki()
     * @uses EZDOPrzesylkaType::setZwrot()
     * @param string $numerNadania
     * @param string $rodzaj
     * @param string $kategoria
     * @param int $masa
     * @param int $wartosc
     * @param int $kwotaPobrania
     * @param string $numerWewnetrznyPrzesylki
     * @param string $zwrot
     */
    public function __construct(?string $numerNadania = null, ?string $rodzaj = null, ?string $kategoria = null, ?int $masa = null, ?int $wartosc = null, ?int $kwotaPobrania = null, ?string $numerWewnetrznyPrzesylki = null, ?string $zwrot = null)
    {
        $this
            ->setNumerNadania($numerNadania)
            ->setRodzaj($rodzaj)
            ->setKategoria($kategoria)
            ->setMasa($masa)
            ->setWartosc($wartosc)
            ->setKwotaPobrania($kwotaPobrania)
            ->setNumerWewnetrznyPrzesylki($numerWewnetrznyPrzesylki)
            ->setZwrot($zwrot);
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
     * @return \App\ElektronicznyNadawca\StructType\EZDOPrzesylkaType
     */
    public function setNumerNadania(?string $numerNadania = null): self
    {
        $this->numerNadania = $numerNadania;
        
        return $this;
    }
    /**
     * Get rodzaj value
     * @return string|null
     */
    public function getRodzaj(): ?string
    {
        return $this->rodzaj;
    }
    /**
     * Set rodzaj value
     * @param string $rodzaj
     * @return \App\ElektronicznyNadawca\StructType\EZDOPrzesylkaType
     */
    public function setRodzaj(?string $rodzaj = null): self
    {
        $this->rodzaj = $rodzaj;
        
        return $this;
    }
    /**
     * Get kategoria value
     * @return string|null
     */
    public function getKategoria(): ?string
    {
        return $this->kategoria;
    }
    /**
     * Set kategoria value
     * @param string $kategoria
     * @return \App\ElektronicznyNadawca\StructType\EZDOPrzesylkaType
     */
    public function setKategoria(?string $kategoria = null): self
    {
        $this->kategoria = $kategoria;
        
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
     * @return \App\ElektronicznyNadawca\StructType\EZDOPrzesylkaType
     */
    public function setMasa(?int $masa = null): self
    {
        $this->masa = $masa;
        
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
     * @return \App\ElektronicznyNadawca\StructType\EZDOPrzesylkaType
     */
    public function setWartosc(?int $wartosc = null): self
    {
        $this->wartosc = $wartosc;
        
        return $this;
    }
    /**
     * Get kwotaPobrania value
     * @return int|null
     */
    public function getKwotaPobrania(): ?int
    {
        return $this->kwotaPobrania;
    }
    /**
     * Set kwotaPobrania value
     * @param int $kwotaPobrania
     * @return \App\ElektronicznyNadawca\StructType\EZDOPrzesylkaType
     */
    public function setKwotaPobrania(?int $kwotaPobrania = null): self
    {
        $this->kwotaPobrania = $kwotaPobrania;
        
        return $this;
    }
    /**
     * Get numerWewnetrznyPrzesylki value
     * @return string|null
     */
    public function getNumerWewnetrznyPrzesylki(): ?string
    {
        return $this->numerWewnetrznyPrzesylki;
    }
    /**
     * Set numerWewnetrznyPrzesylki value
     * @param string $numerWewnetrznyPrzesylki
     * @return \App\ElektronicznyNadawca\StructType\EZDOPrzesylkaType
     */
    public function setNumerWewnetrznyPrzesylki(?string $numerWewnetrznyPrzesylki = null): self
    {
        $this->numerWewnetrznyPrzesylki = $numerWewnetrznyPrzesylki;
        
        return $this;
    }
    /**
     * Get zwrot value
     * @return string|null
     */
    public function getZwrot(): ?string
    {
        return $this->zwrot;
    }
    /**
     * Set zwrot value
     * @param string $zwrot
     * @return \App\ElektronicznyNadawca\StructType\EZDOPrzesylkaType
     */
    public function setZwrot(?string $zwrot = null): self
    {
        $this->zwrot = $zwrot;
        
        return $this;
    }
}
