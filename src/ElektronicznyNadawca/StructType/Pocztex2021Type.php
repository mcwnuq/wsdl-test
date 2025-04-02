<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for pocztex2021Type StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
abstract class Pocztex2021Type extends PrzesylkaRejestrowanaType
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
     * The potwierdzenieDoreczenia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\PotwierdzenieEDoreczeniaType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\PotwierdzenieEDoreczeniaType $potwierdzenieDoreczenia = null;
    /**
     * The potwierdzenieOdbioru
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruPocztex2021Type|null
     */
    public ?\App\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruPocztex2021Type $potwierdzenieOdbioru = null;
    /**
     * The ubezpieczenie
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\UbezpieczenieType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie = null;
    /**
     * The masa
     * Meta information extracted from the WSDL
     * - documentation: masa przesyłki podana w gramach
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - maxOccurs: 1
     * - minInclusive: 1
     * - minOccurs: 0
     * @var int|null
     */
    public ?int $masa = null;
    /**
     * The wartosc
     * Meta information extracted from the WSDL
     * - documentation: zadeklarowana wartość przesyłki w groszach
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * @var int|null
     */
    public ?int $wartosc = null;
    /**
     * The ostroznie
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    public ?bool $ostroznie = null;
    /**
     * The ponadgabaryt
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    public ?bool $ponadgabaryt = null;
    /**
     * The format
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $format = null;
    /**
     * The numerPrzesylkiKlienta
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 25
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $numerPrzesylkiKlienta = null;
    /**
     * The zwrotDokumentow
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $zwrotDokumentow = null;
    /**
     * The idDokumentyZwrotneAdresy
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    public ?int $idDokumentyZwrotneAdresy = null;
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
     * The odbiorWSobote
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    public ?bool $odbiorWSobote = null;
    /**
     * The zasadySpecjalne
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $zasadySpecjalne = null;
    /**
     * The zawartosc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\ZawartoscPocztex2021Type|null
     */
    public ?\App\ElektronicznyNadawca\StructType\ZawartoscPocztex2021Type $zawartosc = null;
    /**
     * The sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    public ?bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = null;
    /**
     * The uiszczaOplate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $uiszczaOplate = null;
    /**
     * The doreczenieDoRakWlasnych
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    public ?bool $doreczenieDoRakWlasnych = null;
    /**
     * Constructor method for pocztex2021Type
     * @uses Pocztex2021Type::setPobranie()
     * @uses Pocztex2021Type::setPotwierdzenieDoreczenia()
     * @uses Pocztex2021Type::setPotwierdzenieOdbioru()
     * @uses Pocztex2021Type::setUbezpieczenie()
     * @uses Pocztex2021Type::setMasa()
     * @uses Pocztex2021Type::setWartosc()
     * @uses Pocztex2021Type::setOstroznie()
     * @uses Pocztex2021Type::setPonadgabaryt()
     * @uses Pocztex2021Type::setFormat()
     * @uses Pocztex2021Type::setNumerPrzesylkiKlienta()
     * @uses Pocztex2021Type::setZwrotDokumentow()
     * @uses Pocztex2021Type::setIdDokumentyZwrotneAdresy()
     * @uses Pocztex2021Type::setEpo()
     * @uses Pocztex2021Type::setAdresDlaZwrotu()
     * @uses Pocztex2021Type::setOdbiorWSobote()
     * @uses Pocztex2021Type::setZasadySpecjalne()
     * @uses Pocztex2021Type::setZawartosc()
     * @uses Pocztex2021Type::setSprawdzenieZawartosciPrzesylkiPrzezOdbiorce()
     * @uses Pocztex2021Type::setUiszczaOplate()
     * @uses Pocztex2021Type::setDoreczenieDoRakWlasnych()
     * @param \App\ElektronicznyNadawca\StructType\PobranieType $pobranie
     * @param \App\ElektronicznyNadawca\StructType\PotwierdzenieEDoreczeniaType $potwierdzenieDoreczenia
     * @param \App\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruPocztex2021Type $potwierdzenieOdbioru
     * @param \App\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie
     * @param int $masa
     * @param int $wartosc
     * @param bool $ostroznie
     * @param bool $ponadgabaryt
     * @param string $format
     * @param string $numerPrzesylkiKlienta
     * @param string $zwrotDokumentow
     * @param int $idDokumentyZwrotneAdresy
     * @param \App\ElektronicznyNadawca\StructType\EPOType $epo
     * @param \App\ElektronicznyNadawca\StructType\AdresType $adresDlaZwrotu
     * @param bool $odbiorWSobote
     * @param string $zasadySpecjalne
     * @param \App\ElektronicznyNadawca\StructType\ZawartoscPocztex2021Type $zawartosc
     * @param bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     * @param string $uiszczaOplate
     * @param bool $doreczenieDoRakWlasnych
     */
    public function __construct(?\App\ElektronicznyNadawca\StructType\PobranieType $pobranie = null, ?\App\ElektronicznyNadawca\StructType\PotwierdzenieEDoreczeniaType $potwierdzenieDoreczenia = null, ?\App\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruPocztex2021Type $potwierdzenieOdbioru = null, ?\App\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie = null, ?int $masa = null, ?int $wartosc = null, ?bool $ostroznie = null, ?bool $ponadgabaryt = null, ?string $format = null, ?string $numerPrzesylkiKlienta = null, ?string $zwrotDokumentow = null, ?int $idDokumentyZwrotneAdresy = null, ?\App\ElektronicznyNadawca\StructType\EPOType $epo = null, ?\App\ElektronicznyNadawca\StructType\AdresType $adresDlaZwrotu = null, ?bool $odbiorWSobote = null, ?string $zasadySpecjalne = null, ?\App\ElektronicznyNadawca\StructType\ZawartoscPocztex2021Type $zawartosc = null, ?bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = null, ?string $uiszczaOplate = null, ?bool $doreczenieDoRakWlasnych = null)
    {
        $this
            ->setPobranie($pobranie)
            ->setPotwierdzenieDoreczenia($potwierdzenieDoreczenia)
            ->setPotwierdzenieOdbioru($potwierdzenieOdbioru)
            ->setUbezpieczenie($ubezpieczenie)
            ->setMasa($masa)
            ->setWartosc($wartosc)
            ->setOstroznie($ostroznie)
            ->setPonadgabaryt($ponadgabaryt)
            ->setFormat($format)
            ->setNumerPrzesylkiKlienta($numerPrzesylkiKlienta)
            ->setZwrotDokumentow($zwrotDokumentow)
            ->setIdDokumentyZwrotneAdresy($idDokumentyZwrotneAdresy)
            ->setEpo($epo)
            ->setAdresDlaZwrotu($adresDlaZwrotu)
            ->setOdbiorWSobote($odbiorWSobote)
            ->setZasadySpecjalne($zasadySpecjalne)
            ->setZawartosc($zawartosc)
            ->setSprawdzenieZawartosciPrzesylkiPrzezOdbiorce($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce)
            ->setUiszczaOplate($uiszczaOplate)
            ->setDoreczenieDoRakWlasnych($doreczenieDoRakWlasnych);
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
     * @return \App\ElektronicznyNadawca\StructType\Pocztex2021Type
     */
    public function setPobranie(?\App\ElektronicznyNadawca\StructType\PobranieType $pobranie = null): self
    {
        $this->pobranie = $pobranie;
        
        return $this;
    }
    /**
     * Get potwierdzenieDoreczenia value
     * @return \App\ElektronicznyNadawca\StructType\PotwierdzenieEDoreczeniaType|null
     */
    public function getPotwierdzenieDoreczenia(): ?\App\ElektronicznyNadawca\StructType\PotwierdzenieEDoreczeniaType
    {
        return $this->potwierdzenieDoreczenia;
    }
    /**
     * Set potwierdzenieDoreczenia value
     * @param \App\ElektronicznyNadawca\StructType\PotwierdzenieEDoreczeniaType $potwierdzenieDoreczenia
     * @return \App\ElektronicznyNadawca\StructType\Pocztex2021Type
     */
    public function setPotwierdzenieDoreczenia(?\App\ElektronicznyNadawca\StructType\PotwierdzenieEDoreczeniaType $potwierdzenieDoreczenia = null): self
    {
        $this->potwierdzenieDoreczenia = $potwierdzenieDoreczenia;
        
        return $this;
    }
    /**
     * Get potwierdzenieOdbioru value
     * @return \App\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruPocztex2021Type|null
     */
    public function getPotwierdzenieOdbioru(): ?\App\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruPocztex2021Type
    {
        return $this->potwierdzenieOdbioru;
    }
    /**
     * Set potwierdzenieOdbioru value
     * @param \App\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruPocztex2021Type $potwierdzenieOdbioru
     * @return \App\ElektronicznyNadawca\StructType\Pocztex2021Type
     */
    public function setPotwierdzenieOdbioru(?\App\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruPocztex2021Type $potwierdzenieOdbioru = null): self
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
     * @return \App\ElektronicznyNadawca\StructType\Pocztex2021Type
     */
    public function setUbezpieczenie(?\App\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie = null): self
    {
        $this->ubezpieczenie = $ubezpieczenie;
        
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
     * @return \App\ElektronicznyNadawca\StructType\Pocztex2021Type
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
     * @return \App\ElektronicznyNadawca\StructType\Pocztex2021Type
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
     * @return \App\ElektronicznyNadawca\StructType\Pocztex2021Type
     */
    public function setOstroznie(?bool $ostroznie = null): self
    {
        $this->ostroznie = $ostroznie;
        
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
     * @return \App\ElektronicznyNadawca\StructType\Pocztex2021Type
     */
    public function setPonadgabaryt(?bool $ponadgabaryt = null): self
    {
        $this->ponadgabaryt = $ponadgabaryt;
        
        return $this;
    }
    /**
     * Get format value
     * @return string|null
     */
    public function getFormat(): ?string
    {
        return $this->format;
    }
    /**
     * Set format value
     * @param string $format
     * @return \App\ElektronicznyNadawca\StructType\Pocztex2021Type
     */
    public function setFormat(?string $format = null): self
    {
        $this->format = $format;
        
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
     * @return \App\ElektronicznyNadawca\StructType\Pocztex2021Type
     */
    public function setNumerPrzesylkiKlienta(?string $numerPrzesylkiKlienta = null): self
    {
        $this->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;
        
        return $this;
    }
    /**
     * Get zwrotDokumentow value
     * @return string|null
     */
    public function getZwrotDokumentow(): ?string
    {
        return $this->zwrotDokumentow;
    }
    /**
     * Set zwrotDokumentow value
     * @param string $zwrotDokumentow
     * @return \App\ElektronicznyNadawca\StructType\Pocztex2021Type
     */
    public function setZwrotDokumentow(?string $zwrotDokumentow = null): self
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
     * @return \App\ElektronicznyNadawca\StructType\Pocztex2021Type
     */
    public function setIdDokumentyZwrotneAdresy(?int $idDokumentyZwrotneAdresy = null): self
    {
        $this->idDokumentyZwrotneAdresy = $idDokumentyZwrotneAdresy;
        
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
     * @return \App\ElektronicznyNadawca\StructType\Pocztex2021Type
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
     * @return \App\ElektronicznyNadawca\StructType\Pocztex2021Type
     */
    public function setAdresDlaZwrotu(?\App\ElektronicznyNadawca\StructType\AdresType $adresDlaZwrotu = null): self
    {
        $this->adresDlaZwrotu = $adresDlaZwrotu;
        
        return $this;
    }
    /**
     * Get odbiorWSobote value
     * @return bool|null
     */
    public function getOdbiorWSobote(): ?bool
    {
        return $this->odbiorWSobote;
    }
    /**
     * Set odbiorWSobote value
     * @param bool $odbiorWSobote
     * @return \App\ElektronicznyNadawca\StructType\Pocztex2021Type
     */
    public function setOdbiorWSobote(?bool $odbiorWSobote = null): self
    {
        $this->odbiorWSobote = $odbiorWSobote;
        
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
     * @return \App\ElektronicznyNadawca\StructType\Pocztex2021Type
     */
    public function setZasadySpecjalne(?string $zasadySpecjalne = null): self
    {
        $this->zasadySpecjalne = $zasadySpecjalne;
        
        return $this;
    }
    /**
     * Get zawartosc value
     * @return \App\ElektronicznyNadawca\StructType\ZawartoscPocztex2021Type|null
     */
    public function getZawartosc(): ?\App\ElektronicznyNadawca\StructType\ZawartoscPocztex2021Type
    {
        return $this->zawartosc;
    }
    /**
     * Set zawartosc value
     * @param \App\ElektronicznyNadawca\StructType\ZawartoscPocztex2021Type $zawartosc
     * @return \App\ElektronicznyNadawca\StructType\Pocztex2021Type
     */
    public function setZawartosc(?\App\ElektronicznyNadawca\StructType\ZawartoscPocztex2021Type $zawartosc = null): self
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
     * @return \App\ElektronicznyNadawca\StructType\Pocztex2021Type
     */
    public function setSprawdzenieZawartosciPrzesylkiPrzezOdbiorce(?bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = null): self
    {
        $this->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;
        
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
     * @return \App\ElektronicznyNadawca\StructType\Pocztex2021Type
     */
    public function setUiszczaOplate(?string $uiszczaOplate = null): self
    {
        $this->uiszczaOplate = $uiszczaOplate;
        
        return $this;
    }
    /**
     * Get doreczenieDoRakWlasnych value
     * @return bool|null
     */
    public function getDoreczenieDoRakWlasnych(): ?bool
    {
        return $this->doreczenieDoRakWlasnych;
    }
    /**
     * Set doreczenieDoRakWlasnych value
     * @param bool $doreczenieDoRakWlasnych
     * @return \App\ElektronicznyNadawca\StructType\Pocztex2021Type
     */
    public function setDoreczenieDoRakWlasnych(?bool $doreczenieDoRakWlasnych = null): self
    {
        $this->doreczenieDoRakWlasnych = $doreczenieDoRakWlasnych;
        
        return $this;
    }
}
