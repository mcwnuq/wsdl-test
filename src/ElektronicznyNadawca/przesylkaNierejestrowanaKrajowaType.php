<?php

namespace App\ElektronicznyNadawca;

class przesylkaNierejestrowanaKrajowaType extends przesylkaNieRejestrowanaType
{

    /**
     * @var IdLibraryForLegalDepositType $idLibraryForLegalDeposit
     */
    protected $idLibraryForLegalDeposit = null;

    /**
     * @var kategoriaType $kategoria
     */
    protected $kategoria = null;

    /**
     * @var formatType $format
     */
    protected $format = null;

    /**
     * @var masaType $masa
     */
    protected $masa = null;

    /**
     * @var boolean $egzemplarzBiblioteczny
     */
    protected $egzemplarzBiblioteczny = null;

    /**
     * @param guidType $guid
     * @param guidType $pakietGuid
     * @param guidType $opakowanieGuid
     * @param opisType $opis
     * @param date $planowanaDataNadania
     * @param anonymous94 $ilosc
     * @param kategoriaType $kategoria
     * @param formatType $format
     * @param masaType $masa
     * @param boolean $egzemplarzBiblioteczny
     */
    public function __construct($guid, $pakietGuid, $opakowanieGuid, $opis, $planowanaDataNadania, $ilosc, $kategoria, $format, $masa, $egzemplarzBiblioteczny)
    {
      parent::__construct($guid, $pakietGuid, $opakowanieGuid, $opis, $planowanaDataNadania, $ilosc);
      $this->kategoria = $kategoria;
      $this->format = $format;
      $this->masa = $masa;
      $this->egzemplarzBiblioteczny = $egzemplarzBiblioteczny;
    }

    /**
     * @return IdLibraryForLegalDepositType
     */
    public function getIdLibraryForLegalDeposit()
    {
      return $this->idLibraryForLegalDeposit;
    }

    /**
     * @param IdLibraryForLegalDepositType $idLibraryForLegalDeposit
     * @return \App\ElektronicznyNadawca\przesylkaNierejestrowanaKrajowaType
     */
    public function setIdLibraryForLegalDeposit($idLibraryForLegalDeposit)
    {
      $this->idLibraryForLegalDeposit = $idLibraryForLegalDeposit;
      return $this;
    }

    /**
     * @return kategoriaType
     */
    public function getKategoria()
    {
      return $this->kategoria;
    }

    /**
     * @param kategoriaType $kategoria
     * @return \App\ElektronicznyNadawca\przesylkaNierejestrowanaKrajowaType
     */
    public function setKategoria($kategoria)
    {
      $this->kategoria = $kategoria;
      return $this;
    }

    /**
     * @return formatType
     */
    public function getFormat()
    {
      return $this->format;
    }

    /**
     * @param formatType $format
     * @return \App\ElektronicznyNadawca\przesylkaNierejestrowanaKrajowaType
     */
    public function setFormat($format)
    {
      $this->format = $format;
      return $this;
    }

    /**
     * @return masaType
     */
    public function getMasa()
    {
      return $this->masa;
    }

    /**
     * @param masaType $masa
     * @return \App\ElektronicznyNadawca\przesylkaNierejestrowanaKrajowaType
     */
    public function setMasa($masa)
    {
      $this->masa = $masa;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEgzemplarzBiblioteczny()
    {
      return $this->egzemplarzBiblioteczny;
    }

    /**
     * @param boolean $egzemplarzBiblioteczny
     * @return \App\ElektronicznyNadawca\przesylkaNierejestrowanaKrajowaType
     */
    public function setEgzemplarzBiblioteczny($egzemplarzBiblioteczny)
    {
      $this->egzemplarzBiblioteczny = $egzemplarzBiblioteczny;
      return $this;
    }

}
