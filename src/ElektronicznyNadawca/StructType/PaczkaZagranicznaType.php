<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for paczkaZagranicznaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PaczkaZagranicznaType extends PrzesylkaRejestrowanaType
{
    /**
     * The zwrot
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\ZwrotType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\ZwrotType $zwrot = null;
    /**
     * The deklaracjaCelna
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\DeklaracjaCelnaType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\DeklaracjaCelnaType $deklaracjaCelna = null;
    /**
     * The deklaracjaCelna2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type|null
     */
    public ?\App\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type $deklaracjaCelna2 = null;
    /**
     * The sposobNadaniaInterconnect
     * Meta information extracted from the WSDL
     * - documentation: Umożliwia określenie sposobu nadania przesyłki w ramach systemu Interconnect. Obsługiwane wartości: - ODBIOR_Z_ADRESU_PRYWATNEGO - ODBIOR_Z_ADRESU_FIRMOWEGO - NADANIE_W_PLACOWCE_POCZTOWEJ
     * - base: xsd:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $sposobNadaniaInterconnect = null;
    /**
     * The sposobDoreczenia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\SposobDoreczeniaType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\SposobDoreczeniaType $sposobDoreczenia = null;
    /**
     * The posteRestante
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
     * The kategoria
     * @var string|null
     */
    public ?string $kategoria = null;
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
     * The utrudnionaManipulacja
     * @var bool|null
     */
    public ?bool $utrudnionaManipulacja = null;
    /**
     * The ekspres
     * @var bool|null
     */
    public ?bool $ekspres = null;
    /**
     * The numerReferencyjnyCelny
     * Meta information extracted from the WSDL
     * - documentation: atrybut przestarzały (deprecated), należy używać typu deklaracjaCelna2Type i elementu numerReferencyjnyCelny
     * @var string|null
     */
    public ?string $numerReferencyjnyCelny = null;
    /**
     * The numerPrzesylkiKlienta
     * @var string|null
     */
    public ?string $numerPrzesylkiKlienta = null;
    /**
     * Constructor method for paczkaZagranicznaType
     * @uses PaczkaZagranicznaType::setZwrot()
     * @uses PaczkaZagranicznaType::setDeklaracjaCelna()
     * @uses PaczkaZagranicznaType::setDeklaracjaCelna2()
     * @uses PaczkaZagranicznaType::setSposobNadaniaInterconnect()
     * @uses PaczkaZagranicznaType::setSposobDoreczenia()
     * @uses PaczkaZagranicznaType::setPosteRestante()
     * @uses PaczkaZagranicznaType::setMasa()
     * @uses PaczkaZagranicznaType::setWartosc()
     * @uses PaczkaZagranicznaType::setKategoria()
     * @uses PaczkaZagranicznaType::setIloscPotwierdzenOdbioru()
     * @uses PaczkaZagranicznaType::setUtrudnionaManipulacja()
     * @uses PaczkaZagranicznaType::setEkspres()
     * @uses PaczkaZagranicznaType::setNumerReferencyjnyCelny()
     * @uses PaczkaZagranicznaType::setNumerPrzesylkiKlienta()
     * @param \App\ElektronicznyNadawca\StructType\ZwrotType $zwrot
     * @param \App\ElektronicznyNadawca\StructType\DeklaracjaCelnaType $deklaracjaCelna
     * @param \App\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type $deklaracjaCelna2
     * @param string $sposobNadaniaInterconnect
     * @param \App\ElektronicznyNadawca\StructType\SposobDoreczeniaType $sposobDoreczenia
     * @param bool $posteRestante
     * @param int $masa
     * @param int $wartosc
     * @param string $kategoria
     * @param int $iloscPotwierdzenOdbioru
     * @param bool $utrudnionaManipulacja
     * @param bool $ekspres
     * @param string $numerReferencyjnyCelny
     * @param string $numerPrzesylkiKlienta
     */
    public function __construct(?\App\ElektronicznyNadawca\StructType\ZwrotType $zwrot = null, ?\App\ElektronicznyNadawca\StructType\DeklaracjaCelnaType $deklaracjaCelna = null, ?\App\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type $deklaracjaCelna2 = null, ?string $sposobNadaniaInterconnect = null, ?\App\ElektronicznyNadawca\StructType\SposobDoreczeniaType $sposobDoreczenia = null, ?bool $posteRestante = null, ?int $masa = null, ?int $wartosc = null, ?string $kategoria = null, ?int $iloscPotwierdzenOdbioru = null, ?bool $utrudnionaManipulacja = null, ?bool $ekspres = null, ?string $numerReferencyjnyCelny = null, ?string $numerPrzesylkiKlienta = null)
    {
        $this
            ->setZwrot($zwrot)
            ->setDeklaracjaCelna($deklaracjaCelna)
            ->setDeklaracjaCelna2($deklaracjaCelna2)
            ->setSposobNadaniaInterconnect($sposobNadaniaInterconnect)
            ->setSposobDoreczenia($sposobDoreczenia)
            ->setPosteRestante($posteRestante)
            ->setMasa($masa)
            ->setWartosc($wartosc)
            ->setKategoria($kategoria)
            ->setIloscPotwierdzenOdbioru($iloscPotwierdzenOdbioru)
            ->setUtrudnionaManipulacja($utrudnionaManipulacja)
            ->setEkspres($ekspres)
            ->setNumerReferencyjnyCelny($numerReferencyjnyCelny)
            ->setNumerPrzesylkiKlienta($numerPrzesylkiKlienta);
    }
    /**
     * Get zwrot value
     * @return \App\ElektronicznyNadawca\StructType\ZwrotType|null
     */
    public function getZwrot(): ?\App\ElektronicznyNadawca\StructType\ZwrotType
    {
        return $this->zwrot;
    }
    /**
     * Set zwrot value
     * @param \App\ElektronicznyNadawca\StructType\ZwrotType $zwrot
     * @return \App\ElektronicznyNadawca\StructType\PaczkaZagranicznaType
     */
    public function setZwrot(?\App\ElektronicznyNadawca\StructType\ZwrotType $zwrot = null): self
    {
        $this->zwrot = $zwrot;
        
        return $this;
    }
    /**
     * Get deklaracjaCelna value
     * @return \App\ElektronicznyNadawca\StructType\DeklaracjaCelnaType|null
     */
    public function getDeklaracjaCelna(): ?\App\ElektronicznyNadawca\StructType\DeklaracjaCelnaType
    {
        return $this->deklaracjaCelna;
    }
    /**
     * Set deklaracjaCelna value
     * @param \App\ElektronicznyNadawca\StructType\DeklaracjaCelnaType $deklaracjaCelna
     * @return \App\ElektronicznyNadawca\StructType\PaczkaZagranicznaType
     */
    public function setDeklaracjaCelna(?\App\ElektronicznyNadawca\StructType\DeklaracjaCelnaType $deklaracjaCelna = null): self
    {
        $this->deklaracjaCelna = $deklaracjaCelna;
        
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
     * @return \App\ElektronicznyNadawca\StructType\PaczkaZagranicznaType
     */
    public function setDeklaracjaCelna2(?\App\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type $deklaracjaCelna2 = null): self
    {
        $this->deklaracjaCelna2 = $deklaracjaCelna2;
        
        return $this;
    }
    /**
     * Get sposobNadaniaInterconnect value
     * @return string|null
     */
    public function getSposobNadaniaInterconnect(): ?string
    {
        return $this->sposobNadaniaInterconnect;
    }
    /**
     * Set sposobNadaniaInterconnect value
     * @param string $sposobNadaniaInterconnect
     * @return \App\ElektronicznyNadawca\StructType\PaczkaZagranicznaType
     */
    public function setSposobNadaniaInterconnect(?string $sposobNadaniaInterconnect = null): self
    {
        $this->sposobNadaniaInterconnect = $sposobNadaniaInterconnect;
        
        return $this;
    }
    /**
     * Get sposobDoreczenia value
     * @return \App\ElektronicznyNadawca\StructType\SposobDoreczeniaType|null
     */
    public function getSposobDoreczenia(): ?\App\ElektronicznyNadawca\StructType\SposobDoreczeniaType
    {
        return $this->sposobDoreczenia;
    }
    /**
     * Set sposobDoreczenia value
     * @param \App\ElektronicznyNadawca\StructType\SposobDoreczeniaType $sposobDoreczenia
     * @return \App\ElektronicznyNadawca\StructType\PaczkaZagranicznaType
     */
    public function setSposobDoreczenia(?\App\ElektronicznyNadawca\StructType\SposobDoreczeniaType $sposobDoreczenia = null): self
    {
        $this->sposobDoreczenia = $sposobDoreczenia;
        
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
     * @return \App\ElektronicznyNadawca\StructType\PaczkaZagranicznaType
     */
    public function setPosteRestante(?bool $posteRestante = null): self
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
     * @return \App\ElektronicznyNadawca\StructType\PaczkaZagranicznaType
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
     * @return \App\ElektronicznyNadawca\StructType\PaczkaZagranicznaType
     */
    public function setWartosc(?int $wartosc = null): self
    {
        $this->wartosc = $wartosc;
        
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
     * @return \App\ElektronicznyNadawca\StructType\PaczkaZagranicznaType
     */
    public function setKategoria(?string $kategoria = null): self
    {
        $this->kategoria = $kategoria;
        
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
     * @return \App\ElektronicznyNadawca\StructType\PaczkaZagranicznaType
     */
    public function setIloscPotwierdzenOdbioru(?int $iloscPotwierdzenOdbioru = null): self
    {
        $this->iloscPotwierdzenOdbioru = $iloscPotwierdzenOdbioru;
        
        return $this;
    }
    /**
     * Get utrudnionaManipulacja value
     * @return bool|null
     */
    public function getUtrudnionaManipulacja(): ?bool
    {
        return $this->utrudnionaManipulacja;
    }
    /**
     * Set utrudnionaManipulacja value
     * @param bool $utrudnionaManipulacja
     * @return \App\ElektronicznyNadawca\StructType\PaczkaZagranicznaType
     */
    public function setUtrudnionaManipulacja(?bool $utrudnionaManipulacja = null): self
    {
        $this->utrudnionaManipulacja = $utrudnionaManipulacja;
        
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
     * @return \App\ElektronicznyNadawca\StructType\PaczkaZagranicznaType
     */
    public function setEkspres(?bool $ekspres = null): self
    {
        $this->ekspres = $ekspres;
        
        return $this;
    }
    /**
     * Get numerReferencyjnyCelny value
     * @return string|null
     */
    public function getNumerReferencyjnyCelny(): ?string
    {
        return $this->numerReferencyjnyCelny;
    }
    /**
     * Set numerReferencyjnyCelny value
     * @param string $numerReferencyjnyCelny
     * @return \App\ElektronicznyNadawca\StructType\PaczkaZagranicznaType
     */
    public function setNumerReferencyjnyCelny(?string $numerReferencyjnyCelny = null): self
    {
        $this->numerReferencyjnyCelny = $numerReferencyjnyCelny;
        
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
     * @return \App\ElektronicznyNadawca\StructType\PaczkaZagranicznaType
     */
    public function setNumerPrzesylkiKlienta(?string $numerPrzesylkiKlienta = null): self
    {
        $this->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;
        
        return $this;
    }
}
