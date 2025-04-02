<?php

namespace App\ElektronicznyNadawca;

class addShipmentResponseItemType
{

    /**
     * @var errorType[] $error
     */
    protected $error = null;

    /**
     * @var numerNadaniaType $numerNadania
     */
    protected $numerNadania = null;

    /**
     * @var guidType $guid
     */
    protected $guid = null;

    /**
     * @var string $numerTransakcjiOdbioru
     */
    protected $numerTransakcjiOdbioru = null;

    /**
     * @var string $numerListuPrzewozowego
     */
    protected $numerListuPrzewozowego = null;

    /**
     * @param numerNadaniaType $numerNadania
     * @param guidType $guid
     * @param string $numerTransakcjiOdbioru
     * @param string $numerListuPrzewozowego
     */
    public function __construct($numerNadania, $guid, $numerTransakcjiOdbioru, $numerListuPrzewozowego)
    {
      $this->numerNadania = $numerNadania;
      $this->guid = $guid;
      $this->numerTransakcjiOdbioru = $numerTransakcjiOdbioru;
      $this->numerListuPrzewozowego = $numerListuPrzewozowego;
    }

    /**
     * @return errorType[]
     */
    public function getError()
    {
      return $this->error;
    }

    /**
     * @param errorType[] $error
     * @return \App\ElektronicznyNadawca\addShipmentResponseItemType
     */
    public function setError(array $error = null)
    {
      $this->error = $error;
      return $this;
    }

    /**
     * @return numerNadaniaType
     */
    public function getNumerNadania()
    {
      return $this->numerNadania;
    }

    /**
     * @param numerNadaniaType $numerNadania
     * @return \App\ElektronicznyNadawca\addShipmentResponseItemType
     */
    public function setNumerNadania($numerNadania)
    {
      $this->numerNadania = $numerNadania;
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
     * @return \App\ElektronicznyNadawca\addShipmentResponseItemType
     */
    public function setGuid($guid)
    {
      $this->guid = $guid;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumerTransakcjiOdbioru()
    {
      return $this->numerTransakcjiOdbioru;
    }

    /**
     * @param string $numerTransakcjiOdbioru
     * @return \App\ElektronicznyNadawca\addShipmentResponseItemType
     */
    public function setNumerTransakcjiOdbioru($numerTransakcjiOdbioru)
    {
      $this->numerTransakcjiOdbioru = $numerTransakcjiOdbioru;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumerListuPrzewozowego()
    {
      return $this->numerListuPrzewozowego;
    }

    /**
     * @param string $numerListuPrzewozowego
     * @return \App\ElektronicznyNadawca\addShipmentResponseItemType
     */
    public function setNumerListuPrzewozowego($numerListuPrzewozowego)
    {
      $this->numerListuPrzewozowego = $numerListuPrzewozowego;
      return $this;
    }

}
