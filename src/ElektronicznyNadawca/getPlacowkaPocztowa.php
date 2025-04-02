<?php

namespace App\ElektronicznyNadawca;

class getPlacowkaPocztowa
{

    /**
     * @var int $pni
     */
    protected $pni = null;

    /**
     * @param int $pni
     */
    public function __construct($pni)
    {
      $this->pni = $pni;
    }

    /**
     * @return int
     */
    public function getPni()
    {
      return $this->pni;
    }

    /**
     * @param int $pni
     * @return \App\ElektronicznyNadawca\getPlacowkaPocztowa
     */
    public function setPni($pni)
    {
      $this->pni = $pni;
      return $this;
    }

}
