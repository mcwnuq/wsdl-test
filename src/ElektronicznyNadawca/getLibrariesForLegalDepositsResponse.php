<?php

namespace App\ElektronicznyNadawca;

class getLibrariesForLegalDepositsResponse
{

    /**
     * @var LibraryForLegalDepositType $libraryForLegalDeposit
     */
    protected $libraryForLegalDeposit = null;

    /**
     * @param LibraryForLegalDepositType $libraryForLegalDeposit
     */
    public function __construct($libraryForLegalDeposit)
    {
      $this->libraryForLegalDeposit = $libraryForLegalDeposit;
    }

    /**
     * @return LibraryForLegalDepositType
     */
    public function getLibraryForLegalDeposit()
    {
      return $this->libraryForLegalDeposit;
    }

    /**
     * @param LibraryForLegalDepositType $libraryForLegalDeposit
     * @return \App\ElektronicznyNadawca\getLibrariesForLegalDepositsResponse
     */
    public function setLibraryForLegalDeposit($libraryForLegalDeposit)
    {
      $this->libraryForLegalDeposit = $libraryForLegalDeposit;
      return $this;
    }

}
