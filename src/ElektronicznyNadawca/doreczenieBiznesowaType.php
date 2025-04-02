<?php

namespace App\ElektronicznyNadawca;

class doreczenieBiznesowaType
{

    /**
     * @var boolean $doRakWlasnych
     */
    protected $doRakWlasnych = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getDoRakWlasnych()
    {
      return $this->doRakWlasnych;
    }

    /**
     * @param boolean $doRakWlasnych
     * @return \App\ElektronicznyNadawca\doreczenieBiznesowaType
     */
    public function setDoRakWlasnych($doRakWlasnych)
    {
      $this->doRakWlasnych = $doRakWlasnych;
      return $this;
    }

}
