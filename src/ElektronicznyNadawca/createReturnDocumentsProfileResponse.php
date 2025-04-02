<?php

namespace App\ElektronicznyNadawca;

class createReturnDocumentsProfileResponse
{

    /**
     * @var boolean $result
     */
    protected $result = null;

    /**
     * @var int $idProfile
     */
    protected $idProfile = null;

    /**
     * @var errorType $error
     */
    protected $error = null;

    /**
     * @param boolean $result
     * @param int $idProfile
     * @param errorType $error
     */
    public function __construct($result, $idProfile, $error)
    {
      $this->result = $result;
      $this->idProfile = $idProfile;
      $this->error = $error;
    }

    /**
     * @return boolean
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param boolean $result
     * @return \App\ElektronicznyNadawca\createReturnDocumentsProfileResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdProfile()
    {
      return $this->idProfile;
    }

    /**
     * @param int $idProfile
     * @return \App\ElektronicznyNadawca\createReturnDocumentsProfileResponse
     */
    public function setIdProfile($idProfile)
    {
      $this->idProfile = $idProfile;
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
     * @return \App\ElektronicznyNadawca\createReturnDocumentsProfileResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
