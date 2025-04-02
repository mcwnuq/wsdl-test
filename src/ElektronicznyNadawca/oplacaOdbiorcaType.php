<?php

namespace App\ElektronicznyNadawca;

class oplacaOdbiorcaType
{

    /**
     * @var typOplacaOdbiorcaEnum $typ
     */
    protected $typ = null;

    /**
     * @var oplacaOdbiorcaKartaType $karta
     */
    protected $karta = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return typOplacaOdbiorcaEnum
     */
    public function getTyp()
    {
      return $this->typ;
    }

    /**
     * @param typOplacaOdbiorcaEnum $typ
     * @return \App\ElektronicznyNadawca\oplacaOdbiorcaType
     */
    public function setTyp($typ)
    {
      $this->typ = $typ;
      return $this;
    }

    /**
     * @return oplacaOdbiorcaKartaType
     */
    public function getKarta()
    {
      return $this->karta;
    }

    /**
     * @param oplacaOdbiorcaKartaType $karta
     * @return \App\ElektronicznyNadawca\oplacaOdbiorcaType
     */
    public function setKarta($karta)
    {
      $this->karta = $karta;
      return $this;
    }

}
