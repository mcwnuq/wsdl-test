<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for EMSType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class EMSType extends PrzesylkaRejestrowanaType
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
     * The deklaracjaCelna
     * Meta information extracted from the WSDL
     * - documentation: Deklaracja celna - "deprecated" - zalecane jest ustawianie elementu deklaracjaCelna2
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\DeklaracjaCelnaType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\DeklaracjaCelnaType $deklaracjaCelna = null;
    /**
     * The potwierdzenieDoreczenia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null;
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
     * The typOpakowania
     * @var string|null
     */
    public ?string $typOpakowania = null;
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
     * The zalaczoneDokumenty
     * @var bool|null
     */
    public ?bool $zalaczoneDokumenty = null;
    /**
     * The numerPrzesylkiKlienta
     * @var string|null
     */
    public ?string $numerPrzesylkiKlienta = null;
    /**
     * Constructor method for EMSType
     * @uses EMSType::setUbezpieczenie()
     * @uses EMSType::setDeklaracjaCelna()
     * @uses EMSType::setPotwierdzenieDoreczenia()
     * @uses EMSType::setDeklaracjaCelna2()
     * @uses EMSType::setSposobNadaniaInterconnect()
     * @uses EMSType::setSposobDoreczenia()
     * @uses EMSType::setTypOpakowania()
     * @uses EMSType::setMasa()
     * @uses EMSType::setZalaczoneDokumenty()
     * @uses EMSType::setNumerPrzesylkiKlienta()
     * @param \App\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie
     * @param \App\ElektronicznyNadawca\StructType\DeklaracjaCelnaType $deklaracjaCelna
     * @param \App\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     * @param \App\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type $deklaracjaCelna2
     * @param string $sposobNadaniaInterconnect
     * @param \App\ElektronicznyNadawca\StructType\SposobDoreczeniaType $sposobDoreczenia
     * @param string $typOpakowania
     * @param int $masa
     * @param bool $zalaczoneDokumenty
     * @param string $numerPrzesylkiKlienta
     */
    public function __construct(?\App\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie = null, ?\App\ElektronicznyNadawca\StructType\DeklaracjaCelnaType $deklaracjaCelna = null, ?\App\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null, ?\App\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type $deklaracjaCelna2 = null, ?string $sposobNadaniaInterconnect = null, ?\App\ElektronicznyNadawca\StructType\SposobDoreczeniaType $sposobDoreczenia = null, ?string $typOpakowania = null, ?int $masa = null, ?bool $zalaczoneDokumenty = null, ?string $numerPrzesylkiKlienta = null)
    {
        $this
            ->setUbezpieczenie($ubezpieczenie)
            ->setDeklaracjaCelna($deklaracjaCelna)
            ->setPotwierdzenieDoreczenia($potwierdzenieDoreczenia)
            ->setDeklaracjaCelna2($deklaracjaCelna2)
            ->setSposobNadaniaInterconnect($sposobNadaniaInterconnect)
            ->setSposobDoreczenia($sposobDoreczenia)
            ->setTypOpakowania($typOpakowania)
            ->setMasa($masa)
            ->setZalaczoneDokumenty($zalaczoneDokumenty)
            ->setNumerPrzesylkiKlienta($numerPrzesylkiKlienta);
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
     * @return \App\ElektronicznyNadawca\StructType\EMSType
     */
    public function setUbezpieczenie(?\App\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie = null): self
    {
        $this->ubezpieczenie = $ubezpieczenie;
        
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
     * @return \App\ElektronicznyNadawca\StructType\EMSType
     */
    public function setDeklaracjaCelna(?\App\ElektronicznyNadawca\StructType\DeklaracjaCelnaType $deklaracjaCelna = null): self
    {
        $this->deklaracjaCelna = $deklaracjaCelna;
        
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
     * @return \App\ElektronicznyNadawca\StructType\EMSType
     */
    public function setPotwierdzenieDoreczenia(?\App\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null): self
    {
        $this->potwierdzenieDoreczenia = $potwierdzenieDoreczenia;
        
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
     * @return \App\ElektronicznyNadawca\StructType\EMSType
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
     * @return \App\ElektronicznyNadawca\StructType\EMSType
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
     * @return \App\ElektronicznyNadawca\StructType\EMSType
     */
    public function setSposobDoreczenia(?\App\ElektronicznyNadawca\StructType\SposobDoreczeniaType $sposobDoreczenia = null): self
    {
        $this->sposobDoreczenia = $sposobDoreczenia;
        
        return $this;
    }
    /**
     * Get typOpakowania value
     * @return string|null
     */
    public function getTypOpakowania(): ?string
    {
        return $this->typOpakowania;
    }
    /**
     * Set typOpakowania value
     * @param string $typOpakowania
     * @return \App\ElektronicznyNadawca\StructType\EMSType
     */
    public function setTypOpakowania(?string $typOpakowania = null): self
    {
        $this->typOpakowania = $typOpakowania;
        
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
     * @return \App\ElektronicznyNadawca\StructType\EMSType
     */
    public function setMasa(?int $masa = null): self
    {
        $this->masa = $masa;
        
        return $this;
    }
    /**
     * Get zalaczoneDokumenty value
     * @return bool|null
     */
    public function getZalaczoneDokumenty(): ?bool
    {
        return $this->zalaczoneDokumenty;
    }
    /**
     * Set zalaczoneDokumenty value
     * @param bool $zalaczoneDokumenty
     * @return \App\ElektronicznyNadawca\StructType\EMSType
     */
    public function setZalaczoneDokumenty(?bool $zalaczoneDokumenty = null): self
    {
        $this->zalaczoneDokumenty = $zalaczoneDokumenty;
        
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
     * @return \App\ElektronicznyNadawca\StructType\EMSType
     */
    public function setNumerPrzesylkiKlienta(?string $numerPrzesylkiKlienta = null): self
    {
        $this->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;
        
        return $this;
    }
}
