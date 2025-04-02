<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for przesylkaProceduralnaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrzesylkaProceduralnaType extends PrzesylkaRejestrowanaType
{
    /**
     * The ubezpieczenie
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\UbezpieczenieType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie = null;
    /**
     * The epo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\EPOType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\EPOType $epo = null;
    /**
     * The urzadWydaniaEPrzesylki
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki = null;
    /**
     * The pobranie
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\PobranieType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\PobranieType $pobranie = null;
    /**
     * The serwis
     * @var string|null
     */
    public ?string $serwis = null;
    /**
     * The numerNadaniaPowrot1
     * @var string|null
     */
    public ?string $numerNadaniaPowrot1 = null;
    /**
     * The numerNadaniaPowrot2
     * @var string|null
     */
    public ?string $numerNadaniaPowrot2 = null;
    /**
     * The idPrzesylkaZawartosc
     * @var int|null
     */
    public ?int $idPrzesylkaZawartosc = null;
    /**
     * The idListaCzynnosci
     * @var int|null
     */
    public ?int $idListaCzynnosci = null;
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
     * The idAdresPrzesylkaPowrot
     * @var int|null
     */
    public ?int $idAdresPrzesylkaPowrot = null;
    /**
     * Constructor method for przesylkaProceduralnaType
     * @uses PrzesylkaProceduralnaType::setUbezpieczenie()
     * @uses PrzesylkaProceduralnaType::setEpo()
     * @uses PrzesylkaProceduralnaType::setUrzadWydaniaEPrzesylki()
     * @uses PrzesylkaProceduralnaType::setPobranie()
     * @uses PrzesylkaProceduralnaType::setSerwis()
     * @uses PrzesylkaProceduralnaType::setNumerNadaniaPowrot1()
     * @uses PrzesylkaProceduralnaType::setNumerNadaniaPowrot2()
     * @uses PrzesylkaProceduralnaType::setIdPrzesylkaZawartosc()
     * @uses PrzesylkaProceduralnaType::setIdListaCzynnosci()
     * @uses PrzesylkaProceduralnaType::setMasa()
     * @uses PrzesylkaProceduralnaType::setOpakowanie()
     * @uses PrzesylkaProceduralnaType::setNumerPrzesylkiKlienta()
     * @uses PrzesylkaProceduralnaType::setWartosc()
     * @uses PrzesylkaProceduralnaType::setIdAdresPrzesylkaPowrot()
     * @param \App\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie
     * @param \App\ElektronicznyNadawca\StructType\EPOType $epo
     * @param \App\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki
     * @param \App\ElektronicznyNadawca\StructType\PobranieType $pobranie
     * @param string $serwis
     * @param string $numerNadaniaPowrot1
     * @param string $numerNadaniaPowrot2
     * @param int $idPrzesylkaZawartosc
     * @param int $idListaCzynnosci
     * @param int $masa
     * @param string $opakowanie
     * @param string $numerPrzesylkiKlienta
     * @param int $wartosc
     * @param int $idAdresPrzesylkaPowrot
     */
    public function __construct(?\App\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie = null, ?\App\ElektronicznyNadawca\StructType\EPOType $epo = null, ?\App\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki = null, ?\App\ElektronicznyNadawca\StructType\PobranieType $pobranie = null, ?string $serwis = null, ?string $numerNadaniaPowrot1 = null, ?string $numerNadaniaPowrot2 = null, ?int $idPrzesylkaZawartosc = null, ?int $idListaCzynnosci = null, ?int $masa = null, ?string $opakowanie = null, ?string $numerPrzesylkiKlienta = null, ?int $wartosc = null, ?int $idAdresPrzesylkaPowrot = null)
    {
        $this
            ->setUbezpieczenie($ubezpieczenie)
            ->setEpo($epo)
            ->setUrzadWydaniaEPrzesylki($urzadWydaniaEPrzesylki)
            ->setPobranie($pobranie)
            ->setSerwis($serwis)
            ->setNumerNadaniaPowrot1($numerNadaniaPowrot1)
            ->setNumerNadaniaPowrot2($numerNadaniaPowrot2)
            ->setIdPrzesylkaZawartosc($idPrzesylkaZawartosc)
            ->setIdListaCzynnosci($idListaCzynnosci)
            ->setMasa($masa)
            ->setOpakowanie($opakowanie)
            ->setNumerPrzesylkiKlienta($numerPrzesylkiKlienta)
            ->setWartosc($wartosc)
            ->setIdAdresPrzesylkaPowrot($idAdresPrzesylkaPowrot);
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaProceduralnaType
     */
    public function setUbezpieczenie(?\App\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie = null): self
    {
        $this->ubezpieczenie = $ubezpieczenie;
        
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaProceduralnaType
     */
    public function setEpo(?\App\ElektronicznyNadawca\StructType\EPOType $epo = null): self
    {
        $this->epo = $epo;
        
        return $this;
    }
    /**
     * Get urzadWydaniaEPrzesylki value
     * @return \App\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType|null
     */
    public function getUrzadWydaniaEPrzesylki(): ?\App\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType
    {
        return $this->urzadWydaniaEPrzesylki;
    }
    /**
     * Set urzadWydaniaEPrzesylki value
     * @param \App\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaProceduralnaType
     */
    public function setUrzadWydaniaEPrzesylki(?\App\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki = null): self
    {
        $this->urzadWydaniaEPrzesylki = $urzadWydaniaEPrzesylki;
        
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaProceduralnaType
     */
    public function setPobranie(?\App\ElektronicznyNadawca\StructType\PobranieType $pobranie = null): self
    {
        $this->pobranie = $pobranie;
        
        return $this;
    }
    /**
     * Get serwis value
     * @return string|null
     */
    public function getSerwis(): ?string
    {
        return $this->serwis;
    }
    /**
     * Set serwis value
     * @param string $serwis
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaProceduralnaType
     */
    public function setSerwis(?string $serwis = null): self
    {
        $this->serwis = $serwis;
        
        return $this;
    }
    /**
     * Get numerNadaniaPowrot1 value
     * @return string|null
     */
    public function getNumerNadaniaPowrot1(): ?string
    {
        return $this->numerNadaniaPowrot1;
    }
    /**
     * Set numerNadaniaPowrot1 value
     * @param string $numerNadaniaPowrot1
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaProceduralnaType
     */
    public function setNumerNadaniaPowrot1(?string $numerNadaniaPowrot1 = null): self
    {
        $this->numerNadaniaPowrot1 = $numerNadaniaPowrot1;
        
        return $this;
    }
    /**
     * Get numerNadaniaPowrot2 value
     * @return string|null
     */
    public function getNumerNadaniaPowrot2(): ?string
    {
        return $this->numerNadaniaPowrot2;
    }
    /**
     * Set numerNadaniaPowrot2 value
     * @param string $numerNadaniaPowrot2
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaProceduralnaType
     */
    public function setNumerNadaniaPowrot2(?string $numerNadaniaPowrot2 = null): self
    {
        $this->numerNadaniaPowrot2 = $numerNadaniaPowrot2;
        
        return $this;
    }
    /**
     * Get idPrzesylkaZawartosc value
     * @return int|null
     */
    public function getIdPrzesylkaZawartosc(): ?int
    {
        return $this->idPrzesylkaZawartosc;
    }
    /**
     * Set idPrzesylkaZawartosc value
     * @param int $idPrzesylkaZawartosc
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaProceduralnaType
     */
    public function setIdPrzesylkaZawartosc(?int $idPrzesylkaZawartosc = null): self
    {
        $this->idPrzesylkaZawartosc = $idPrzesylkaZawartosc;
        
        return $this;
    }
    /**
     * Get idListaCzynnosci value
     * @return int|null
     */
    public function getIdListaCzynnosci(): ?int
    {
        return $this->idListaCzynnosci;
    }
    /**
     * Set idListaCzynnosci value
     * @param int $idListaCzynnosci
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaProceduralnaType
     */
    public function setIdListaCzynnosci(?int $idListaCzynnosci = null): self
    {
        $this->idListaCzynnosci = $idListaCzynnosci;
        
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaProceduralnaType
     */
    public function setMasa(?int $masa = null): self
    {
        $this->masa = $masa;
        
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaProceduralnaType
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaProceduralnaType
     */
    public function setNumerPrzesylkiKlienta(?string $numerPrzesylkiKlienta = null): self
    {
        $this->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;
        
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaProceduralnaType
     */
    public function setWartosc(?int $wartosc = null): self
    {
        $this->wartosc = $wartosc;
        
        return $this;
    }
    /**
     * Get idAdresPrzesylkaPowrot value
     * @return int|null
     */
    public function getIdAdresPrzesylkaPowrot(): ?int
    {
        return $this->idAdresPrzesylkaPowrot;
    }
    /**
     * Set idAdresPrzesylkaPowrot value
     * @param int $idAdresPrzesylkaPowrot
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaProceduralnaType
     */
    public function setIdAdresPrzesylkaPowrot(?int $idAdresPrzesylkaPowrot = null): self
    {
        $this->idAdresPrzesylkaPowrot = $idAdresPrzesylkaPowrot;
        
        return $this;
    }
}
