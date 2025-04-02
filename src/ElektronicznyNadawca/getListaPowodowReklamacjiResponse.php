<?php

namespace App\ElektronicznyNadawca;

class getListaPowodowReklamacjiResponse
{

    /**
     * @var kategoriePowodowReklamacjiType $kategoriePowodowReklamacji
     */
    protected $kategoriePowodowReklamacji = null;

    /**
     * @param kategoriePowodowReklamacjiType $kategoriePowodowReklamacji
     */
    public function __construct($kategoriePowodowReklamacji)
    {
      $this->kategoriePowodowReklamacji = $kategoriePowodowReklamacji;
    }

    /**
     * @return kategoriePowodowReklamacjiType
     */
    public function getKategoriePowodowReklamacji()
    {
      return $this->kategoriePowodowReklamacji;
    }

    /**
     * @param kategoriePowodowReklamacjiType $kategoriePowodowReklamacji
     * @return \App\ElektronicznyNadawca\getListaPowodowReklamacjiResponse
     */
    public function setKategoriePowodowReklamacji($kategoriePowodowReklamacji)
    {
      $this->kategoriePowodowReklamacji = $kategoriePowodowReklamacji;
      return $this;
    }

}
