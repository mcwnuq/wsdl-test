<?php

namespace App\ElektronicznyNadawca;

class produktInKartaType
{

    /**
     * @var symbolIWDType $symbolIWD
     */
    protected $symbolIWD = null;

    /**
     * @var nazwaWyswietlanaType $nazwaWyswietlana
     */
    protected $nazwaWyswietlana = null;

    /**
     * @var nazwaProduktuType $nazwaProduktu
     */
    protected $nazwaProduktu = null;

    /**
     * @param symbolIWDType $symbolIWD
     * @param nazwaWyswietlanaType $nazwaWyswietlana
     * @param nazwaProduktuType $nazwaProduktu
     */
    public function __construct($symbolIWD, $nazwaWyswietlana, $nazwaProduktu)
    {
      $this->symbolIWD = $symbolIWD;
      $this->nazwaWyswietlana = $nazwaWyswietlana;
      $this->nazwaProduktu = $nazwaProduktu;
    }

    /**
     * @return symbolIWDType
     */
    public function getSymbolIWD()
    {
      return $this->symbolIWD;
    }

    /**
     * @param symbolIWDType $symbolIWD
     * @return \App\ElektronicznyNadawca\produktInKartaType
     */
    public function setSymbolIWD($symbolIWD)
    {
      $this->symbolIWD = $symbolIWD;
      return $this;
    }

    /**
     * @return nazwaWyswietlanaType
     */
    public function getNazwaWyswietlana()
    {
      return $this->nazwaWyswietlana;
    }

    /**
     * @param nazwaWyswietlanaType $nazwaWyswietlana
     * @return \App\ElektronicznyNadawca\produktInKartaType
     */
    public function setNazwaWyswietlana($nazwaWyswietlana)
    {
      $this->nazwaWyswietlana = $nazwaWyswietlana;
      return $this;
    }

    /**
     * @return nazwaProduktuType
     */
    public function getNazwaProduktu()
    {
      return $this->nazwaProduktu;
    }

    /**
     * @param nazwaProduktuType $nazwaProduktu
     * @return \App\ElektronicznyNadawca\produktInKartaType
     */
    public function setNazwaProduktu($nazwaProduktu)
    {
      $this->nazwaProduktu = $nazwaProduktu;
      return $this;
    }

}
