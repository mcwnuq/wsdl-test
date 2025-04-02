<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for deleteReturnDocumentsProfile StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteReturnDocumentsProfile extends AbstractStructBase
{
    /**
     * The idProfile
     * @var int|null
     */
    public ?int $idProfile = null;
    /**
     * Constructor method for deleteReturnDocumentsProfile
     * @uses DeleteReturnDocumentsProfile::setIdProfile()
     * @param int $idProfile
     */
    public function __construct(?int $idProfile = null)
    {
        $this
            ->setIdProfile($idProfile);
    }
    /**
     * Get idProfile value
     * @return int|null
     */
    public function getIdProfile(): ?int
    {
        return $this->idProfile;
    }
    /**
     * Set idProfile value
     * @param int $idProfile
     * @return \App\ElektronicznyNadawca\StructType\DeleteReturnDocumentsProfile
     */
    public function setIdProfile(?int $idProfile = null): self
    {
        $this->idProfile = $idProfile;
        
        return $this;
    }
}
