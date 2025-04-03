<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for deklaracjaCelnaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeklaracjaCelnaType
{
    /**
     * The szczegoly
     * Meta information extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 1
     * @var \App\ElektronicznyNadawca\StructType\SzczegolyDeklaracjiCelnejType[]
     */
    public array $szczegoly;
    /**
     * The podarunek
     * @var bool|null
     */
    public ?bool $podarunek = null;
    /**
     * The dokument
     * @var bool|null
     */
    public ?bool $dokument = null;
    /**
     * The probkaHandlowa
     * @var bool|null
     */
    public ?bool $probkaHandlowa = null;
    /**
     * The zwrotTowaru
     * @var bool|null
     */
    public ?bool $zwrotTowaru = null;
    /**
     * The towary
     * @var bool|null
     */
    public ?bool $towary = null;
    /**
     * The inny
     * @var bool|null
     */
    public ?bool $inny = null;
    /**
     * The wyjasnienie
     * @var string|null
     */
    public ?string $wyjasnienie = null;
    /**
     * The oplatyPocztowe
     * @var string|null
     */
    public ?string $oplatyPocztowe = null;
    /**
     * The uwagi
     * @var string|null
     */
    public ?string $uwagi = null;
    /**
     * The licencja
     * @var string|null
     */
    public ?string $licencja = null;
    /**
     * The swiadectwo
     * @var string|null
     */
    public ?string $swiadectwo = null;
    /**
     * The faktura
     * @var string|null
     */
    public ?string $faktura = null;
    /**
     * The numerReferencyjnyImportera
     * @var string|null
     */
    public ?string $numerReferencyjnyImportera = null;
    /**
     * The numerTelefonuImportera
     * @var string|null
     */
    public ?string $numerTelefonuImportera = null;
    /**
     * The waluta
     * @var string|null
     */
    public ?string $waluta = null;
    /**
     * Constructor method for deklaracjaCelnaType
     * @uses DeklaracjaCelnaType::setSzczegoly()
     * @uses DeklaracjaCelnaType::setPodarunek()
     * @uses DeklaracjaCelnaType::setDokument()
     * @uses DeklaracjaCelnaType::setProbkaHandlowa()
     * @uses DeklaracjaCelnaType::setZwrotTowaru()
     * @uses DeklaracjaCelnaType::setTowary()
     * @uses DeklaracjaCelnaType::setInny()
     * @uses DeklaracjaCelnaType::setWyjasnienie()
     * @uses DeklaracjaCelnaType::setOplatyPocztowe()
     * @uses DeklaracjaCelnaType::setUwagi()
     * @uses DeklaracjaCelnaType::setLicencja()
     * @uses DeklaracjaCelnaType::setSwiadectwo()
     * @uses DeklaracjaCelnaType::setFaktura()
     * @uses DeklaracjaCelnaType::setNumerReferencyjnyImportera()
     * @uses DeklaracjaCelnaType::setNumerTelefonuImportera()
     * @uses DeklaracjaCelnaType::setWaluta()
     * @param \App\ElektronicznyNadawca\StructType\SzczegolyDeklaracjiCelnejType[] $szczegoly
     * @param bool $podarunek
     * @param bool $dokument
     * @param bool $probkaHandlowa
     * @param bool $zwrotTowaru
     * @param bool $towary
     * @param bool $inny
     * @param string $wyjasnienie
     * @param string $oplatyPocztowe
     * @param string $uwagi
     * @param string $licencja
     * @param string $swiadectwo
     * @param string $faktura
     * @param string $numerReferencyjnyImportera
     * @param string $numerTelefonuImportera
     * @param string $waluta
     */
    public function __construct(array $szczegoly, ?bool $podarunek = null, ?bool $dokument = null, ?bool $probkaHandlowa = null, ?bool $zwrotTowaru = null, ?bool $towary = null, ?bool $inny = null, ?string $wyjasnienie = null, ?string $oplatyPocztowe = null, ?string $uwagi = null, ?string $licencja = null, ?string $swiadectwo = null, ?string $faktura = null, ?string $numerReferencyjnyImportera = null, ?string $numerTelefonuImportera = null, ?string $waluta = null)
    {
        $this
            ->setSzczegoly($szczegoly)
            ->setPodarunek($podarunek)
            ->setDokument($dokument)
            ->setProbkaHandlowa($probkaHandlowa)
            ->setZwrotTowaru($zwrotTowaru)
            ->setTowary($towary)
            ->setInny($inny)
            ->setWyjasnienie($wyjasnienie)
            ->setOplatyPocztowe($oplatyPocztowe)
            ->setUwagi($uwagi)
            ->setLicencja($licencja)
            ->setSwiadectwo($swiadectwo)
            ->setFaktura($faktura)
            ->setNumerReferencyjnyImportera($numerReferencyjnyImportera)
            ->setNumerTelefonuImportera($numerTelefonuImportera)
            ->setWaluta($waluta);
    }
    /**
     * Get szczegoly value
     * @return \App\ElektronicznyNadawca\StructType\SzczegolyDeklaracjiCelnejType[]
     */
    public function getSzczegoly(): array
    {
        return $this->szczegoly;
    }
    /**
     * Set szczegoly value
     * @param \App\ElektronicznyNadawca\StructType\SzczegolyDeklaracjiCelnejType[] $szczegoly
     * @return \App\ElektronicznyNadawca\StructType\DeklaracjaCelnaType
     */
    public function setSzczegoly(array $szczegoly): self
    {
        $this->szczegoly = $szczegoly;
        
        return $this;
    }
    /**
     * Add item to szczegoly value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\SzczegolyDeklaracjiCelnejType $item
     * @return \App\ElektronicznyNadawca\StructType\DeklaracjaCelnaType
     */
    public function addToSzczegoly(\App\ElektronicznyNadawca\StructType\SzczegolyDeklaracjiCelnejType $item): self
    {
        $this->szczegoly[] = $item;
        
        return $this;
    }
    /**
     * Get podarunek value
     * @return bool|null
     */
    public function getPodarunek(): ?bool
    {
        return $this->podarunek;
    }
    /**
     * Set podarunek value
     * @param bool $podarunek
     * @return \App\ElektronicznyNadawca\StructType\DeklaracjaCelnaType
     */
    public function setPodarunek(?bool $podarunek = null): self
    {
        $this->podarunek = $podarunek;
        
        return $this;
    }
    /**
     * Get dokument value
     * @return bool|null
     */
    public function getDokument(): ?bool
    {
        return $this->dokument;
    }
    /**
     * Set dokument value
     * @param bool $dokument
     * @return \App\ElektronicznyNadawca\StructType\DeklaracjaCelnaType
     */
    public function setDokument(?bool $dokument = null): self
    {
        $this->dokument = $dokument;
        
        return $this;
    }
    /**
     * Get probkaHandlowa value
     * @return bool|null
     */
    public function getProbkaHandlowa(): ?bool
    {
        return $this->probkaHandlowa;
    }
    /**
     * Set probkaHandlowa value
     * @param bool $probkaHandlowa
     * @return \App\ElektronicznyNadawca\StructType\DeklaracjaCelnaType
     */
    public function setProbkaHandlowa(?bool $probkaHandlowa = null): self
    {
        $this->probkaHandlowa = $probkaHandlowa;
        
        return $this;
    }
    /**
     * Get zwrotTowaru value
     * @return bool|null
     */
    public function getZwrotTowaru(): ?bool
    {
        return $this->zwrotTowaru;
    }
    /**
     * Set zwrotTowaru value
     * @param bool $zwrotTowaru
     * @return \App\ElektronicznyNadawca\StructType\DeklaracjaCelnaType
     */
    public function setZwrotTowaru(?bool $zwrotTowaru = null): self
    {
        $this->zwrotTowaru = $zwrotTowaru;
        
        return $this;
    }
    /**
     * Get towary value
     * @return bool|null
     */
    public function getTowary(): ?bool
    {
        return $this->towary;
    }
    /**
     * Set towary value
     * @param bool $towary
     * @return \App\ElektronicznyNadawca\StructType\DeklaracjaCelnaType
     */
    public function setTowary(?bool $towary = null): self
    {
        $this->towary = $towary;
        
        return $this;
    }
    /**
     * Get inny value
     * @return bool|null
     */
    public function getInny(): ?bool
    {
        return $this->inny;
    }
    /**
     * Set inny value
     * @param bool $inny
     * @return \App\ElektronicznyNadawca\StructType\DeklaracjaCelnaType
     */
    public function setInny(?bool $inny = null): self
    {
        $this->inny = $inny;
        
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
     * @return \App\ElektronicznyNadawca\StructType\DeklaracjaCelnaType
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
     * @return \App\ElektronicznyNadawca\StructType\DeklaracjaCelnaType
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
     * @return \App\ElektronicznyNadawca\StructType\DeklaracjaCelnaType
     */
    public function setUwagi(?string $uwagi = null): self
    {
        $this->uwagi = $uwagi;
        
        return $this;
    }
    /**
     * Get licencja value
     * @return string|null
     */
    public function getLicencja(): ?string
    {
        return $this->licencja;
    }
    /**
     * Set licencja value
     * @param string $licencja
     * @return \App\ElektronicznyNadawca\StructType\DeklaracjaCelnaType
     */
    public function setLicencja(?string $licencja = null): self
    {
        $this->licencja = $licencja;
        
        return $this;
    }
    /**
     * Get swiadectwo value
     * @return string|null
     */
    public function getSwiadectwo(): ?string
    {
        return $this->swiadectwo;
    }
    /**
     * Set swiadectwo value
     * @param string $swiadectwo
     * @return \App\ElektronicznyNadawca\StructType\DeklaracjaCelnaType
     */
    public function setSwiadectwo(?string $swiadectwo = null): self
    {
        $this->swiadectwo = $swiadectwo;
        
        return $this;
    }
    /**
     * Get faktura value
     * @return string|null
     */
    public function getFaktura(): ?string
    {
        return $this->faktura;
    }
    /**
     * Set faktura value
     * @param string $faktura
     * @return \App\ElektronicznyNadawca\StructType\DeklaracjaCelnaType
     */
    public function setFaktura(?string $faktura = null): self
    {
        $this->faktura = $faktura;
        
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
     * @return \App\ElektronicznyNadawca\StructType\DeklaracjaCelnaType
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
     * @return \App\ElektronicznyNadawca\StructType\DeklaracjaCelnaType
     */
    public function setNumerTelefonuImportera(?string $numerTelefonuImportera = null): self
    {
        $this->numerTelefonuImportera = $numerTelefonuImportera;
        
        return $this;
    }
    /**
     * Get waluta value
     * @return string|null
     */
    public function getWaluta(): ?string
    {
        return $this->waluta;
    }
    /**
     * Set waluta value
     * @param string $waluta
     * @return \App\ElektronicznyNadawca\StructType\DeklaracjaCelnaType
     */
    public function setWaluta(?string $waluta = null): self
    {
        $this->waluta = $waluta;
        
        return $this;
    }
}
