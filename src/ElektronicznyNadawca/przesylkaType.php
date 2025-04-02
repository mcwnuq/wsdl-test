<?php

namespace App\ElektronicznyNadawca;

abstract class przesylkaType
{

    /**
     * @var oplacaOdbiorcaType $oplacaOdbiorca
     */
    protected $oplacaOdbiorca = null;

    /**
     * @var string $mpk
     */
    protected $mpk = null;

    /**
     * @var guidType $guid
     */
    protected $guid = null;

    /**
     * @var guidType $pakietGuid
     */
    protected $pakietGuid = null;

    /**
     * @var guidType $opakowanieGuid
     */
    protected $opakowanieGuid = null;

    /**
     * @var opisType $opis
     */
    protected $opis = null;

    /**
     * @var date $planowanaDataNadania
     */
    protected $planowanaDataNadania = null;

    /**
     * @param guidType $guid
     * @param guidType $pakietGuid
     * @param guidType $opakowanieGuid
     * @param opisType $opis
     * @param date $planowanaDataNadania
     */
    public function __construct($guid, $pakietGuid, $opakowanieGuid, $opis, $planowanaDataNadania)
    {
      $this->guid = $guid;
      $this->pakietGuid = $pakietGuid;
      $this->opakowanieGuid = $opakowanieGuid;
      $this->opis = $opis;
      $this->planowanaDataNadania = $planowanaDataNadania;
    }

    /**
     * @return oplacaOdbiorcaType
     */
    public function getOplacaOdbiorca()
    {
      return $this->oplacaOdbiorca;
    }

    /**
     * @param oplacaOdbiorcaType $oplacaOdbiorca
     * @return \App\ElektronicznyNadawca\przesylkaType
     */
    public function setOplacaOdbiorca($oplacaOdbiorca)
    {
      $this->oplacaOdbiorca = $oplacaOdbiorca;
      return $this;
    }

    /**
     * @return string
     */
    public function getMpk()
    {
      return $this->mpk;
    }

    /**
     * @param string $mpk
     * @return \App\ElektronicznyNadawca\przesylkaType
     */
    public function setMpk($mpk)
    {
      $this->mpk = $mpk;
      return $this;
    }

    /**
     * @return guidType
     */
    public function getGuid()
    {
      return $this->guid;
    }

    /**
     * @param guidType $guid
     * @return \App\ElektronicznyNadawca\przesylkaType
     */
    public function setGuid($guid)
    {
      $this->guid = $guid;
      return $this;
    }

    /**
     * @return guidType
     */
    public function getPakietGuid()
    {
      return $this->pakietGuid;
    }

    /**
     * @param guidType $pakietGuid
     * @return \App\ElektronicznyNadawca\przesylkaType
     */
    public function setPakietGuid($pakietGuid)
    {
      $this->pakietGuid = $pakietGuid;
      return $this;
    }

    /**
     * @return guidType
     */
    public function getOpakowanieGuid()
    {
      return $this->opakowanieGuid;
    }

    /**
     * @param guidType $opakowanieGuid
     * @return \App\ElektronicznyNadawca\przesylkaType
     */
    public function setOpakowanieGuid($opakowanieGuid)
    {
      $this->opakowanieGuid = $opakowanieGuid;
      return $this;
    }

    /**
     * @return opisType
     */
    public function getOpis()
    {
      return $this->opis;
    }

    /**
     * @param opisType $opis
     * @return \App\ElektronicznyNadawca\przesylkaType
     */
    public function setOpis($opis)
    {
      $this->opis = $opis;
      return $this;
    }

    /**
     * @return date
     */
    public function getPlanowanaDataNadania()
    {
      return $this->planowanaDataNadania;
    }

    /**
     * @param date $planowanaDataNadania
     * @return \App\ElektronicznyNadawca\przesylkaType
     */
    public function setPlanowanaDataNadania($planowanaDataNadania)
    {
      $this->planowanaDataNadania = $planowanaDataNadania;
      return $this;
    }

}
