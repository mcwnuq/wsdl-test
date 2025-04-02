<?php

namespace App\ElektronicznyNadawca;

class updateReturnDocumentsProfile
{

    /**
     * @var returnDocumentProfileType $profile
     */
    protected $profile = null;

    /**
     * @param returnDocumentProfileType $profile
     */
    public function __construct($profile)
    {
      $this->profile = $profile;
    }

    /**
     * @return returnDocumentProfileType
     */
    public function getProfile()
    {
      return $this->profile;
    }

    /**
     * @param returnDocumentProfileType $profile
     * @return \App\ElektronicznyNadawca\updateReturnDocumentsProfile
     */
    public function setProfile($profile)
    {
      $this->profile = $profile;
      return $this;
    }

}
