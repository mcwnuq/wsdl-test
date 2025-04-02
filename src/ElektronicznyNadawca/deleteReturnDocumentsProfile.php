<?php

namespace App\ElektronicznyNadawca;

class deleteReturnDocumentsProfile
{

    /**
     * @var int $idProfile
     */
    protected $idProfile = null;

    /**
     * @param int $idProfile
     */
    public function __construct($idProfile)
    {
      $this->idProfile = $idProfile;
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
     * @return \App\ElektronicznyNadawca\deleteReturnDocumentsProfile
     */
    public function setIdProfile($idProfile)
    {
      $this->idProfile = $idProfile;
      return $this;
    }

}
