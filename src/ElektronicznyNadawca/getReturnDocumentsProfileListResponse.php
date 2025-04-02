<?php

namespace App\ElektronicznyNadawca;

class getReturnDocumentsProfileListResponse
{

    /**
     * @var returnDocumentProfileType $profile
     */
    protected $profile = null;

    /**
     * @var errorType $error
     */
    protected $error = null;

    /**
     * @param returnDocumentProfileType $profile
     * @param errorType $error
     */
    public function __construct($profile, $error)
    {
      $this->profile = $profile;
      $this->error = $error;
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
     * @return \App\ElektronicznyNadawca\getReturnDocumentsProfileListResponse
     */
    public function setProfile($profile)
    {
      $this->profile = $profile;
      return $this;
    }

    /**
     * @return errorType
     */
    public function getError()
    {
      return $this->error;
    }

    /**
     * @param errorType $error
     * @return \App\ElektronicznyNadawca\getReturnDocumentsProfileListResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
