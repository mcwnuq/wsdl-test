<?php

namespace App\ElektronicznyNadawca;

class awizacjaType
{

    /**
     * @var time $od
     */
    protected $od = null;

    /**
     * @var time $do
     */
    protected $do = null;

    /**
     * @param time $od
     * @param time $do
     */
    public function __construct($od, $do)
    {
      $this->od = $od;
      $this->do = $do;
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
     * @return \App\ElektronicznyNadawca\awizacjaType
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
     * @return \App\ElektronicznyNadawca\awizacjaType
     */
    public function setDo($do)
    {
      $this->do = $do;
      return $this;
    }

}
