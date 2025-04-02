<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for profilType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ProfilType extends AdresType
{
    /**
     * The idProfil
     * @var int|null
     */
    public ?int $idProfil = null;
    /**
     * The nazwaSkrocona
     * @var string|null
     */
    public ?string $nazwaSkrocona = null;
    /**
     * The fax
     * @var string|null
     */
    public ?string $fax = null;
    /**
     * The mpk
     * @var string|null
     */
    public ?string $mpk = null;
    /**
     * Constructor method for profilType
     * @uses ProfilType::setIdProfil()
     * @uses ProfilType::setNazwaSkrocona()
     * @uses ProfilType::setFax()
     * @uses ProfilType::setMpk()
     * @param int $idProfil
     * @param string $nazwaSkrocona
     * @param string $fax
     * @param string $mpk
     */
    public function __construct(?int $idProfil = null, ?string $nazwaSkrocona = null, ?string $fax = null, ?string $mpk = null)
    {
        $this
            ->setIdProfil($idProfil)
            ->setNazwaSkrocona($nazwaSkrocona)
            ->setFax($fax)
            ->setMpk($mpk);
    }
    /**
     * Get idProfil value
     * @return int|null
     */
    public function getIdProfil(): ?int
    {
        return $this->idProfil;
    }
    /**
     * Set idProfil value
     * @param int $idProfil
     * @return \App\ElektronicznyNadawca\StructType\ProfilType
     */
    public function setIdProfil(?int $idProfil = null): self
    {
        $this->idProfil = $idProfil;
        
        return $this;
    }
    /**
     * Get nazwaSkrocona value
     * @return string|null
     */
    public function getNazwaSkrocona(): ?string
    {
        return $this->nazwaSkrocona;
    }
    /**
     * Set nazwaSkrocona value
     * @param string $nazwaSkrocona
     * @return \App\ElektronicznyNadawca\StructType\ProfilType
     */
    public function setNazwaSkrocona(?string $nazwaSkrocona = null): self
    {
        $this->nazwaSkrocona = $nazwaSkrocona;
        
        return $this;
    }
    /**
     * Get fax value
     * @return string|null
     */
    public function getFax(): ?string
    {
        return $this->fax;
    }
    /**
     * Set fax value
     * @param string $fax
     * @return \App\ElektronicznyNadawca\StructType\ProfilType
     */
    public function setFax(?string $fax = null): self
    {
        $this->fax = $fax;
        
        return $this;
    }
    /**
     * Get mpk value
     * @return string|null
     */
    public function getMpk(): ?string
    {
        return $this->mpk;
    }
    /**
     * Set mpk value
     * @param string $mpk
     * @return \App\ElektronicznyNadawca\StructType\ProfilType
     */
    public function setMpk(?string $mpk = null): self
    {
        $this->mpk = $mpk;
        
        return $this;
    }
}
