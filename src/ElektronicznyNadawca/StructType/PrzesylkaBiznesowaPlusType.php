<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for przesylkaBiznesowaPlusType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrzesylkaBiznesowaPlusType extends PrzesylkaRejestrowanaType
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
     * The urzadWydaniaPrzesylki
     * Meta information extracted from the WSDL
     * - documentation: Wystarczy przesłac obiekt z ustawionym id reszta pól moż ezostać pominięta (aby zmniejszyć ilośc danych do tansmisji)
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\PlacowkaPocztowaType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\PlacowkaPocztowaType $urzadWydaniaPrzesylki = null;
    /**
     * The subPrzesylka
     * Meta information extracted from the WSDL
     * - maxOccurs: 100
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\SubPrzesylkaBiznesowaPlusType[]
     */
    public ?array $subPrzesylka = null;
    /**
     * The dataDrugiejProbyDoreczenia
     * Meta information extracted from the WSDL
     * - choice: dataDrugiejProbyDoreczenia | drugaProbaDoreczeniaPoLiczbieDni
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * @var string|null
     */
    public ?string $dataDrugiejProbyDoreczenia = null;
    /**
     * The drugaProbaDoreczeniaPoLiczbieDni
     * Meta information extracted from the WSDL
     * - choice: dataDrugiejProbyDoreczenia | drugaProbaDoreczeniaPoLiczbieDni
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * @var int|null
     */
    public ?int $drugaProbaDoreczeniaPoLiczbieDni = null;
    /**
     * The sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    public ?bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = null;
    /**
     * The potwierdzenieOdbioru
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruBiznesowaType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruBiznesowaType $potwierdzenieOdbioru = null;
    /**
     * The doreczenie
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\DoreczenieBiznesowaType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\DoreczenieBiznesowaType $doreczenie = null;
    /**
     * The zwrotDokumentow
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\ZwrotDokumentowBiznesowaType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\ZwrotDokumentowBiznesowaType $zwrotDokumentow = null;
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
     * The kwotaTranzakcji
     * Meta information extracted from the WSDL
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - minInclusive: 0
     * @var int|null
     */
    public ?int $kwotaTranzakcji = null;
    /**
     * The ostroznie
     * @var bool|null
     */
    public ?bool $ostroznie = null;
    /**
     * The kategoria
     * @var string|null
     */
    public ?string $kategoria = null;
    /**
     * The iloscPotwierdzenOdbioru
     * Meta information extracted from the WSDL
     * - documentation: atrybut nieużywany, użyj potwierdzenieOdbioru
     * - base: xsd:int
     * - maxInclusive: 9
     * - minInclusive: 0
     * @var int|null
     */
    public ?int $iloscPotwierdzenOdbioru = null;
    /**
     * The eKontaktAdresata
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 50
     * - minLength: 0
     * @var string|null
     */
    public ?string $eKontaktAdresata = null;
    /**
     * The eSposobPowiadomieniaAdresata
     * @var string|null
     */
    public ?string $eSposobPowiadomieniaAdresata = null;
    /**
     * The numerPrzesylkiKlienta
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 25
     * @var string|null
     */
    public ?string $numerPrzesylkiKlienta = null;
    /**
     * The iloscDniOczekiwaniaNaWydanie
     * @var int|null
     */
    public ?int $iloscDniOczekiwaniaNaWydanie = null;
    /**
     * The oczekiwanyTerminDoreczenia
     * @var string|null
     */
    public ?string $oczekiwanyTerminDoreczenia = null;
    /**
     * The terminRodzajPlus
     * @var string|null
     */
    public ?string $terminRodzajPlus = null;
    /**
     * The numerTransakcjiOdbioru
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 50
     * @var string|null
     */
    public ?string $numerTransakcjiOdbioru = null;
    /**
     * Constructor method for przesylkaBiznesowaPlusType
     * @uses PrzesylkaBiznesowaPlusType::setPobranie()
     * @uses PrzesylkaBiznesowaPlusType::setUrzadWydaniaPrzesylki()
     * @uses PrzesylkaBiznesowaPlusType::setSubPrzesylka()
     * @uses PrzesylkaBiznesowaPlusType::setDataDrugiejProbyDoreczenia()
     * @uses PrzesylkaBiznesowaPlusType::setDrugaProbaDoreczeniaPoLiczbieDni()
     * @uses PrzesylkaBiznesowaPlusType::setSprawdzenieZawartosciPrzesylkiPrzezOdbiorce()
     * @uses PrzesylkaBiznesowaPlusType::setPotwierdzenieOdbioru()
     * @uses PrzesylkaBiznesowaPlusType::setDoreczenie()
     * @uses PrzesylkaBiznesowaPlusType::setZwrotDokumentow()
     * @uses PrzesylkaBiznesowaPlusType::setPosteRestante()
     * @uses PrzesylkaBiznesowaPlusType::setMasa()
     * @uses PrzesylkaBiznesowaPlusType::setGabaryt()
     * @uses PrzesylkaBiznesowaPlusType::setWartosc()
     * @uses PrzesylkaBiznesowaPlusType::setKwotaTranzakcji()
     * @uses PrzesylkaBiznesowaPlusType::setOstroznie()
     * @uses PrzesylkaBiznesowaPlusType::setKategoria()
     * @uses PrzesylkaBiznesowaPlusType::setIloscPotwierdzenOdbioru()
     * @uses PrzesylkaBiznesowaPlusType::setEKontaktAdresata()
     * @uses PrzesylkaBiznesowaPlusType::setESposobPowiadomieniaAdresata()
     * @uses PrzesylkaBiznesowaPlusType::setNumerPrzesylkiKlienta()
     * @uses PrzesylkaBiznesowaPlusType::setIloscDniOczekiwaniaNaWydanie()
     * @uses PrzesylkaBiznesowaPlusType::setOczekiwanyTerminDoreczenia()
     * @uses PrzesylkaBiznesowaPlusType::setTerminRodzajPlus()
     * @uses PrzesylkaBiznesowaPlusType::setNumerTransakcjiOdbioru()
     * @param \App\ElektronicznyNadawca\StructType\PobranieType $pobranie
     * @param \App\ElektronicznyNadawca\StructType\PlacowkaPocztowaType $urzadWydaniaPrzesylki
     * @param \App\ElektronicznyNadawca\StructType\SubPrzesylkaBiznesowaPlusType[] $subPrzesylka
     * @param string $dataDrugiejProbyDoreczenia
     * @param int $drugaProbaDoreczeniaPoLiczbieDni
     * @param bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     * @param \App\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruBiznesowaType $potwierdzenieOdbioru
     * @param \App\ElektronicznyNadawca\StructType\DoreczenieBiznesowaType $doreczenie
     * @param \App\ElektronicznyNadawca\StructType\ZwrotDokumentowBiznesowaType $zwrotDokumentow
     * @param bool $posteRestante
     * @param int $masa
     * @param string $gabaryt
     * @param int $wartosc
     * @param int $kwotaTranzakcji
     * @param bool $ostroznie
     * @param string $kategoria
     * @param int $iloscPotwierdzenOdbioru
     * @param string $eKontaktAdresata
     * @param string $eSposobPowiadomieniaAdresata
     * @param string $numerPrzesylkiKlienta
     * @param int $iloscDniOczekiwaniaNaWydanie
     * @param string $oczekiwanyTerminDoreczenia
     * @param string $terminRodzajPlus
     * @param string $numerTransakcjiOdbioru
     */
    public function __construct(?\App\ElektronicznyNadawca\StructType\PobranieType $pobranie = null, ?\App\ElektronicznyNadawca\StructType\PlacowkaPocztowaType $urzadWydaniaPrzesylki = null, ?array $subPrzesylka = null, ?string $dataDrugiejProbyDoreczenia = null, ?int $drugaProbaDoreczeniaPoLiczbieDni = null, ?bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = null, ?\App\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruBiznesowaType $potwierdzenieOdbioru = null, ?\App\ElektronicznyNadawca\StructType\DoreczenieBiznesowaType $doreczenie = null, ?\App\ElektronicznyNadawca\StructType\ZwrotDokumentowBiznesowaType $zwrotDokumentow = null, ?bool $posteRestante = null, ?int $masa = null, ?string $gabaryt = null, ?int $wartosc = null, ?int $kwotaTranzakcji = null, ?bool $ostroznie = null, ?string $kategoria = null, ?int $iloscPotwierdzenOdbioru = null, ?string $eKontaktAdresata = null, ?string $eSposobPowiadomieniaAdresata = null, ?string $numerPrzesylkiKlienta = null, ?int $iloscDniOczekiwaniaNaWydanie = null, ?string $oczekiwanyTerminDoreczenia = null, ?string $terminRodzajPlus = null, ?string $numerTransakcjiOdbioru = null)
    {
        $this
            ->setPobranie($pobranie)
            ->setUrzadWydaniaPrzesylki($urzadWydaniaPrzesylki)
            ->setSubPrzesylka($subPrzesylka)
            ->setDataDrugiejProbyDoreczenia($dataDrugiejProbyDoreczenia)
            ->setDrugaProbaDoreczeniaPoLiczbieDni($drugaProbaDoreczeniaPoLiczbieDni)
            ->setSprawdzenieZawartosciPrzesylkiPrzezOdbiorce($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce)
            ->setPotwierdzenieOdbioru($potwierdzenieOdbioru)
            ->setDoreczenie($doreczenie)
            ->setZwrotDokumentow($zwrotDokumentow)
            ->setPosteRestante($posteRestante)
            ->setMasa($masa)
            ->setGabaryt($gabaryt)
            ->setWartosc($wartosc)
            ->setKwotaTranzakcji($kwotaTranzakcji)
            ->setOstroznie($ostroznie)
            ->setKategoria($kategoria)
            ->setIloscPotwierdzenOdbioru($iloscPotwierdzenOdbioru)
            ->setEKontaktAdresata($eKontaktAdresata)
            ->setESposobPowiadomieniaAdresata($eSposobPowiadomieniaAdresata)
            ->setNumerPrzesylkiKlienta($numerPrzesylkiKlienta)
            ->setIloscDniOczekiwaniaNaWydanie($iloscDniOczekiwaniaNaWydanie)
            ->setOczekiwanyTerminDoreczenia($oczekiwanyTerminDoreczenia)
            ->setTerminRodzajPlus($terminRodzajPlus)
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setPobranie(?\App\ElektronicznyNadawca\StructType\PobranieType $pobranie = null): self
    {
        $this->pobranie = $pobranie;
        
        return $this;
    }
    /**
     * Get urzadWydaniaPrzesylki value
     * @return \App\ElektronicznyNadawca\StructType\PlacowkaPocztowaType|null
     */
    public function getUrzadWydaniaPrzesylki(): ?\App\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
    {
        return $this->urzadWydaniaPrzesylki;
    }
    /**
     * Set urzadWydaniaPrzesylki value
     * @param \App\ElektronicznyNadawca\StructType\PlacowkaPocztowaType $urzadWydaniaPrzesylki
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setUrzadWydaniaPrzesylki(?\App\ElektronicznyNadawca\StructType\PlacowkaPocztowaType $urzadWydaniaPrzesylki = null): self
    {
        $this->urzadWydaniaPrzesylki = $urzadWydaniaPrzesylki;
        
        return $this;
    }
    /**
     * Get subPrzesylka value
     * @return \App\ElektronicznyNadawca\StructType\SubPrzesylkaBiznesowaPlusType[]
     */
    public function getSubPrzesylka(): ?array
    {
        return $this->subPrzesylka;
    }
    /**
     * Set subPrzesylka value
     * @param \App\ElektronicznyNadawca\StructType\SubPrzesylkaBiznesowaPlusType[] $subPrzesylka
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setSubPrzesylka(?array $subPrzesylka = null): self
    {
        $this->subPrzesylka = $subPrzesylka;
        
        return $this;
    }
    /**
     * Add item to subPrzesylka value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\SubPrzesylkaBiznesowaPlusType $item
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaPlusType
     */
    public function addToSubPrzesylka(\App\ElektronicznyNadawca\StructType\SubPrzesylkaBiznesowaPlusType $item): self
    {
        $this->subPrzesylka[] = $item;
        
        return $this;
    }
    /**
     * Get dataDrugiejProbyDoreczenia value
     * @return string|null
     */
    public function getDataDrugiejProbyDoreczenia(): ?string
    {
        return $this->dataDrugiejProbyDoreczenia ?? null;
    }
    /**
     * Set dataDrugiejProbyDoreczenia value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param string $dataDrugiejProbyDoreczenia
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setDataDrugiejProbyDoreczenia(?string $dataDrugiejProbyDoreczenia = null): self
    {
        if (is_null($dataDrugiejProbyDoreczenia) || (is_array($dataDrugiejProbyDoreczenia) && empty($dataDrugiejProbyDoreczenia))) {
            unset($this->dataDrugiejProbyDoreczenia);
        } else {
            $this->dataDrugiejProbyDoreczenia = $dataDrugiejProbyDoreczenia;
        }
        
        return $this;
    }
    /**
     * Get drugaProbaDoreczeniaPoLiczbieDni value
     * @return int|null
     */
    public function getDrugaProbaDoreczeniaPoLiczbieDni(): ?int
    {
        return $this->drugaProbaDoreczeniaPoLiczbieDni ?? null;
    }
    /**
     * Set drugaProbaDoreczeniaPoLiczbieDni value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param int $drugaProbaDoreczeniaPoLiczbieDni
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setDrugaProbaDoreczeniaPoLiczbieDni(?int $drugaProbaDoreczeniaPoLiczbieDni = null): self
    {
        if (is_null($drugaProbaDoreczeniaPoLiczbieDni) || (is_array($drugaProbaDoreczeniaPoLiczbieDni) && empty($drugaProbaDoreczeniaPoLiczbieDni))) {
            unset($this->drugaProbaDoreczeniaPoLiczbieDni);
        } else {
            $this->drugaProbaDoreczeniaPoLiczbieDni = $drugaProbaDoreczeniaPoLiczbieDni;
        }
        
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setSprawdzenieZawartosciPrzesylkiPrzezOdbiorce(?bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = null): self
    {
        $this->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;
        
        return $this;
    }
    /**
     * Get potwierdzenieOdbioru value
     * @return \App\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruBiznesowaType|null
     */
    public function getPotwierdzenieOdbioru(): ?\App\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruBiznesowaType
    {
        return $this->potwierdzenieOdbioru;
    }
    /**
     * Set potwierdzenieOdbioru value
     * @param \App\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruBiznesowaType $potwierdzenieOdbioru
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setPotwierdzenieOdbioru(?\App\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruBiznesowaType $potwierdzenieOdbioru = null): self
    {
        $this->potwierdzenieOdbioru = $potwierdzenieOdbioru;
        
        return $this;
    }
    /**
     * Get doreczenie value
     * @return \App\ElektronicznyNadawca\StructType\DoreczenieBiznesowaType|null
     */
    public function getDoreczenie(): ?\App\ElektronicznyNadawca\StructType\DoreczenieBiznesowaType
    {
        return $this->doreczenie;
    }
    /**
     * Set doreczenie value
     * @param \App\ElektronicznyNadawca\StructType\DoreczenieBiznesowaType $doreczenie
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setDoreczenie(?\App\ElektronicznyNadawca\StructType\DoreczenieBiznesowaType $doreczenie = null): self
    {
        $this->doreczenie = $doreczenie;
        
        return $this;
    }
    /**
     * Get zwrotDokumentow value
     * @return \App\ElektronicznyNadawca\StructType\ZwrotDokumentowBiznesowaType|null
     */
    public function getZwrotDokumentow(): ?\App\ElektronicznyNadawca\StructType\ZwrotDokumentowBiznesowaType
    {
        return $this->zwrotDokumentow;
    }
    /**
     * Set zwrotDokumentow value
     * @param \App\ElektronicznyNadawca\StructType\ZwrotDokumentowBiznesowaType $zwrotDokumentow
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setZwrotDokumentow(?\App\ElektronicznyNadawca\StructType\ZwrotDokumentowBiznesowaType $zwrotDokumentow = null): self
    {
        $this->zwrotDokumentow = $zwrotDokumentow;
        
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaPlusType
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaPlusType
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaPlusType
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setWartosc(?int $wartosc = null): self
    {
        $this->wartosc = $wartosc;
        
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setKwotaTranzakcji(?int $kwotaTranzakcji = null): self
    {
        $this->kwotaTranzakcji = $kwotaTranzakcji;
        
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setOstroznie(?bool $ostroznie = null): self
    {
        $this->ostroznie = $ostroznie;
        
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaPlusType
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setIloscPotwierdzenOdbioru(?int $iloscPotwierdzenOdbioru = null): self
    {
        $this->iloscPotwierdzenOdbioru = $iloscPotwierdzenOdbioru;
        
        return $this;
    }
    /**
     * Get eKontaktAdresata value
     * @return string|null
     */
    public function getEKontaktAdresata(): ?string
    {
        return $this->eKontaktAdresata;
    }
    /**
     * Set eKontaktAdresata value
     * @param string $eKontaktAdresata
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setEKontaktAdresata(?string $eKontaktAdresata = null): self
    {
        $this->eKontaktAdresata = $eKontaktAdresata;
        
        return $this;
    }
    /**
     * Get eSposobPowiadomieniaAdresata value
     * @return string|null
     */
    public function getESposobPowiadomieniaAdresata(): ?string
    {
        return $this->eSposobPowiadomieniaAdresata;
    }
    /**
     * Set eSposobPowiadomieniaAdresata value
     * @param string $eSposobPowiadomieniaAdresata
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setESposobPowiadomieniaAdresata(?string $eSposobPowiadomieniaAdresata = null): self
    {
        $this->eSposobPowiadomieniaAdresata = $eSposobPowiadomieniaAdresata;
        
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setNumerPrzesylkiKlienta(?string $numerPrzesylkiKlienta = null): self
    {
        $this->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;
        
        return $this;
    }
    /**
     * Get iloscDniOczekiwaniaNaWydanie value
     * @return int|null
     */
    public function getIloscDniOczekiwaniaNaWydanie(): ?int
    {
        return $this->iloscDniOczekiwaniaNaWydanie;
    }
    /**
     * Set iloscDniOczekiwaniaNaWydanie value
     * @param int $iloscDniOczekiwaniaNaWydanie
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setIloscDniOczekiwaniaNaWydanie(?int $iloscDniOczekiwaniaNaWydanie = null): self
    {
        $this->iloscDniOczekiwaniaNaWydanie = $iloscDniOczekiwaniaNaWydanie;
        
        return $this;
    }
    /**
     * Get oczekiwanyTerminDoreczenia value
     * @return string|null
     */
    public function getOczekiwanyTerminDoreczenia(): ?string
    {
        return $this->oczekiwanyTerminDoreczenia;
    }
    /**
     * Set oczekiwanyTerminDoreczenia value
     * @param string $oczekiwanyTerminDoreczenia
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setOczekiwanyTerminDoreczenia(?string $oczekiwanyTerminDoreczenia = null): self
    {
        $this->oczekiwanyTerminDoreczenia = $oczekiwanyTerminDoreczenia;
        
        return $this;
    }
    /**
     * Get terminRodzajPlus value
     * @return string|null
     */
    public function getTerminRodzajPlus(): ?string
    {
        return $this->terminRodzajPlus;
    }
    /**
     * Set terminRodzajPlus value
     * @param string $terminRodzajPlus
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setTerminRodzajPlus(?string $terminRodzajPlus = null): self
    {
        $this->terminRodzajPlus = $terminRodzajPlus;
        
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setNumerTransakcjiOdbioru(?string $numerTransakcjiOdbioru = null): self
    {
        $this->numerTransakcjiOdbioru = $numerTransakcjiOdbioru;
        
        return $this;
    }
}
