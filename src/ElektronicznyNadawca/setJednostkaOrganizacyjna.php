<?php

namespace App\ElektronicznyNadawca;

class setJednostkaOrganizacyjna
{

    /**
     * @var jednostkaOrganizacyjnaType $jednostkaOrganizacyjna
     */
    protected $jednostkaOrganizacyjna = null;

    /**
     * @param jednostkaOrganizacyjnaType $jednostkaOrganizacyjna
     */
    public function __construct($jednostkaOrganizacyjna)
    {
      $this->jednostkaOrganizacyjna = $jednostkaOrganizacyjna;
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
     * @return \App\ElektronicznyNadawca\setJednostkaOrganizacyjna
     */
    public function setJednostkaOrganizacyjna($jednostkaOrganizacyjna)
    {
      $this->jednostkaOrganizacyjna = $jednostkaOrganizacyjna;
      return $this;
    }

}
