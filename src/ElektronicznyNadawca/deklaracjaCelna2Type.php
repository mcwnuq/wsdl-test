<?php

namespace App\ElektronicznyNadawca;

class deklaracjaCelna2Type
{

    /**
     * @var DeklaracaCelnaRodzajEnum $rodzaj
     */
    protected $rodzaj = null;

    /**
     * @var ZawartoscPrzesylkiZagranicznejEnum $zawartoscPrzesylki
     */
    protected $zawartoscPrzesylki = null;

    /**
     * @var DokumentyTowarzyszaceType[] $dokumentyTowarzyszace
     */
    protected $dokumentyTowarzyszace = null;

    /**
     * @var string $wyjasnienie
     */
    protected $wyjasnienie = null;

    /**
     * @var string $oplatyPocztowe
     */
    protected $oplatyPocztowe = null;

    /**
     * @var string $uwagi
     */
    protected $uwagi = null;

    /**
     * @var string $numerReferencyjnyImportera
     */
    protected $numerReferencyjnyImportera = null;

    /**
     * @var string $numerTelefonuImportera
     */
    protected $numerTelefonuImportera = null;

    /**
     * @var string $walutaKodISO
     */
    protected $walutaKodISO = null;

    /**
     * @var SzczegolyZawartosciPrzesylkiZagranicznejType[] $szczegolyZawartosciPrzesylki
     */
    protected $szczegolyZawartosciPrzesylki = null;

    /**
     * @var string $numerReferencyjnyCelny
     */
    protected $numerReferencyjnyCelny = null;

    /**
     * @param DeklaracaCelnaRodzajEnum $rodzaj
     * @param ZawartoscPrzesylkiZagranicznejEnum $zawartoscPrzesylki
     * @param string $walutaKodISO
     * @param SzczegolyZawartosciPrzesylkiZagranicznejType[] $szczegolyZawartosciPrzesylki
     */
    public function __construct($rodzaj, $zawartoscPrzesylki, $walutaKodISO, array $szczegolyZawartosciPrzesylki)
    {
      $this->rodzaj = $rodzaj;
      $this->zawartoscPrzesylki = $zawartoscPrzesylki;
      $this->walutaKodISO = $walutaKodISO;
      $this->szczegolyZawartosciPrzesylki = $szczegolyZawartosciPrzesylki;
    }

    /**
     * @return DeklaracaCelnaRodzajEnum
     */
    public function getRodzaj()
    {
      return $this->rodzaj;
    }

    /**
     * @param DeklaracaCelnaRodzajEnum $rodzaj
     * @return \App\ElektronicznyNadawca\deklaracjaCelna2Type
     */
    public function setRodzaj($rodzaj)
    {
      $this->rodzaj = $rodzaj;
      return $this;
    }

    /**
     * @return ZawartoscPrzesylkiZagranicznejEnum
     */
    public function getZawartoscPrzesylki()
    {
      return $this->zawartoscPrzesylki;
    }

    /**
     * @param ZawartoscPrzesylkiZagranicznejEnum $zawartoscPrzesylki
     * @return \App\ElektronicznyNadawca\deklaracjaCelna2Type
     */
    public function setZawartoscPrzesylki($zawartoscPrzesylki)
    {
      $this->zawartoscPrzesylki = $zawartoscPrzesylki;
      return $this;
    }

    /**
     * @return DokumentyTowarzyszaceType[]
     */
    public function getDokumentyTowarzyszace()
    {
      return $this->dokumentyTowarzyszace;
    }

    /**
     * @param DokumentyTowarzyszaceType[] $dokumentyTowarzyszace
     * @return \App\ElektronicznyNadawca\deklaracjaCelna2Type
     */
    public function setDokumentyTowarzyszace(array $dokumentyTowarzyszace = null)
    {
      $this->dokumentyTowarzyszace = $dokumentyTowarzyszace;
      return $this;
    }

    /**
     * @return string
     */
    public function getWyjasnienie()
    {
      return $this->wyjasnienie;
    }

    /**
     * @param string $wyjasnienie
     * @return \App\ElektronicznyNadawca\deklaracjaCelna2Type
     */
    public function setWyjasnienie($wyjasnienie)
    {
      $this->wyjasnienie = $wyjasnienie;
      return $this;
    }

    /**
     * @return string
     */
    public function getOplatyPocztowe()
    {
      return $this->oplatyPocztowe;
    }

    /**
     * @param string $oplatyPocztowe
     * @return \App\ElektronicznyNadawca\deklaracjaCelna2Type
     */
    public function setOplatyPocztowe($oplatyPocztowe)
    {
      $this->oplatyPocztowe = $oplatyPocztowe;
      return $this;
    }

    /**
     * @return string
     */
    public function getUwagi()
    {
      return $this->uwagi;
    }

    /**
     * @param string $uwagi
     * @return \App\ElektronicznyNadawca\deklaracjaCelna2Type
     */
    public function setUwagi($uwagi)
    {
      $this->uwagi = $uwagi;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumerReferencyjnyImportera()
    {
      return $this->numerReferencyjnyImportera;
    }

    /**
     * @param string $numerReferencyjnyImportera
     * @return \App\ElektronicznyNadawca\deklaracjaCelna2Type
     */
    public function setNumerReferencyjnyImportera($numerReferencyjnyImportera)
    {
      $this->numerReferencyjnyImportera = $numerReferencyjnyImportera;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumerTelefonuImportera()
    {
      return $this->numerTelefonuImportera;
    }

    /**
     * @param string $numerTelefonuImportera
     * @return \App\ElektronicznyNadawca\deklaracjaCelna2Type
     */
    public function setNumerTelefonuImportera($numerTelefonuImportera)
    {
      $this->numerTelefonuImportera = $numerTelefonuImportera;
      return $this;
    }

    /**
     * @return string
     */
    public function getWalutaKodISO()
    {
      return $this->walutaKodISO;
    }

    /**
     * @param string $walutaKodISO
     * @return \App\ElektronicznyNadawca\deklaracjaCelna2Type
     */
    public function setWalutaKodISO($walutaKodISO)
    {
      $this->walutaKodISO = $walutaKodISO;
      return $this;
    }

    /**
     * @return SzczegolyZawartosciPrzesylkiZagranicznejType[]
     */
    public function getSzczegolyZawartosciPrzesylki()
    {
      return $this->szczegolyZawartosciPrzesylki;
    }

    /**
     * @param SzczegolyZawartosciPrzesylkiZagranicznejType[] $szczegolyZawartosciPrzesylki
     * @return \App\ElektronicznyNadawca\deklaracjaCelna2Type
     */
    public function setSzczegolyZawartosciPrzesylki(array $szczegolyZawartosciPrzesylki)
    {
      $this->szczegolyZawartosciPrzesylki = $szczegolyZawartosciPrzesylki;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumerReferencyjnyCelny()
    {
      return $this->numerReferencyjnyCelny;
    }

    /**
     * @param string $numerReferencyjnyCelny
     * @return \App\ElektronicznyNadawca\deklaracjaCelna2Type
     */
    public function setNumerReferencyjnyCelny($numerReferencyjnyCelny)
    {
      $this->numerReferencyjnyCelny = $numerReferencyjnyCelny;
      return $this;
    }

}
