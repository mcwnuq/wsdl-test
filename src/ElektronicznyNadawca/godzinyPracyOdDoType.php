<?php

namespace App\ElektronicznyNadawca;

class godzinyPracyOdDoType
{

    /**
     * @var time $od
     */
    protected $od = null;

    /**
     * @var time $do
     */
    protected $do = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return time
     */
    public function getOd()
    {
      return $this->od;
    }

    /**
     * @param time $od
     * @return \App\ElektronicznyNadawca\godzinyPracyOdDoType
     */
    public function setOd($od)
    {
      $this->od = $od;
      return $this;
    }

    /**
     * @return time
     */
    public function getDo()
    {
      return $this->do;
    }

    /**
     * @param time $do
     * @return \App\ElektronicznyNadawca\godzinyPracyOdDoType
     */
    public function setDo($do)
    {
      $this->do = $do;
      return $this;
    }

}
