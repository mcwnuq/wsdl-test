<?php

namespace App\ElektronicznyNadawca;

class pocztex2021KurierType extends pocztex2021Type
{

    /**
     * @var subPocztex2021KurierType[] $subPrzesylka
     */
    protected $subPrzesylka = null;

    /**
     * @var punktOdbioruType $punktOdbioru
     */
    protected $punktOdbioru = null;

    /**
     * @var punktNadaniaType $punktNadania
     */
    protected $punktNadania = null;

    /**
     * @var boolean $kopertaPocztex
     */
    protected $kopertaPocztex = null;

    /**
     * @var godzinaDoreczeniaPocztex2021Enum $godzinaDoreczenia
     */
    protected $godzinaDoreczenia = null;

    /**
     * @var date $doreczenieWeWskazanymDniu
     */
    protected $doreczenieWeWskazanymDniu = null;

    /**
     * @var shipmentChannelPocztex2021Enum $shipmentChannel
     */
    protected $shipmentChannel = null;

    /**
     * @var date $labelExpirationDate
     */
    protected $labelExpirationDate = null;

    /**
     * @param guidType $guid
     * @param guidType $pakietGuid
     * @param guidType $opakowanieGuid
     * @param opisType $opis
     * @param date $planowanaDataNadania
     * @param numerNadaniaType $numerNadania
     * @param sygnaturaType $sygnatura
     * @param terminType $terminSprawy
     * @param rodzajType $rodzaj
     * @param boolean $weryfikacjaPlatnosci
     */
    public function __construct($guid, $pakietGuid, $opakowanieGuid, $opis, $planowanaDataNadania, $numerNadania, $sygnatura, $terminSprawy, $rodzaj, $weryfikacjaPlatnosci)
    {
      parent::__construct($guid, $pakietGuid, $opakowanieGuid, $opis, $planowanaDataNadania, $numerNadania, $sygnatura, $terminSprawy, $rodzaj, $weryfikacjaPlatnosci);
    }

    /**
     * @return subPocztex2021KurierType[]
     */
    public function getSubPrzesylka()
    {
      return $this->subPrzesylka;
    }

    /**
     * @param subPocztex2021KurierType[] $subPrzesylka
     * @return \App\ElektronicznyNadawca\pocztex2021KurierType
     */
    public function setSubPrzesylka(array $subPrzesylka = null)
    {
      $this->subPrzesylka = $subPrzesylka;
      return $this;
    }

    /**
     * @return punktOdbioruType
     */
    public function getPunktOdbioru()
    {
      return $this->punktOdbioru;
    }

    /**
     * @param punktOdbioruType $punktOdbioru
     * @return \App\ElektronicznyNadawca\pocztex2021KurierType
     */
    public function setPunktOdbioru($punktOdbioru)
    {
      $this->punktOdbioru = $punktOdbioru;
      return $this;
    }

    /**
     * @return punktNadaniaType
     */
    public function getPunktNadania()
    {
      return $this->punktNadania;
    }

    /**
     * @param punktNadaniaType $punktNadania
     * @return \App\ElektronicznyNadawca\pocztex2021KurierType
     */
    public function setPunktNadania($punktNadania)
    {
      $this->punktNadania = $punktNadania;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKopertaPocztex()
    {
      return $this->kopertaPocztex;
    }

    /**
     * @param boolean $kopertaPocztex
     * @return \App\ElektronicznyNadawca\pocztex2021KurierType
     */
    public function setKopertaPocztex($kopertaPocztex)
    {
      $this->kopertaPocztex = $kopertaPocztex;
      return $this;
    }

    /**
     * @return godzinaDoreczeniaPocztex2021Enum
     */
    public function getGodzinaDoreczenia()
    {
      return $this->godzinaDoreczenia;
    }

    /**
     * @param godzinaDoreczeniaPocztex2021Enum $godzinaDoreczenia
     * @return \App\ElektronicznyNadawca\pocztex2021KurierType
     */
    public function setGodzinaDoreczenia($godzinaDoreczenia)
    {
      $this->godzinaDoreczenia = $godzinaDoreczenia;
      return $this;
    }

    /**
     * @return date
     */
    public function getDoreczenieWeWskazanymDniu()
    {
      return $this->doreczenieWeWskazanymDniu;
    }

    /**
     * @param date $doreczenieWeWskazanymDniu
     * @return \App\ElektronicznyNadawca\pocztex2021KurierType
     */
    public function setDoreczenieWeWskazanymDniu($doreczenieWeWskazanymDniu)
    {
      $this->doreczenieWeWskazanymDniu = $doreczenieWeWskazanymDniu;
      return $this;
    }

    /**
     * @return shipmentChannelPocztex2021Enum
     */
    public function getShipmentChannel()
    {
      return $this->shipmentChannel;
    }

    /**
     * @param shipmentChannelPocztex2021Enum $shipmentChannel
     * @return \App\ElektronicznyNadawca\pocztex2021KurierType
     */
    public function setShipmentChannel($shipmentChannel)
    {
      $this->shipmentChannel = $shipmentChannel;
      return $this;
    }

    /**
     * @return date
     */
    public function getLabelExpirationDate()
    {
      return $this->labelExpirationDate;
    }

    /**
     * @param date $labelExpirationDate
     * @return \App\ElektronicznyNadawca\pocztex2021KurierType
     */
    public function setLabelExpirationDate($labelExpirationDate)
    {
      $this->labelExpirationDate = $labelExpirationDate;
      return $this;
    }

}
