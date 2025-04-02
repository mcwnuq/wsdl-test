<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sendEnvelope StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SendEnvelope extends AbstractStructBase
{
    /**
     * The urzadNadania
     * Meta information extracted from the WSDL
     * - base: xsd:int
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    public ?int $urzadNadania = null;
    /**
     * The pakiet
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\PakietType[]
     */
    public ?array $pakiet = null;
    /**
     * The idBufor
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    public ?int $idBufor = null;
    /**
     * The profil
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\ProfilType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\ProfilType $profil = null;
    /**
     * Constructor method for sendEnvelope
     * @uses SendEnvelope::setUrzadNadania()
     * @uses SendEnvelope::setPakiet()
     * @uses SendEnvelope::setIdBufor()
     * @uses SendEnvelope::setProfil()
     * @param int $urzadNadania
     * @param \App\ElektronicznyNadawca\StructType\PakietType[] $pakiet
     * @param int $idBufor
     * @param \App\ElektronicznyNadawca\StructType\ProfilType $profil
     */
    public function __construct(?int $urzadNadania = null, ?array $pakiet = null, ?int $idBufor = null, ?\App\ElektronicznyNadawca\StructType\ProfilType $profil = null)
    {
        $this
            ->setUrzadNadania($urzadNadania)
            ->setPakiet($pakiet)
            ->setIdBufor($idBufor)
            ->setProfil($profil);
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
     * @return \App\ElektronicznyNadawca\StructType\SendEnvelope
     */
    public function setUrzadNadania(?int $urzadNadania = null): self
    {
        $this->urzadNadania = $urzadNadania;
        
        return $this;
    }
    /**
     * Get pakiet value
     * @return \App\ElektronicznyNadawca\StructType\PakietType[]
     */
    public function getPakiet(): ?array
    {
        return $this->pakiet;
    }
    /**
     * Set pakiet value
     * @param \App\ElektronicznyNadawca\StructType\PakietType[] $pakiet
     * @return \App\ElektronicznyNadawca\StructType\SendEnvelope
     */
    public function setPakiet(?array $pakiet = null): self
    {
        $this->pakiet = $pakiet;
        
        return $this;
    }
    /**
     * Add item to pakiet value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\PakietType $item
     * @return \App\ElektronicznyNadawca\StructType\SendEnvelope
     */
    public function addToPakiet(\App\ElektronicznyNadawca\StructType\PakietType $item): self
    {
        $this->pakiet[] = $item;
        
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
     * @return \App\ElektronicznyNadawca\StructType\SendEnvelope
     */
    public function setIdBufor(?int $idBufor = null): self
    {
        $this->idBufor = $idBufor;
        
        return $this;
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
     * @return \App\ElektronicznyNadawca\StructType\SendEnvelope
     */
    public function setProfil(?\App\ElektronicznyNadawca\StructType\ProfilType $profil = null): self
    {
        $this->profil = $profil;
        
        return $this;
    }
}
