<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for updateReturnDocumentsProfile StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdateReturnDocumentsProfile
{
    /**
     * The profile
     * @var \App\ElektronicznyNadawca\StructType\ReturnDocumentProfileType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\ReturnDocumentProfileType $profile = null;
    /**
     * Constructor method for updateReturnDocumentsProfile
     * @uses UpdateReturnDocumentsProfile::setProfile()
     * @param \App\ElektronicznyNadawca\StructType\ReturnDocumentProfileType $profile
     */
    public function __construct(?\App\ElektronicznyNadawca\StructType\ReturnDocumentProfileType $profile = null)
    {
        $this
            ->setProfile($profile);
    }
    /**
     * Get profile value
     * @return \App\ElektronicznyNadawca\StructType\ReturnDocumentProfileType|null
     */
    public function getProfile(): ?\App\ElektronicznyNadawca\StructType\ReturnDocumentProfileType
    {
        return $this->profile;
    }
    /**
     * Set profile value
     * @param \App\ElektronicznyNadawca\StructType\ReturnDocumentProfileType $profile
     * @return \App\ElektronicznyNadawca\StructType\UpdateReturnDocumentsProfile
     */
    public function setProfile(?\App\ElektronicznyNadawca\StructType\ReturnDocumentProfileType $profile = null): self
    {
        $this->profile = $profile;
        
        return $this;
    }
}
