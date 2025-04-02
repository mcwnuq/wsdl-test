<?php

namespace App\ElektronicznyNadawca;

class zwrotDokumentowKurierskaType
{

    /**
     * @var terminZwrotDokumentowKurierskaType $rodzajPocztex
     */
    protected $rodzajPocztex = null;

    /**
     * @var rodzajListType $rodzajList
     */
    protected $rodzajList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return terminZwrotDokumentowKurierskaType
     */
    public function getRodzajPocztex()
    {
      return $this->rodzajPocztex;
    }

    /**
     * @param terminZwrotDokumentowKurierskaType $rodzajPocztex
     * @return \App\ElektronicznyNadawca\zwrotDokumentowKurierskaType
     */
    public function setRodzajPocztex($rodzajPocztex)
    {
      $this->rodzajPocztex = $rodzajPocztex;
      return $this;
    }

    /**
     * @return rodzajListType
     */
    public function getRodzajList()
    {
      return $this->rodzajList;
    }

    /**
     * @param rodzajListType $rodzajList
     * @return \App\ElektronicznyNadawca\zwrotDokumentowKurierskaType
     */
    public function setRodzajList($rodzajList)
    {
      $this->rodzajList = $rodzajList;
      return $this;
    }

}
