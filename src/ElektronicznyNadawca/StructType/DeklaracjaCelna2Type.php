<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for deklaracjaCelna2Type StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeklaracjaCelna2Type
{
    /**
     * The rodzaj
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public string $rodzaj;
    /**
     * The zawartoscPrzesylki
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public string $zawartoscPrzesylki;
    /**
     * The walutaKodISO
     * Meta information extracted from the WSDL
     * - documentation: Kod ISO waluty w której wyrażone są wartości pozycji podanych w elemencie szczegolyZawartosciPrzesylki
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public string $walutaKodISO;
    /**
     * The szczegolyZawartosciPrzesylki
     * Meta information extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 1
     * @var \App\ElektronicznyNadawca\StructType\SzczegolyZawartosciPrzesylkiZagranicznejType[]
     */
    public array $szczegolyZawartosciPrzesylki;
    /**
     * The dokumentyTowarzyszace
     * Meta information extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\DokumentyTowarzyszaceType[]
     */
    public ?array $dokumentyTowarzyszace = null;
    /**
     * The wyjasnienie
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $wyjasnienie = null;
    /**
     * The oplatyPocztowe
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $oplatyPocztowe = null;
    /**
     * The uwagi
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $uwagi = null;
    /**
     * The numerReferencyjnyImportera
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $numerReferencyjnyImportera = null;
    /**
     * The numerTelefonuImportera
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $numerTelefonuImportera = null;
    /**
     * The numerReferencyjnyCelny
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $numerReferencyjnyCelny = null;
    /**
     * Constructor method for deklaracjaCelna2Type
     * @uses DeklaracjaCelna2Type::setRodzaj()
     * @uses DeklaracjaCelna2Type::setZawartoscPrzesylki()
     * @uses DeklaracjaCelna2Type::setWalutaKodISO()
     * @uses DeklaracjaCelna2Type::setSzczegolyZawartosciPrzesylki()
     * @uses DeklaracjaCelna2Type::setDokumentyTowarzyszace()
     * @uses DeklaracjaCelna2Type::setWyjasnienie()
     * @uses DeklaracjaCelna2Type::setOplatyPocztowe()
     * @uses DeklaracjaCelna2Type::setUwagi()
     * @uses DeklaracjaCelna2Type::setNumerReferencyjnyImportera()
     * @uses DeklaracjaCelna2Type::setNumerTelefonuImportera()
     * @uses DeklaracjaCelna2Type::setNumerReferencyjnyCelny()
     * @param string $rodzaj
     * @param string $zawartoscPrzesylki
     * @param string $walutaKodISO
     * @param \App\ElektronicznyNadawca\StructType\SzczegolyZawartosciPrzesylkiZagranicznejType[] $szczegolyZawartosciPrzesylki
     * @param \App\ElektronicznyNadawca\StructType\DokumentyTowarzyszaceType[] $dokumentyTowarzyszace
     * @param string $wyjasnienie
     * @param string $oplatyPocztowe
     * @param string $uwagi
     * @param string $numerReferencyjnyImportera
     * @param string $numerTelefonuImportera
     * @param string $numerReferencyjnyCelny
     */
    public function __construct(string $rodzaj, string $zawartoscPrzesylki, string $walutaKodISO, array $szczegolyZawartosciPrzesylki, ?array $dokumentyTowarzyszace = null, ?string $wyjasnienie = null, ?string $oplatyPocztowe = null, ?string $uwagi = null, ?string $numerReferencyjnyImportera = null, ?string $numerTelefonuImportera = null, ?string $numerReferencyjnyCelny = null)
    {
        $this
            ->setRodzaj($rodzaj)
            ->setZawartoscPrzesylki($zawartoscPrzesylki)
            ->setWalutaKodISO($walutaKodISO)
            ->setSzczegolyZawartosciPrzesylki($szczegolyZawartosciPrzesylki)
            ->setDokumentyTowarzyszace($dokumentyTowarzyszace)
            ->setWyjasnienie($wyjasnienie)
            ->setOplatyPocztowe($oplatyPocztowe)
            ->setUwagi($uwagi)
            ->setNumerReferencyjnyImportera($numerReferencyjnyImportera)
            ->setNumerTelefonuImportera($numerTelefonuImportera)
            ->setNumerReferencyjnyCelny($numerReferencyjnyCelny);
    }
    /**
     * Get rodzaj value
     * @return string
     */
    public function getRodzaj(): string
    {
        return $this->rodzaj;
    }
    /**
     * Set rodzaj value
     * @param string $rodzaj
     * @return \App\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type
     */
    public function setRodzaj(string $rodzaj): self
    {
        $this->rodzaj = $rodzaj;
        
        return $this;
    }
    /**
     * Get zawartoscPrzesylki value
     * @return string
     */
    public function getZawartoscPrzesylki(): string
    {
        return $this->zawartoscPrzesylki;
    }
    /**
     * Set zawartoscPrzesylki value
     * @param string $zawartoscPrzesylki
     * @return \App\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type
     */
    public function setZawartoscPrzesylki(string $zawartoscPrzesylki): self
    {
        $this->zawartoscPrzesylki = $zawartoscPrzesylki;
        
        return $this;
    }
    /**
     * Get walutaKodISO value
     * @return string
     */
    public function getWalutaKodISO(): string
    {
        return $this->walutaKodISO;
    }
    /**
     * Set walutaKodISO value
     * @param string $walutaKodISO
     * @return \App\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type
     */
    public function setWalutaKodISO(string $walutaKodISO): self
    {
        $this->walutaKodISO = $walutaKodISO;
        
        return $this;
    }
    /**
     * Get szczegolyZawartosciPrzesylki value
     * @return \App\ElektronicznyNadawca\StructType\SzczegolyZawartosciPrzesylkiZagranicznejType[]
     */
    public function getSzczegolyZawartosciPrzesylki(): array
    {
        return $this->szczegolyZawartosciPrzesylki;
    }
    /**
     * Set szczegolyZawartosciPrzesylki value
     * @param \App\ElektronicznyNadawca\StructType\SzczegolyZawartosciPrzesylkiZagranicznejType[] $szczegolyZawartosciPrzesylki
     * @return \App\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type
     */
    public function setSzczegolyZawartosciPrzesylki(array $szczegolyZawartosciPrzesylki): self
    {
        $this->szczegolyZawartosciPrzesylki = $szczegolyZawartosciPrzesylki;
        
        return $this;
    }
    /**
     * Add item to szczegolyZawartosciPrzesylki value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\SzczegolyZawartosciPrzesylkiZagranicznejType $item
     * @return \App\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type
     */
    public function addToSzczegolyZawartosciPrzesylki(\App\ElektronicznyNadawca\StructType\SzczegolyZawartosciPrzesylkiZagranicznejType $item): self
    {
        $this->szczegolyZawartosciPrzesylki[] = $item;
        
        return $this;
    }
    /**
     * Get dokumentyTowarzyszace value
     * @return \App\ElektronicznyNadawca\StructType\DokumentyTowarzyszaceType[]
     */
    public function getDokumentyTowarzyszace(): ?array
    {
        return $this->dokumentyTowarzyszace;
    }
    /**
     * Set dokumentyTowarzyszace value
     * @param \App\ElektronicznyNadawca\StructType\DokumentyTowarzyszaceType[] $dokumentyTowarzyszace
     * @return \App\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type
     */
    public function setDokumentyTowarzyszace(?array $dokumentyTowarzyszace = null): self
    {
        $this->dokumentyTowarzyszace = $dokumentyTowarzyszace;
        
        return $this;
    }
    /**
     * Add item to dokumentyTowarzyszace value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\DokumentyTowarzyszaceType $item
     * @return \App\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type
     */
    public function addToDokumentyTowarzyszace(\App\ElektronicznyNadawca\StructType\DokumentyTowarzyszaceType $item): self
    {
        $this->dokumentyTowarzyszace[] = $item;
        
        return $this;
    }
    /**
     * Get wyjasnienie value
     * @return string|null
     */
    public function getWyjasnienie(): ?string
    {
        return $this->wyjasnienie;
    }
    /**
     * Set wyjasnienie value
     * @param string $wyjasnienie
     * @return \App\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type
     */
    public function setWyjasnienie(?string $wyjasnienie = null): self
    {
        $this->wyjasnienie = $wyjasnienie;
        
        return $this;
    }
    /**
     * Get oplatyPocztowe value
     * @return string|null
     */
    public function getOplatyPocztowe(): ?string
    {
        return $this->oplatyPocztowe;
    }
    /**
     * Set oplatyPocztowe value
     * @param string $oplatyPocztowe
     * @return \App\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type
     */
    public function setOplatyPocztowe(?string $oplatyPocztowe = null): self
    {
        $this->oplatyPocztowe = $oplatyPocztowe;
        
        return $this;
    }
    /**
     * Get uwagi value
     * @return string|null
     */
    public function getUwagi(): ?string
    {
        return $this->uwagi;
    }
    /**
     * Set uwagi value
     * @param string $uwagi
     * @return \App\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type
     */
    public function setUwagi(?string $uwagi = null): self
    {
        $this->uwagi = $uwagi;
        
        return $this;
    }
    /**
     * Get numerReferencyjnyImportera value
     * @return string|null
     */
    public function getNumerReferencyjnyImportera(): ?string
    {
        return $this->numerReferencyjnyImportera;
    }
    /**
     * Set numerReferencyjnyImportera value
     * @param string $numerReferencyjnyImportera
     * @return \App\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type
     */
    public function setNumerReferencyjnyImportera(?string $numerReferencyjnyImportera = null): self
    {
        $this->numerReferencyjnyImportera = $numerReferencyjnyImportera;
        
        return $this;
    }
    /**
     * Get numerTelefonuImportera value
     * @return string|null
     */
    public function getNumerTelefonuImportera(): ?string
    {
        return $this->numerTelefonuImportera;
    }
    /**
     * Set numerTelefonuImportera value
     * @param string $numerTelefonuImportera
     * @return \App\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type
     */
    public function setNumerTelefonuImportera(?string $numerTelefonuImportera = null): self
    {
        $this->numerTelefonuImportera = $numerTelefonuImportera;
        
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
     * @return \App\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type
     */
    public function setNumerReferencyjnyCelny(?string $numerReferencyjnyCelny = null): self
    {
        $this->numerReferencyjnyCelny = $numerReferencyjnyCelny;
        
        return $this;
    }
}
