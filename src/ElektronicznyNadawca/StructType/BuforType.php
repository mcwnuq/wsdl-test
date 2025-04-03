<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for buforType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BuforType
{
    /**
     * The profil
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\ProfilType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\ProfilType $profil = null;
    /**
     * The idKarta
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    public ?int $idKarta = null;
    /**
     * The idBufor
     * @var int|null
     */
    public ?int $idBufor = null;
    /**
     * The dataNadania
     * @var string|null
     */
    public ?string $dataNadania = null;
    /**
     * The urzadNadania
     * Meta information extracted from the WSDL
     * - base: xsd:int
     * @var int|null
     */
    public ?int $urzadNadania = null;
    /**
     * The active
     * @var bool|null
     */
    public ?bool $active = null;
    /**
     * The opis
     * @var string|null
     */
    public ?string $opis = null;
    /**
     * The aktualizujPlanowanaDateNadaniaPrzesylek
     * Meta information extracted from the WSDL
     * - documentation: W przypadku ustawienia TRUE zostaną zmodyfikowane planowane daty nadania dla przesyłek znajdujących się w aktualizowanym buforze. Dla przesyłek dla których wcześniej pobrano etykietę adresową zostaną wygenerowane nowe
     * przesyłki z identycznymi parametrami jednak z NOWYM numerem nadania i GUID. Przesyłki pierwotne (tzn. te dla których pobrano wcześniej etykiety adresowe) nie będą już dostępne. W przypadku ustawienia FALSE lub nie przekazania tego atrybutu,
     * planowane daty nadania przesyłek nie będą modyfikowane.
     * - use: optional
     * @var bool|null
     */
    public ?bool $aktualizujPlanowanaDateNadaniaPrzesylek = null;
    /**
     * Constructor method for buforType
     * @uses BuforType::setProfil()
     * @uses BuforType::setIdKarta()
     * @uses BuforType::setIdBufor()
     * @uses BuforType::setDataNadania()
     * @uses BuforType::setUrzadNadania()
     * @uses BuforType::setActive()
     * @uses BuforType::setOpis()
     * @uses BuforType::setAktualizujPlanowanaDateNadaniaPrzesylek()
     * @param \App\ElektronicznyNadawca\StructType\ProfilType $profil
     * @param int $idKarta
     * @param int $idBufor
     * @param string $dataNadania
     * @param int $urzadNadania
     * @param bool $active
     * @param string $opis
     * @param bool $aktualizujPlanowanaDateNadaniaPrzesylek
     */
    public function __construct(?\App\ElektronicznyNadawca\StructType\ProfilType $profil = null, ?int $idKarta = null, ?int $idBufor = null, ?string $dataNadania = null, ?int $urzadNadania = null, ?bool $active = null, ?string $opis = null, ?bool $aktualizujPlanowanaDateNadaniaPrzesylek = null)
    {
        $this
            ->setProfil($profil)
            ->setIdKarta($idKarta)
            ->setIdBufor($idBufor)
            ->setDataNadania($dataNadania)
            ->setUrzadNadania($urzadNadania)
            ->setActive($active)
            ->setOpis($opis)
            ->setAktualizujPlanowanaDateNadaniaPrzesylek($aktualizujPlanowanaDateNadaniaPrzesylek);
    }
    /**
     * Get profil value
     * @return \App\ElektronicznyNadawca\StructType\ProfilType|null
     */
    public function getProfil(): ?\App\ElektronicznyNadawca\StructType\ProfilType
    {
        return $this->profil;
    }
    /**
     * Set profil value
     * @param \App\ElektronicznyNadawca\StructType\ProfilType $profil
     * @return \App\ElektronicznyNadawca\StructType\BuforType
     */
    public function setProfil(?\App\ElektronicznyNadawca\StructType\ProfilType $profil = null): self
    {
        $this->profil = $profil;
        
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
     * @return \App\ElektronicznyNadawca\StructType\BuforType
     */
    public function setIdKarta(?int $idKarta = null): self
    {
        $this->idKarta = $idKarta;
        
        return $this;
    }
    /**
     * Get idBufor value
     * @return int|null
     */
    public function getIdBufor(): ?int
    {
        return $this->idBufor;
    }
    /**
     * Set idBufor value
     * @param int $idBufor
     * @return \App\ElektronicznyNadawca\StructType\BuforType
     */
    public function setIdBufor(?int $idBufor = null): self
    {
        $this->idBufor = $idBufor;
        
        return $this;
    }
    /**
     * Get dataNadania value
     * @return string|null
     */
    public function getDataNadania(): ?string
    {
        return $this->dataNadania;
    }
    /**
     * Set dataNadania value
     * @param string $dataNadania
     * @return \App\ElektronicznyNadawca\StructType\BuforType
     */
    public function setDataNadania(?string $dataNadania = null): self
    {
        $this->dataNadania = $dataNadania;
        
        return $this;
    }
    /**
     * Get urzadNadania value
     * @return int|null
     */
    public function getUrzadNadania(): ?int
    {
        return $this->urzadNadania;
    }
    /**
     * Set urzadNadania value
     * @param int $urzadNadania
     * @return \App\ElektronicznyNadawca\StructType\BuforType
     */
    public function setUrzadNadania(?int $urzadNadania = null): self
    {
        $this->urzadNadania = $urzadNadania;
        
        return $this;
    }
    /**
     * Get active value
     * @return bool|null
     */
    public function getActive(): ?bool
    {
        return $this->active;
    }
    /**
     * Set active value
     * @param bool $active
     * @return \App\ElektronicznyNadawca\StructType\BuforType
     */
    public function setActive(?bool $active = null): self
    {
        $this->active = $active;
        
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
     * @return \App\ElektronicznyNadawca\StructType\BuforType
     */
    public function setOpis(?string $opis = null): self
    {
        $this->opis = $opis;
        
        return $this;
    }
    /**
     * Get aktualizujPlanowanaDateNadaniaPrzesylek value
     * @return bool|null
     */
    public function getAktualizujPlanowanaDateNadaniaPrzesylek(): ?bool
    {
        return $this->aktualizujPlanowanaDateNadaniaPrzesylek;
    }
    /**
     * Set aktualizujPlanowanaDateNadaniaPrzesylek value
     * @param bool $aktualizujPlanowanaDateNadaniaPrzesylek
     * @return \App\ElektronicznyNadawca\StructType\BuforType
     */
    public function setAktualizujPlanowanaDateNadaniaPrzesylek(?bool $aktualizujPlanowanaDateNadaniaPrzesylek = null): self
    {
        $this->aktualizujPlanowanaDateNadaniaPrzesylek = $aktualizujPlanowanaDateNadaniaPrzesylek;
        
        return $this;
    }
}
