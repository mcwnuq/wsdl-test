<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for getProfilListResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetProfilListResponse
{
    /**
     * The profil
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \App\ElektronicznyNadawca\StructType\ProfilType[]
     */
    public array $profil;
    /**
     * Constructor method for getProfilListResponse
     * @uses GetProfilListResponse::setProfil()
     * @param \App\ElektronicznyNadawca\StructType\ProfilType[] $profil
     */
    public function __construct(array $profil)
    {
        $this
            ->setProfil($profil);
    }
    /**
     * Get profil value
     * @return \App\ElektronicznyNadawca\StructType\ProfilType[]
     */
    public function getProfil(): array
    {
        return $this->profil;
    }
    /**
     * Set profil value
     * @param \App\ElektronicznyNadawca\StructType\ProfilType[] $profil
     * @return \App\ElektronicznyNadawca\StructType\GetProfilListResponse
     */
    public function setProfil(array $profil): self
    {
        $this->profil = $profil;
        
        return $this;
    }
    /**
     * Add item to profil value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\ProfilType $item
     * @return \App\ElektronicznyNadawca\StructType\GetProfilListResponse
     */
    public function addToProfil(\App\ElektronicznyNadawca\StructType\ProfilType $item): self
    {
        $this->profil[] = $item;
        
        return $this;
    }
}
