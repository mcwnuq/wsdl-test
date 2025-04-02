<?php

namespace App\ElektronicznyNadawca;

class getJednostkaOrganizacyjnaResponse
{

    /**
     * @var jednostkaOrganizacyjnaType $jednostkaOrganizacyjna
     */
    protected $jednostkaOrganizacyjna = null;

    /**
     * @var errorType $error
     */
    protected $error = null;

    /**
     * @param jednostkaOrganizacyjnaType $jednostkaOrganizacyjna
     * @param errorType $error
     */
    public function __construct($jednostkaOrganizacyjna, $error)
    {
      $this->jednostkaOrganizacyjna = $jednostkaOrganizacyjna;
      $this->error = $error;
    }

    /**
     * @return jednostkaOrganizacyjnaType
     */
    public function getJednostkaOrganizacyjna()
    {
      return $this->jednostkaOrganizacyjna;
    }

    /**
     * @param jednostkaOrganizacyjnaType $jednostkaOrganizacyjna
     * @return \App\ElektronicznyNadawca\getJednostkaOrganizacyjnaResponse
     */
    public function setJednostkaOrganizacyjna($jednostkaOrganizacyjna)
    {
      $this->jednostkaOrganizacyjna = $jednostkaOrganizacyjna;
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
     * @return \App\ElektronicznyNadawca\getJednostkaOrganizacyjnaResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
