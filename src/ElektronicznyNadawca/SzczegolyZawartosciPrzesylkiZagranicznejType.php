<?php

namespace App\ElektronicznyNadawca;

class SzczegolyZawartosciPrzesylkiZagranicznejType
{

    /**
     * @var string $okreslenieZawartosci
     */
    protected $okreslenieZawartosci = null;

    /**
     * @var int $ilosc
     */
    protected $ilosc = null;

    /**
     * @var int $masaNetto
     */
    protected $masaNetto = null;

    /**
     * @var float $wartosc
     */
    protected $wartosc = null;

    /**
     * @var string $numerTaryfyHs
     */
    protected $numerTaryfyHs = null;

    /**
     * @var string $krajPochodzeniaKodAlfa2
     */
    protected $krajPochodzeniaKodAlfa2 = null;

    /**
     * @param string $okreslenieZawartosci
     * @param int $ilosc
     * @param float $wartosc
     */
    public function __construct($okreslenieZawartosci, $ilosc, $wartosc)
    {
      $this->okreslenieZawartosci = $okreslenieZawartosci;
      $this->ilosc = $ilosc;
      $this->wartosc = $wartosc;
    }

    /**
     * @return string
     */
    public function getOkreslenieZawartosci()
    {
      return $this->okreslenieZawartosci;
    }

    /**
     * @param string $okreslenieZawartosci
     * @return \App\ElektronicznyNadawca\SzczegolyZawartosciPrzesylkiZagranicznejType
     */
    public function setOkreslenieZawartosci($okreslenieZawartosci)
    {
      $this->okreslenieZawartosci = $okreslenieZawartosci;
      return $this;
    }

    /**
     * @return int
     */
    public function getIlosc()
    {
      return $this->ilosc;
    }

    /**
     * @param int $ilosc
     * @return \App\ElektronicznyNadawca\SzczegolyZawartosciPrzesylkiZagranicznejType
     */
    public function setIlosc($ilosc)
    {
      $this->ilosc = $ilosc;
      return $this;
    }

    /**
     * @return int
     */
    public function getMasaNetto()
    {
      return $this->masaNetto;
    }

    /**
     * @param int $masaNetto
     * @return \App\ElektronicznyNadawca\SzczegolyZawartosciPrzesylkiZagranicznejType
     */
    public function setMasaNetto($masaNetto)
    {
      $this->masaNetto = $masaNetto;
      return $this;
    }

    /**
     * @return float
     */
    public function getWartosc()
    {
      return $this->wartosc;
    }

    /**
     * @param float $wartosc
     * @return \App\ElektronicznyNadawca\SzczegolyZawartosciPrzesylkiZagranicznejType
     */
    public function setWartosc($wartosc)
    {
      $this->wartosc = $wartosc;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumerTaryfyHs()
    {
      return $this->numerTaryfyHs;
    }

    /**
     * @param string $numerTaryfyHs
     * @return \App\ElektronicznyNadawca\SzczegolyZawartosciPrzesylkiZagranicznejType
     */
    public function setNumerTaryfyHs($numerTaryfyHs)
    {
      $this->numerTaryfyHs = $numerTaryfyHs;
      return $this;
    }

    /**
     * @return string
     */
    public function getKrajPochodzeniaKodAlfa2()
    {
      return $this->krajPochodzeniaKodAlfa2;
    }

    /**
     * @param string $krajPochodzeniaKodAlfa2
     * @return \App\ElektronicznyNadawca\SzczegolyZawartosciPrzesylkiZagranicznejType
     */
    public function setKrajPochodzeniaKodAlfa2($krajPochodzeniaKodAlfa2)
    {
      $this->krajPochodzeniaKodAlfa2 = $krajPochodzeniaKodAlfa2;
      return $this;
    }

}
