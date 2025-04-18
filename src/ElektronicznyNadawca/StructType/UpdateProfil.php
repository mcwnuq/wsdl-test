<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updateProfil StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdateProfil extends AbstractStructBase
{
    /**
     * The profil
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \App\ElektronicznyNadawca\StructType\ProfilType
     */
    public \App\ElektronicznyNadawca\StructType\ProfilType $profil;
    /**
     * Constructor method for updateProfil
     * @uses UpdateProfil::setProfil()
     * @param \App\ElektronicznyNadawca\StructType\ProfilType $profil
     */
    public function __construct(\App\ElektronicznyNadawca\StructType\ProfilType $profil)
    {
        $this
            ->setProfil($profil);
    }
    /**
     * Get profil value
     * @return \App\ElektronicznyNadawca\StructType\ProfilType
     */
    public function getProfil(): \App\ElektronicznyNadawca\StructType\ProfilType
    {
        return $this->profil;
    }
    /**
     * Set profil value
     * @param \App\ElektronicznyNadawca\StructType\ProfilType $profil
     * @return \App\ElektronicznyNadawca\StructType\UpdateProfil
     */
    public function setProfil(\App\ElektronicznyNadawca\StructType\ProfilType $profil): self
    {
        $this->profil = $profil;
        
        return $this;
    }
}
