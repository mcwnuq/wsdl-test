<?php

namespace App\ElektronicznyNadawca;

class dataZlozeniaType
{

    /**
     * @var date $od
     */
    protected $od = null;

    /**
     * @var date $do
     */
    protected $do = null;

    /**
     * @param date $od
     * @param date $do
     */
    public function __construct($od, $do)
    {
      $this->od = $od;
      $this->do = $do;
    }

    /**
     * @return date
     */
    public function getOd()
    {
      return $this->od;
    }

    /**
     * @param date $od
     * @return \App\ElektronicznyNadawca\dataZlozeniaType
     */
    public function setOd($od)
    {
      $this->od = $od;
      return $this;
    }

    /**
     * @return date
     */
    public function getDo()
    {
      return $this->do;
    }

    /**
     * @param date $do
     * @return \App\ElektronicznyNadawca\dataZlozeniaType
     */
    public function setDo($do)
    {
      $this->do = $do;
      return $this;
    }

}
