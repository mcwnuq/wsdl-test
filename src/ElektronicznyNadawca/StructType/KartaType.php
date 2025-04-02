<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kartaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class KartaType extends AbstractStructBase
{
    /**
     * The produktyInKarta
     * Meta information extracted from the WSDL
     * - documentation: Lista dostępnych produktów dla karty
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\ProduktyInKartaType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\ProduktyInKartaType $produktyInKarta = null;
    /**
     * The adresKorespondencyjny
     * Meta information extracted from the WSDL
     * - documentation: Lista adresów korespondencyjnych dla kart typu 2
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\AdresKorespondencyjny[]
     */
    public ?array $adresKorespondencyjny = null;
    /**
     * The idKarta
     * @var int|null
     */
    public ?int $idKarta = null;
    /**
     * The opis
     * @var string|null
     */
    public ?string $opis = null;
    /**
     * The aktywna
     * @var bool|null
     */
    public ?bool $aktywna = null;
    /**
     * The typ
     * Meta information extracted from the WSDL
     * - documentation: Typ karty. Dopuszczalne wartości: 1-do nadawania, 2-do definicji adresów OPNA. Lista obsługiwanych wartości może być rozszerzona w przyszłości.
     * @var int|null
     */
    public ?int $typ = null;
    /**
     * Constructor method for kartaType
     * @uses KartaType::setProduktyInKarta()
     * @uses KartaType::setAdresKorespondencyjny()
     * @uses KartaType::setIdKarta()
     * @uses KartaType::setOpis()
     * @uses KartaType::setAktywna()
     * @uses KartaType::setTyp()
     * @param \App\ElektronicznyNadawca\StructType\ProduktyInKartaType $produktyInKarta
     * @param \App\ElektronicznyNadawca\StructType\AdresKorespondencyjny[] $adresKorespondencyjny
     * @param int $idKarta
     * @param string $opis
     * @param bool $aktywna
     * @param int $typ
     */
    public function __construct(?\App\ElektronicznyNadawca\StructType\ProduktyInKartaType $produktyInKarta = null, ?array $adresKorespondencyjny = null, ?int $idKarta = null, ?string $opis = null, ?bool $aktywna = null, ?int $typ = null)
    {
        $this
            ->setProduktyInKarta($produktyInKarta)
            ->setAdresKorespondencyjny($adresKorespondencyjny)
            ->setIdKarta($idKarta)
            ->setOpis($opis)
            ->setAktywna($aktywna)
            ->setTyp($typ);
    }
    /**
     * Get produktyInKarta value
     * @return \App\ElektronicznyNadawca\StructType\ProduktyInKartaType|null
     */
    public function getProduktyInKarta(): ?\App\ElektronicznyNadawca\StructType\ProduktyInKartaType
    {
        return $this->produktyInKarta;
    }
    /**
     * Set produktyInKarta value
     * @param \App\ElektronicznyNadawca\StructType\ProduktyInKartaType $produktyInKarta
     * @return \App\ElektronicznyNadawca\StructType\KartaType
     */
    public function setProduktyInKarta(?\App\ElektronicznyNadawca\StructType\ProduktyInKartaType $produktyInKarta = null): self
    {
        $this->produktyInKarta = $produktyInKarta;
        
        return $this;
    }
    /**
     * Get adresKorespondencyjny value
     * @return \App\ElektronicznyNadawca\StructType\AdresKorespondencyjny[]
     */
    public function getAdresKorespondencyjny(): ?array
    {
        return $this->adresKorespondencyjny;
    }
    /**
     * Set adresKorespondencyjny value
     * @param \App\ElektronicznyNadawca\StructType\AdresKorespondencyjny[] $adresKorespondencyjny
     * @return \App\ElektronicznyNadawca\StructType\KartaType
     */
    public function setAdresKorespondencyjny(?array $adresKorespondencyjny = null): self
    {
        $this->adresKorespondencyjny = $adresKorespondencyjny;
        
        return $this;
    }
    /**
     * Add item to adresKorespondencyjny value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\AdresKorespondencyjny $item
     * @return \App\ElektronicznyNadawca\StructType\KartaType
     */
    public function addToAdresKorespondencyjny(\App\ElektronicznyNadawca\StructType\AdresKorespondencyjny $item): self
    {
        $this->adresKorespondencyjny[] = $item;
        
        return $this;
    }
    /**
     * Get idKarta value
     * @return int|null
     */
    public function getIdKarta(): ?int
    {
        return $this->idKarta;
    }
    /**
     * Set idKarta value
     * @param int $idKarta
     * @return \App\ElektronicznyNadawca\StructType\KartaType
     */
    public function setIdKarta(?int $idKarta = null): self
    {
        $this->idKarta = $idKarta;
        
        return $this;
    }
    /**
     * Get opis value
     * @return string|null
     */
    public function getOpis(): ?string
    {
        return $this->opis;
    }
    /**
     * Set opis value
     * @param string $opis
     * @return \App\ElektronicznyNadawca\StructType\KartaType
     */
    public function setOpis(?string $opis = null): self
    {
        $this->opis = $opis;
        
        return $this;
    }
    /**
     * Get aktywna value
     * @return bool|null
     */
    public function getAktywna(): ?bool
    {
        return $this->aktywna;
    }
    /**
     * Set aktywna value
     * @param bool $aktywna
     * @return \App\ElektronicznyNadawca\StructType\KartaType
     */
    public function setAktywna(?bool $aktywna = null): self
    {
        $this->aktywna = $aktywna;
        
        return $this;
    }
    /**
     * Get typ value
     * @return int|null
     */
    public function getTyp(): ?int
    {
        return $this->typ;
    }
    /**
     * Set typ value
     * @param int $typ
     * @return \App\ElektronicznyNadawca\StructType\KartaType
     */
    public function setTyp(?int $typ = null): self
    {
        $this->typ = $typ;
        
        return $this;
    }
}
