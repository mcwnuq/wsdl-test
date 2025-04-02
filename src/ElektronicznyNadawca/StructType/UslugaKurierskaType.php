<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for uslugaKurierskaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UslugaKurierskaType extends PrzesylkaRejestrowanaType
{
    /**
     * The subPrzesylka
     * Meta information extracted from the WSDL
     * - choice: urzadWydaniaEPrzesylki | subPrzesylka
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \App\ElektronicznyNadawca\StructType\SubUslugaKurierskaType[]
     */
    public array $subPrzesylka;
    /**
     * The pobranie
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\PobranieType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\PobranieType $pobranie = null;
    /**
     * The odbiorPrzesylkiOdNadawcy
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\OdbiorPrzesylkiOdNadawcyType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\OdbiorPrzesylkiOdNadawcyType $odbiorPrzesylkiOdNadawcy = null;
    /**
     * The potwierdzenieDoreczenia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null;
    /**
     * The urzadWydaniaEPrzesylki
     * Meta information extracted from the WSDL
     * - choice: urzadWydaniaEPrzesylki | subPrzesylka
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki = null;
    /**
     * The potwierdzenieOdbioru
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruKurierskaType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruKurierskaType $potwierdzenieOdbioru = null;
    /**
     * The ubezpieczenie
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\UbezpieczenieType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie = null;
    /**
     * The zwrotDokumentow
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\ZwrotDokumentowKurierskaType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\ZwrotDokumentowKurierskaType $zwrotDokumentow = null;
    /**
     * The idDokumentyZwrotneAdresy
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    public ?int $idDokumentyZwrotneAdresy = null;
    /**
     * The doreczenie
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\DoreczenieUslugaKurierskaType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\DoreczenieUslugaKurierskaType $doreczenie = null;
    /**
     * The epo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\EPOType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\EPOType $epo = null;
    /**
     * The adresDlaZwrotu
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\AdresType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\AdresType $adresDlaZwrotu = null;
    /**
     * The zasadySpecjalne
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $zasadySpecjalne = null;
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
     * The ponadgabaryt
     * @var bool|null
     */
    public ?bool $ponadgabaryt = null;
    /**
     * The odleglosc
     * @var int|null
     */
    public ?int $odleglosc = null;
    /**
     * The zawartosc
     * @var string|null
     */
    public ?string $zawartosc = null;
    /**
     * The sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     * @var bool|null
     */
    public ?bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = null;
    /**
     * The ostroznie
     * @var bool|null
     */
    public ?bool $ostroznie = null;
    /**
     * The uiszczaOplate
     * @var string|null
     */
    public ?string $uiszczaOplate = null;
    /**
     * The termin
     * @var string|null
     */
    public ?string $termin = null;
    /**
     * The opakowanie
     * @var string|null
     */
    public ?string $opakowanie = null;
    /**
     * The numerPrzesylkiKlienta
     * @var string|null
     */
    public ?string $numerPrzesylkiKlienta = null;
    /**
     * The numerTransakcjiOdbioru
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 50
     * @var string|null
     */
    public ?string $numerTransakcjiOdbioru = null;
    /**
     * Constructor method for uslugaKurierskaType
     * @uses UslugaKurierskaType::setSubPrzesylka()
     * @uses UslugaKurierskaType::setPobranie()
     * @uses UslugaKurierskaType::setOdbiorPrzesylkiOdNadawcy()
     * @uses UslugaKurierskaType::setPotwierdzenieDoreczenia()
     * @uses UslugaKurierskaType::setUrzadWydaniaEPrzesylki()
     * @uses UslugaKurierskaType::setPotwierdzenieOdbioru()
     * @uses UslugaKurierskaType::setUbezpieczenie()
     * @uses UslugaKurierskaType::setZwrotDokumentow()
     * @uses UslugaKurierskaType::setIdDokumentyZwrotneAdresy()
     * @uses UslugaKurierskaType::setDoreczenie()
     * @uses UslugaKurierskaType::setEpo()
     * @uses UslugaKurierskaType::setAdresDlaZwrotu()
     * @uses UslugaKurierskaType::setZasadySpecjalne()
     * @uses UslugaKurierskaType::setMasa()
     * @uses UslugaKurierskaType::setWartosc()
     * @uses UslugaKurierskaType::setPonadgabaryt()
     * @uses UslugaKurierskaType::setOdleglosc()
     * @uses UslugaKurierskaType::setZawartosc()
     * @uses UslugaKurierskaType::setSprawdzenieZawartosciPrzesylkiPrzezOdbiorce()
     * @uses UslugaKurierskaType::setOstroznie()
     * @uses UslugaKurierskaType::setUiszczaOplate()
     * @uses UslugaKurierskaType::setTermin()
     * @uses UslugaKurierskaType::setOpakowanie()
     * @uses UslugaKurierskaType::setNumerPrzesylkiKlienta()
     * @uses UslugaKurierskaType::setNumerTransakcjiOdbioru()
     * @param \App\ElektronicznyNadawca\StructType\SubUslugaKurierskaType[] $subPrzesylka
     * @param \App\ElektronicznyNadawca\StructType\PobranieType $pobranie
     * @param \App\ElektronicznyNadawca\StructType\OdbiorPrzesylkiOdNadawcyType $odbiorPrzesylkiOdNadawcy
     * @param \App\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     * @param \App\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki
     * @param \App\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruKurierskaType $potwierdzenieOdbioru
     * @param \App\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie
     * @param \App\ElektronicznyNadawca\StructType\ZwrotDokumentowKurierskaType $zwrotDokumentow
     * @param int $idDokumentyZwrotneAdresy
     * @param \App\ElektronicznyNadawca\StructType\DoreczenieUslugaKurierskaType $doreczenie
     * @param \App\ElektronicznyNadawca\StructType\EPOType $epo
     * @param \App\ElektronicznyNadawca\StructType\AdresType $adresDlaZwrotu
     * @param string $zasadySpecjalne
     * @param int $masa
     * @param int $wartosc
     * @param bool $ponadgabaryt
     * @param int $odleglosc
     * @param string $zawartosc
     * @param bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     * @param bool $ostroznie
     * @param string $uiszczaOplate
     * @param string $termin
     * @param string $opakowanie
     * @param string $numerPrzesylkiKlienta
     * @param string $numerTransakcjiOdbioru
     */
    public function __construct(array $subPrzesylka = null, ?\App\ElektronicznyNadawca\StructType\PobranieType $pobranie = null, ?\App\ElektronicznyNadawca\StructType\OdbiorPrzesylkiOdNadawcyType $odbiorPrzesylkiOdNadawcy = null, ?\App\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null, ?\App\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki = null, ?\App\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruKurierskaType $potwierdzenieOdbioru = null, ?\App\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie = null, ?\App\ElektronicznyNadawca\StructType\ZwrotDokumentowKurierskaType $zwrotDokumentow = null, ?int $idDokumentyZwrotneAdresy = null, ?\App\ElektronicznyNadawca\StructType\DoreczenieUslugaKurierskaType $doreczenie = null, ?\App\ElektronicznyNadawca\StructType\EPOType $epo = null, ?\App\ElektronicznyNadawca\StructType\AdresType $adresDlaZwrotu = null, ?string $zasadySpecjalne = null, ?int $masa = null, ?int $wartosc = null, ?bool $ponadgabaryt = null, ?int $odleglosc = null, ?string $zawartosc = null, ?bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = null, ?bool $ostroznie = null, ?string $uiszczaOplate = null, ?string $termin = null, ?string $opakowanie = null, ?string $numerPrzesylkiKlienta = null, ?string $numerTransakcjiOdbioru = null)
    {
        $this
            ->setSubPrzesylka($subPrzesylka)
            ->setPobranie($pobranie)
            ->setOdbiorPrzesylkiOdNadawcy($odbiorPrzesylkiOdNadawcy)
            ->setPotwierdzenieDoreczenia($potwierdzenieDoreczenia)
            ->setUrzadWydaniaEPrzesylki($urzadWydaniaEPrzesylki)
            ->setPotwierdzenieOdbioru($potwierdzenieOdbioru)
            ->setUbezpieczenie($ubezpieczenie)
            ->setZwrotDokumentow($zwrotDokumentow)
            ->setIdDokumentyZwrotneAdresy($idDokumentyZwrotneAdresy)
            ->setDoreczenie($doreczenie)
            ->setEpo($epo)
            ->setAdresDlaZwrotu($adresDlaZwrotu)
            ->setZasadySpecjalne($zasadySpecjalne)
            ->setMasa($masa)
            ->setWartosc($wartosc)
            ->setPonadgabaryt($ponadgabaryt)
            ->setOdleglosc($odleglosc)
            ->setZawartosc($zawartosc)
            ->setSprawdzenieZawartosciPrzesylkiPrzezOdbiorce($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce)
            ->setOstroznie($ostroznie)
            ->setUiszczaOplate($uiszczaOplate)
            ->setTermin($termin)
            ->setOpakowanie($opakowanie)
            ->setNumerPrzesylkiKlienta($numerPrzesylkiKlienta)
            ->setNumerTransakcjiOdbioru($numerTransakcjiOdbioru);
    }
    /**
     * Get subPrzesylka value
     * @return \App\ElektronicznyNadawca\StructType\SubUslugaKurierskaType[]|null
     */
    public function getSubPrzesylka(): ?array
    {
        return $this->subPrzesylka ?? null;
    }
    /**
     * Set subPrzesylka value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \App\ElektronicznyNadawca\StructType\SubUslugaKurierskaType[] $subPrzesylka
     * @return \App\ElektronicznyNadawca\StructType\UslugaKurierskaType
     */
    public function setSubPrzesylka(array $subPrzesylka = null): self
    {
        if (is_null($subPrzesylka) || (is_array($subPrzesylka) && empty($subPrzesylka))) {
            unset($this->subPrzesylka);
        } else {
            $this->subPrzesylka = $subPrzesylka;
        }
        
        return $this;
    }
    /**
     * Add item to subPrzesylka value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\SubUslugaKurierskaType $item
     * @return \App\ElektronicznyNadawca\StructType\UslugaKurierskaType
     */
    public function addToSubPrzesylka(\App\ElektronicznyNadawca\StructType\SubUslugaKurierskaType $item): self
    {
        $this->subPrzesylka[] = $item;
        
        return $this;
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
     * @return \App\ElektronicznyNadawca\StructType\UslugaKurierskaType
     */
    public function setPobranie(?\App\ElektronicznyNadawca\StructType\PobranieType $pobranie = null): self
    {
        $this->pobranie = $pobranie;
        
        return $this;
    }
    /**
     * Get odbiorPrzesylkiOdNadawcy value
     * @return \App\ElektronicznyNadawca\StructType\OdbiorPrzesylkiOdNadawcyType|null
     */
    public function getOdbiorPrzesylkiOdNadawcy(): ?\App\ElektronicznyNadawca\StructType\OdbiorPrzesylkiOdNadawcyType
    {
        return $this->odbiorPrzesylkiOdNadawcy;
    }
    /**
     * Set odbiorPrzesylkiOdNadawcy value
     * @param \App\ElektronicznyNadawca\StructType\OdbiorPrzesylkiOdNadawcyType $odbiorPrzesylkiOdNadawcy
     * @return \App\ElektronicznyNadawca\StructType\UslugaKurierskaType
     */
    public function setOdbiorPrzesylkiOdNadawcy(?\App\ElektronicznyNadawca\StructType\OdbiorPrzesylkiOdNadawcyType $odbiorPrzesylkiOdNadawcy = null): self
    {
        $this->odbiorPrzesylkiOdNadawcy = $odbiorPrzesylkiOdNadawcy;
        
        return $this;
    }
    /**
     * Get potwierdzenieDoreczenia value
     * @return \App\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType|null
     */
    public function getPotwierdzenieDoreczenia(): ?\App\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType
    {
        return $this->potwierdzenieDoreczenia;
    }
    /**
     * Set potwierdzenieDoreczenia value
     * @param \App\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     * @return \App\ElektronicznyNadawca\StructType\UslugaKurierskaType
     */
    public function setPotwierdzenieDoreczenia(?\App\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null): self
    {
        $this->potwierdzenieDoreczenia = $potwierdzenieDoreczenia;
        
        return $this;
    }
    /**
     * Get urzadWydaniaEPrzesylki value
     * @return \App\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType|null
     */
    public function getUrzadWydaniaEPrzesylki(): ?\App\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType
    {
        return $this->urzadWydaniaEPrzesylki ?? null;
    }
    /**
     * Set urzadWydaniaEPrzesylki value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \App\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki
     * @return \App\ElektronicznyNadawca\StructType\UslugaKurierskaType
     */
    public function setUrzadWydaniaEPrzesylki(?\App\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki = null): self
    {
        if (is_null($urzadWydaniaEPrzesylki) || (is_array($urzadWydaniaEPrzesylki) && empty($urzadWydaniaEPrzesylki))) {
            unset($this->urzadWydaniaEPrzesylki);
        } else {
            $this->urzadWydaniaEPrzesylki = $urzadWydaniaEPrzesylki;
        }
        
        return $this;
    }
    /**
     * Get potwierdzenieOdbioru value
     * @return \App\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruKurierskaType|null
     */
    public function getPotwierdzenieOdbioru(): ?\App\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruKurierskaType
    {
        return $this->potwierdzenieOdbioru;
    }
    /**
     * Set potwierdzenieOdbioru value
     * @param \App\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruKurierskaType $potwierdzenieOdbioru
     * @return \App\ElektronicznyNadawca\StructType\UslugaKurierskaType
     */
    public function setPotwierdzenieOdbioru(?\App\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruKurierskaType $potwierdzenieOdbioru = null): self
    {
        $this->potwierdzenieOdbioru = $potwierdzenieOdbioru;
        
        return $this;
    }
    /**
     * Get ubezpieczenie value
     * @return \App\ElektronicznyNadawca\StructType\UbezpieczenieType|null
     */
    public function getUbezpieczenie(): ?\App\ElektronicznyNadawca\StructType\UbezpieczenieType
    {
        return $this->ubezpieczenie;
    }
    /**
     * Set ubezpieczenie value
     * @param \App\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie
     * @return \App\ElektronicznyNadawca\StructType\UslugaKurierskaType
     */
    public function setUbezpieczenie(?\App\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie = null): self
    {
        $this->ubezpieczenie = $ubezpieczenie;
        
        return $this;
    }
    /**
     * Get zwrotDokumentow value
     * @return \App\ElektronicznyNadawca\StructType\ZwrotDokumentowKurierskaType|null
     */
    public function getZwrotDokumentow(): ?\App\ElektronicznyNadawca\StructType\ZwrotDokumentowKurierskaType
    {
        return $this->zwrotDokumentow;
    }
    /**
     * Set zwrotDokumentow value
     * @param \App\ElektronicznyNadawca\StructType\ZwrotDokumentowKurierskaType $zwrotDokumentow
     * @return \App\ElektronicznyNadawca\StructType\UslugaKurierskaType
     */
    public function setZwrotDokumentow(?\App\ElektronicznyNadawca\StructType\ZwrotDokumentowKurierskaType $zwrotDokumentow = null): self
    {
        $this->zwrotDokumentow = $zwrotDokumentow;
        
        return $this;
    }
    /**
     * Get idDokumentyZwrotneAdresy value
     * @return int|null
     */
    public function getIdDokumentyZwrotneAdresy(): ?int
    {
        return $this->idDokumentyZwrotneAdresy;
    }
    /**
     * Set idDokumentyZwrotneAdresy value
     * @param int $idDokumentyZwrotneAdresy
     * @return \App\ElektronicznyNadawca\StructType\UslugaKurierskaType
     */
    public function setIdDokumentyZwrotneAdresy(?int $idDokumentyZwrotneAdresy = null): self
    {
        $this->idDokumentyZwrotneAdresy = $idDokumentyZwrotneAdresy;
        
        return $this;
    }
    /**
     * Get doreczenie value
     * @return \App\ElektronicznyNadawca\StructType\DoreczenieUslugaKurierskaType|null
     */
    public function getDoreczenie(): ?\App\ElektronicznyNadawca\StructType\DoreczenieUslugaKurierskaType
    {
        return $this->doreczenie;
    }
    /**
     * Set doreczenie value
     * @param \App\ElektronicznyNadawca\StructType\DoreczenieUslugaKurierskaType $doreczenie
     * @return \App\ElektronicznyNadawca\StructType\UslugaKurierskaType
     */
    public function setDoreczenie(?\App\ElektronicznyNadawca\StructType\DoreczenieUslugaKurierskaType $doreczenie = null): self
    {
        $this->doreczenie = $doreczenie;
        
        return $this;
    }
    /**
     * Get epo value
     * @return \App\ElektronicznyNadawca\StructType\EPOType|null
     */
    public function getEpo(): ?\App\ElektronicznyNadawca\StructType\EPOType
    {
        return $this->epo;
    }
    /**
     * Set epo value
     * @param \App\ElektronicznyNadawca\StructType\EPOType $epo
     * @return \App\ElektronicznyNadawca\StructType\UslugaKurierskaType
     */
    public function setEpo(?\App\ElektronicznyNadawca\StructType\EPOType $epo = null): self
    {
        $this->epo = $epo;
        
        return $this;
    }
    /**
     * Get adresDlaZwrotu value
     * @return \App\ElektronicznyNadawca\StructType\AdresType|null
     */
    public function getAdresDlaZwrotu(): ?\App\ElektronicznyNadawca\StructType\AdresType
    {
        return $this->adresDlaZwrotu;
    }
    /**
     * Set adresDlaZwrotu value
     * @param \App\ElektronicznyNadawca\StructType\AdresType $adresDlaZwrotu
     * @return \App\ElektronicznyNadawca\StructType\UslugaKurierskaType
     */
    public function setAdresDlaZwrotu(?\App\ElektronicznyNadawca\StructType\AdresType $adresDlaZwrotu = null): self
    {
        $this->adresDlaZwrotu = $adresDlaZwrotu;
        
        return $this;
    }
    /**
     * Get zasadySpecjalne value
     * @return string|null
     */
    public function getZasadySpecjalne(): ?string
    {
        return $this->zasadySpecjalne;
    }
    /**
     * Set zasadySpecjalne value
     * @param string $zasadySpecjalne
     * @return \App\ElektronicznyNadawca\StructType\UslugaKurierskaType
     */
    public function setZasadySpecjalne(?string $zasadySpecjalne = null): self
    {
        $this->zasadySpecjalne = $zasadySpecjalne;
        
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
     * @return \App\ElektronicznyNadawca\StructType\UslugaKurierskaType
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
     * @return \App\ElektronicznyNadawca\StructType\UslugaKurierskaType
     */
    public function setWartosc(?int $wartosc = null): self
    {
        $this->wartosc = $wartosc;
        
        return $this;
    }
    /**
     * Get ponadgabaryt value
     * @return bool|null
     */
    public function getPonadgabaryt(): ?bool
    {
        return $this->ponadgabaryt;
    }
    /**
     * Set ponadgabaryt value
     * @param bool $ponadgabaryt
     * @return \App\ElektronicznyNadawca\StructType\UslugaKurierskaType
     */
    public function setPonadgabaryt(?bool $ponadgabaryt = null): self
    {
        $this->ponadgabaryt = $ponadgabaryt;
        
        return $this;
    }
    /**
     * Get odleglosc value
     * @return int|null
     */
    public function getOdleglosc(): ?int
    {
        return $this->odleglosc;
    }
    /**
     * Set odleglosc value
     * @param int $odleglosc
     * @return \App\ElektronicznyNadawca\StructType\UslugaKurierskaType
     */
    public function setOdleglosc(?int $odleglosc = null): self
    {
        $this->odleglosc = $odleglosc;
        
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
     * @return \App\ElektronicznyNadawca\StructType\UslugaKurierskaType
     */
    public function setZawartosc(?string $zawartosc = null): self
    {
        $this->zawartosc = $zawartosc;
        
        return $this;
    }
    /**
     * Get sprawdzenieZawartosciPrzesylkiPrzezOdbiorce value
     * @return bool|null
     */
    public function getSprawdzenieZawartosciPrzesylkiPrzezOdbiorce(): ?bool
    {
        return $this->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;
    }
    /**
     * Set sprawdzenieZawartosciPrzesylkiPrzezOdbiorce value
     * @param bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     * @return \App\ElektronicznyNadawca\StructType\UslugaKurierskaType
     */
    public function setSprawdzenieZawartosciPrzesylkiPrzezOdbiorce(?bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = null): self
    {
        $this->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;
        
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
     * @return \App\ElektronicznyNadawca\StructType\UslugaKurierskaType
     */
    public function setOstroznie(?bool $ostroznie = null): self
    {
        $this->ostroznie = $ostroznie;
        
        return $this;
    }
    /**
     * Get uiszczaOplate value
     * @return string|null
     */
    public function getUiszczaOplate(): ?string
    {
        return $this->uiszczaOplate;
    }
    /**
     * Set uiszczaOplate value
     * @param string $uiszczaOplate
     * @return \App\ElektronicznyNadawca\StructType\UslugaKurierskaType
     */
    public function setUiszczaOplate(?string $uiszczaOplate = null): self
    {
        $this->uiszczaOplate = $uiszczaOplate;
        
        return $this;
    }
    /**
     * Get termin value
     * @return string|null
     */
    public function getTermin(): ?string
    {
        return $this->termin;
    }
    /**
     * Set termin value
     * @param string $termin
     * @return \App\ElektronicznyNadawca\StructType\UslugaKurierskaType
     */
    public function setTermin(?string $termin = null): self
    {
        $this->termin = $termin;
        
        return $this;
    }
    /**
     * Get opakowanie value
     * @return string|null
     */
    public function getOpakowanie(): ?string
    {
        return $this->opakowanie;
    }
    /**
     * Set opakowanie value
     * @param string $opakowanie
     * @return \App\ElektronicznyNadawca\StructType\UslugaKurierskaType
     */
    public function setOpakowanie(?string $opakowanie = null): self
    {
        $this->opakowanie = $opakowanie;
        
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
     * @return \App\ElektronicznyNadawca\StructType\UslugaKurierskaType
     */
    public function setNumerPrzesylkiKlienta(?string $numerPrzesylkiKlienta = null): self
    {
        $this->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;
        
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
     * @return \App\ElektronicznyNadawca\StructType\UslugaKurierskaType
     */
    public function setNumerTransakcjiOdbioru(?string $numerTransakcjiOdbioru = null): self
    {
        $this->numerTransakcjiOdbioru = $numerTransakcjiOdbioru;
        
        return $this;
    }
}
