<?php

namespace App\ElektronicznyNadawca;

class buforType
{

    /**
     * @var profilType $profil
     */
    protected $profil = null;

    /**
     * @var int $idKarta
     */
    protected $idKarta = null;

    /**
     * @var int $idBufor
     */
    protected $idBufor = null;

    /**
     * @var date $dataNadania
     */
    protected $dataNadania = null;

    /**
     * @var urzadNadaniaType $urzadNadania
     */
    protected $urzadNadania = null;

    /**
     * @var boolean $active
     */
    protected $active = null;

    /**
     * @var string $opis
     */
    protected $opis = null;

    /**
     * @var boolean $aktualizujPlanowanaDateNadaniaPrzesylek
     */
    protected $aktualizujPlanowanaDateNadaniaPrzesylek = null;

    /**
     * @param int $idBufor
     * @param date $dataNadania
     * @param urzadNadaniaType $urzadNadania
     * @param boolean $active
     * @param string $opis
     * @param boolean $aktualizujPlanowanaDateNadaniaPrzesylek
     */
    public function __construct($idBufor, $dataNadania, $urzadNadania, $active, $opis, $aktualizujPlanowanaDateNadaniaPrzesylek)
    {
      $this->idBufor = $idBufor;
      $this->dataNadania = $dataNadania;
      $this->urzadNadania = $urzadNadania;
      $this->active = $active;
      $this->opis = $opis;
      $this->aktualizujPlanowanaDateNadaniaPrzesylek = $aktualizujPlanowanaDateNadaniaPrzesylek;
    }

    /**
     * @return profilType
     */
    public function getProfil()
    {
      return $this->profil;
    }

    /**
     * @param profilType $profil
     * @return \App\ElektronicznyNadawca\buforType
     */
    public function setProfil($profil)
    {
      $this->profil = $profil;
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
     * @return \App\ElektronicznyNadawca\buforType
     */
    public function setIdKarta($idKarta)
    {
      $this->idKarta = $idKarta;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdBufor()
    {
      return $this->idBufor;
    }

    /**
     * @param int $idBufor
     * @return \App\ElektronicznyNadawca\buforType
     */
    public function setIdBufor($idBufor)
    {
      $this->idBufor = $idBufor;
      return $this;
    }

    /**
     * @return date
     */
    public function getDataNadania()
    {
      return $this->dataNadania;
    }

    /**
     * @param date $dataNadania
     * @return \App\ElektronicznyNadawca\buforType
     */
    public function setDataNadania($dataNadania)
    {
      $this->dataNadania = $dataNadania;
      return $this;
    }

    /**
     * @return urzadNadaniaType
     */
    public function getUrzadNadania()
    {
      return $this->urzadNadania;
    }

    /**
     * @param urzadNadaniaType $urzadNadania
     * @return \App\ElektronicznyNadawca\buforType
     */
    public function setUrzadNadania($urzadNadania)
    {
      $this->urzadNadania = $urzadNadania;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getActive()
    {
      return $this->active;
    }

    /**
     * @param boolean $active
     * @return \App\ElektronicznyNadawca\buforType
     */
    public function setActive($active)
    {
      $this->active = $active;
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
     * @return \App\ElektronicznyNadawca\buforType
     */
    public function setOpis($opis)
    {
      $this->opis = $opis;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAktualizujPlanowanaDateNadaniaPrzesylek()
    {
      return $this->aktualizujPlanowanaDateNadaniaPrzesylek;
    }

    /**
     * @param boolean $aktualizujPlanowanaDateNadaniaPrzesylek
     * @return \App\ElektronicznyNadawca\buforType
     */
    public function setAktualizujPlanowanaDateNadaniaPrzesylek($aktualizujPlanowanaDateNadaniaPrzesylek)
    {
      $this->aktualizujPlanowanaDateNadaniaPrzesylek = $aktualizujPlanowanaDateNadaniaPrzesylek;
      return $this;
    }

}
