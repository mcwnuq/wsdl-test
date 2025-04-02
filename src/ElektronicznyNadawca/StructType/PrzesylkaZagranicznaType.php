<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for przesylkaZagranicznaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrzesylkaZagranicznaType extends PrzesylkaNieRejestrowanaType
{
    /**
     * The adres
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\AdresType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\AdresType $adres = null;
    /**
     * The nadawca
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\AdresType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\AdresType $nadawca = null;
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
     * The ekspres
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    public ?bool $ekspres = null;
    /**
     * The kraj
     * @var string|null
     */
    public ?string $kraj = null;
    /**
     * Constructor method for przesylkaZagranicznaType
     * @uses PrzesylkaZagranicznaType::setAdres()
     * @uses PrzesylkaZagranicznaType::setNadawca()
     * @uses PrzesylkaZagranicznaType::setDeklaracjaCelna2()
     * @uses PrzesylkaZagranicznaType::setZawartosc()
     * @uses PrzesylkaZagranicznaType::setPosteRestante()
     * @uses PrzesylkaZagranicznaType::setKategoria()
     * @uses PrzesylkaZagranicznaType::setMasa()
     * @uses PrzesylkaZagranicznaType::setEkspres()
     * @uses PrzesylkaZagranicznaType::setKraj()
     * @param \App\ElektronicznyNadawca\StructType\AdresType $adres
     * @param \App\ElektronicznyNadawca\StructType\AdresType $nadawca
     * @param \App\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type $deklaracjaCelna2
     * @param string $zawartosc
     * @param bool $posteRestante
     * @param string $kategoria
     * @param int $masa
     * @param bool $ekspres
     * @param string $kraj
     */
    public function __construct(?\App\ElektronicznyNadawca\StructType\AdresType $adres = null, ?\App\ElektronicznyNadawca\StructType\AdresType $nadawca = null, ?\App\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type $deklaracjaCelna2 = null, ?string $zawartosc = null, ?bool $posteRestante = false, ?string $kategoria = null, ?int $masa = null, ?bool $ekspres = false, ?string $kraj = null)
    {
        $this
            ->setAdres($adres)
            ->setNadawca($nadawca)
            ->setDeklaracjaCelna2($deklaracjaCelna2)
            ->setZawartosc($zawartosc)
            ->setPosteRestante($posteRestante)
            ->setKategoria($kategoria)
            ->setMasa($masa)
            ->setEkspres($ekspres)
            ->setKraj($kraj);
    }
    /**
     * Get adres value
     * @return \App\ElektronicznyNadawca\StructType\AdresType|null
     */
    public function getAdres(): ?\App\ElektronicznyNadawca\StructType\AdresType
    {
        return $this->adres;
    }
    /**
     * Set adres value
     * @param \App\ElektronicznyNadawca\StructType\AdresType $adres
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaZagranicznaType
     */
    public function setAdres(?\App\ElektronicznyNadawca\StructType\AdresType $adres = null): self
    {
        $this->adres = $adres;
        
        return $this;
    }
    /**
     * Get nadawca value
     * @return \App\ElektronicznyNadawca\StructType\AdresType|null
     */
    public function getNadawca(): ?\App\ElektronicznyNadawca\StructType\AdresType
    {
        return $this->nadawca;
    }
    /**
     * Set nadawca value
     * @param \App\ElektronicznyNadawca\StructType\AdresType $nadawca
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaZagranicznaType
     */
    public function setNadawca(?\App\ElektronicznyNadawca\StructType\AdresType $nadawca = null): self
    {
        $this->nadawca = $nadawca;
        
        return $this;
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaZagranicznaType
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaZagranicznaType
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaZagranicznaType
     */
    public function setPosteRestante(?bool $posteRestante = false): self
    {
        $this->posteRestante = $posteRestante;
        
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaZagranicznaType
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaZagranicznaType
     */
    public function setMasa(?int $masa = null): self
    {
        $this->masa = $masa;
        
        return $this;
    }
    /**
     * Get ekspres value
     * @return bool|null
     */
    public function getEkspres(): ?bool
    {
        return $this->ekspres;
    }
    /**
     * Set ekspres value
     * @param bool $ekspres
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaZagranicznaType
     */
    public function setEkspres(?bool $ekspres = false): self
    {
        $this->ekspres = $ekspres;
        
        return $this;
    }
    /**
     * Get kraj value
     * @return string|null
     */
    public function getKraj(): ?string
    {
        return $this->kraj;
    }
    /**
     * Set kraj value
     * @param string $kraj
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaZagranicznaType
     */
    public function setKraj(?string $kraj = null): self
    {
        $this->kraj = $kraj;
        
        return $this;
    }
}
