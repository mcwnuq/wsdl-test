<?php

namespace App\ElektronicznyNadawca;

class kartaType
{

    /**
     * @var produktyInKartaType $produktyInKarta
     */
    protected $produktyInKarta = null;

    /**
     * @var adresKorespondencyjny[] $adresKorespondencyjny
     */
    protected $adresKorespondencyjny = null;

    /**
     * @var int $idKarta
     */
    protected $idKarta = null;

    /**
     * @var string $opis
     */
    protected $opis = null;

    /**
     * @var boolean $aktywna
     */
    protected $aktywna = null;

    /**
     * @var int $typ
     */
    protected $typ = null;

    /**
     * @param int $idKarta
     * @param string $opis
     * @param boolean $aktywna
     * @param int $typ
     */
    public function __construct($idKarta, $opis, $aktywna, $typ)
    {
      $this->idKarta = $idKarta;
      $this->opis = $opis;
      $this->aktywna = $aktywna;
      $this->typ = $typ;
    }

    /**
     * @return produktyInKartaType
     */
    public function getProduktyInKarta()
    {
      return $this->produktyInKarta;
    }

    /**
     * @param produktyInKartaType $produktyInKarta
     * @return \App\ElektronicznyNadawca\kartaType
     */
    public function setProduktyInKarta($produktyInKarta)
    {
      $this->produktyInKarta = $produktyInKarta;
      return $this;
    }

    /**
     * @return adresKorespondencyjny[]
     */
    public function getAdresKorespondencyjny()
    {
      return $this->adresKorespondencyjny;
    }

    /**
     * @param adresKorespondencyjny[] $adresKorespondencyjny
     * @return \App\ElektronicznyNadawca\kartaType
     */
    public function setAdresKorespondencyjny(array $adresKorespondencyjny = null)
    {
      $this->adresKorespondencyjny = $adresKorespondencyjny;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdKarta()
    {
      return $this->idKarta;
    }

    /**
     * @param int $idKarta
     * @return \App\ElektronicznyNadawca\kartaType
     */
    public function setIdKarta($idKarta)
    {
      $this->idKarta = $idKarta;
      return $this;
    }

    /**
     * @return string
     */
    public function getOpis()
    {
      return $this->opis;
    }

    /**
     * @param string $opis
     * @return \App\ElektronicznyNadawca\kartaType
     */
    public function setOpis($opis)
    {
      $this->opis = $opis;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAktywna()
    {
      return $this->aktywna;
    }

    /**
     * @param boolean $aktywna
     * @return \App\ElektronicznyNadawca\kartaType
     */
    public function setAktywna($aktywna)
    {
      $this->aktywna = $aktywna;
      return $this;
    }

    /**
     * @return int
     */
    public function getTyp()
    {
      return $this->typ;
    }

    /**
     * @param int $typ
     * @return \App\ElektronicznyNadawca\kartaType
     */
    public function setTyp($typ)
    {
      $this->typ = $typ;
      return $this;
    }

}
