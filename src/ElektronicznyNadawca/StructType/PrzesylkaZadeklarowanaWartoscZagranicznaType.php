<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for przesylkaZadeklarowanaWartoscZagranicznaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrzesylkaZadeklarowanaWartoscZagranicznaType extends PrzesylkaRejestrowanaType
{
    /**
     * The deklaracjaCelna2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type|null
     */
    public ?\App\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type $deklaracjaCelna2 = null;
    /**
     * The zawartosc
     * Meta information extracted from the WSDL
     * - documentation: Element określający zawartość przesyłki. Aktualnie dopuszczalne wartości: KORESPONDENCJA DOKUMENTY_PONIZEJ_250G DOKUMENTY_POWYZEJ_250G TOWARY
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $zawartosc = null;
    /**
     * The posteRestante
     * Meta information extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $posteRestante = null;
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
     * The iloscPotwierdzenOdbioru
     * Meta information extracted from the WSDL
     * - base: xsd:int
     * - maxInclusive: 9
     * - minInclusive: 0
     * @var int|null
     */
    public ?int $iloscPotwierdzenOdbioru = null;
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
     * The numerPrzesylkiKlienta
     * @var string|null
     */
    public ?string $numerPrzesylkiKlienta = null;
    /**
     * Constructor method for przesylkaZadeklarowanaWartoscZagranicznaType
     * @uses PrzesylkaZadeklarowanaWartoscZagranicznaType::setDeklaracjaCelna2()
     * @uses PrzesylkaZadeklarowanaWartoscZagranicznaType::setZawartosc()
     * @uses PrzesylkaZadeklarowanaWartoscZagranicznaType::setPosteRestante()
     * @uses PrzesylkaZadeklarowanaWartoscZagranicznaType::setMasa()
     * @uses PrzesylkaZadeklarowanaWartoscZagranicznaType::setIloscPotwierdzenOdbioru()
     * @uses PrzesylkaZadeklarowanaWartoscZagranicznaType::setWartosc()
     * @uses PrzesylkaZadeklarowanaWartoscZagranicznaType::setNumerPrzesylkiKlienta()
     * @param \App\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type $deklaracjaCelna2
     * @param string $zawartosc
     * @param bool $posteRestante
     * @param int $masa
     * @param int $iloscPotwierdzenOdbioru
     * @param int $wartosc
     * @param string $numerPrzesylkiKlienta
     */
    public function __construct(?\App\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type $deklaracjaCelna2 = null, ?string $zawartosc = null, ?bool $posteRestante = false, ?int $masa = null, ?int $iloscPotwierdzenOdbioru = null, ?int $wartosc = null, ?string $numerPrzesylkiKlienta = null)
    {
        $this
            ->setDeklaracjaCelna2($deklaracjaCelna2)
            ->setZawartosc($zawartosc)
            ->setPosteRestante($posteRestante)
            ->setMasa($masa)
            ->setIloscPotwierdzenOdbioru($iloscPotwierdzenOdbioru)
            ->setWartosc($wartosc)
            ->setNumerPrzesylkiKlienta($numerPrzesylkiKlienta);
    }
    /**
     * Get deklaracjaCelna2 value
     * @return \App\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type|null
     */
    public function getDeklaracjaCelna2(): ?\App\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type
    {
        return $this->deklaracjaCelna2;
    }
    /**
     * Set deklaracjaCelna2 value
     * @param \App\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type $deklaracjaCelna2
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaZadeklarowanaWartoscZagranicznaType
     */
    public function setDeklaracjaCelna2(?\App\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type $deklaracjaCelna2 = null): self
    {
        $this->deklaracjaCelna2 = $deklaracjaCelna2;
        
        return $this;
    }
    /**
     * Get zawartosc value
     * @return string|null
     */
    public function getZawartosc(): ?string
    {
        return $this->zawartosc;
    }
    /**
     * Set zawartosc value
     * @param string $zawartosc
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaZadeklarowanaWartoscZagranicznaType
     */
    public function setZawartosc(?string $zawartosc = null): self
    {
        $this->zawartosc = $zawartosc;
        
        return $this;
    }
    /**
     * Get posteRestante value
     * @return bool|null
     */
    public function getPosteRestante(): ?bool
    {
        return $this->posteRestante;
    }
    /**
     * Set posteRestante value
     * @param bool $posteRestante
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaZadeklarowanaWartoscZagranicznaType
     */
    public function setPosteRestante(?bool $posteRestante = false): self
    {
        $this->posteRestante = $posteRestante;
        
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaZadeklarowanaWartoscZagranicznaType
     */
    public function setMasa(?int $masa = null): self
    {
        $this->masa = $masa;
        
        return $this;
    }
    /**
     * Get iloscPotwierdzenOdbioru value
     * @return int|null
     */
    public function getIloscPotwierdzenOdbioru(): ?int
    {
        return $this->iloscPotwierdzenOdbioru;
    }
    /**
     * Set iloscPotwierdzenOdbioru value
     * @param int $iloscPotwierdzenOdbioru
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaZadeklarowanaWartoscZagranicznaType
     */
    public function setIloscPotwierdzenOdbioru(?int $iloscPotwierdzenOdbioru = null): self
    {
        $this->iloscPotwierdzenOdbioru = $iloscPotwierdzenOdbioru;
        
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaZadeklarowanaWartoscZagranicznaType
     */
    public function setWartosc(?int $wartosc = null): self
    {
        $this->wartosc = $wartosc;
        
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaZadeklarowanaWartoscZagranicznaType
     */
    public function setNumerPrzesylkiKlienta(?string $numerPrzesylkiKlienta = null): self
    {
        $this->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;
        
        return $this;
    }
}
