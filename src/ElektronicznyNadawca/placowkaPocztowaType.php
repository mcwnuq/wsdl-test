<?php

namespace App\ElektronicznyNadawca;

class placowkaPocztowaType
{

    /**
     * @var lokalizacjaGeograficznaType $lokalizacjaGeograficzna
     */
    protected $lokalizacjaGeograficzna = null;

    /**
     * @var godzinyPracyType $godzinyPracy
     */
    protected $godzinyPracy = null;

    /**
     * @var string $opis
     */
    protected $opis = null;

    /**
     * @var deliveryPathType $deliveryPath
     */
    protected $deliveryPath = null;

    /**
     * @var typPlacowkiPocztowejEnum $typ
     */
    protected $typ = null;

    /**
     * @var rodzajPlatnosciEnum[] $rodzajPlatnosci
     */
    protected $rodzajPlatnosci = null;

    /**
     * @var funkcjaPlacowkiPocztowejType $funkcja
     */
    protected $funkcja = null;

    /**
     * @var int $maksymalnaKwotaPobrania
     */
    protected $maksymalnaKwotaPobrania = null;

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $prefixNazwy
     */
    protected $prefixNazwy = null;

    /**
     * @var string $nazwa
     */
    protected $nazwa = null;

    /**
     * @var string $wojewodztwo
     */
    protected $wojewodztwo = null;

    /**
     * @var string $powiat
     */
    protected $powiat = null;

    /**
     * @var string $miejsce
     */
    protected $miejsce = null;

    /**
     * @var anonymous125 $kodPocztowy
     */
    protected $kodPocztowy = null;

    /**
     * @var anonymous126 $miejscowosc
     */
    protected $miejscowosc = null;

    /**
     * @var string $ulica
     */
    protected $ulica = null;

    /**
     * @var string $numerDomu
     */
    protected $numerDomu = null;

    /**
     * @var string $numerLokalu
     */
    protected $numerLokalu = null;

    /**
     * @var string $nazwaWydruk
     */
    protected $nazwaWydruk = null;

    /**
     * @var boolean $punktWydaniaEPrzesylki
     */
    protected $punktWydaniaEPrzesylki = null;

    /**
     * @var boolean $powiadomienieSMS
     */
    protected $powiadomienieSMS = null;

    /**
     * @var boolean $punktWydaniaPrzesylkiBiznesowejPlus
     */
    protected $punktWydaniaPrzesylkiBiznesowejPlus = null;

    /**
     * @var boolean $punktWydaniaPrzesylkiBiznesowej
     */
    protected $punktWydaniaPrzesylkiBiznesowej = null;

    /**
     * @var siecPlacowekEnum $siecPlacowek
     */
    protected $siecPlacowek = null;

    /**
     * @var string $idZPO
     */
    protected $idZPO = null;

    /**
     * @param int $id
     * @param string $prefixNazwy
     * @param string $nazwa
     * @param string $wojewodztwo
     * @param string $powiat
     * @param string $miejsce
     * @param anonymous125 $kodPocztowy
     * @param anonymous126 $miejscowosc
     * @param string $ulica
     * @param string $numerDomu
     * @param string $numerLokalu
     * @param string $nazwaWydruk
     * @param boolean $punktWydaniaEPrzesylki
     * @param boolean $powiadomienieSMS
     * @param boolean $punktWydaniaPrzesylkiBiznesowejPlus
     * @param boolean $punktWydaniaPrzesylkiBiznesowej
     * @param siecPlacowekEnum $siecPlacowek
     * @param string $idZPO
     */
    public function __construct($id, $prefixNazwy, $nazwa, $wojewodztwo, $powiat, $miejsce, $kodPocztowy, $miejscowosc, $ulica, $numerDomu, $numerLokalu, $nazwaWydruk, $punktWydaniaEPrzesylki, $powiadomienieSMS, $punktWydaniaPrzesylkiBiznesowejPlus, $punktWydaniaPrzesylkiBiznesowej, $siecPlacowek, $idZPO)
    {
      $this->id = $id;
      $this->prefixNazwy = $prefixNazwy;
      $this->nazwa = $nazwa;
      $this->wojewodztwo = $wojewodztwo;
      $this->powiat = $powiat;
      $this->miejsce = $miejsce;
      $this->kodPocztowy = $kodPocztowy;
      $this->miejscowosc = $miejscowosc;
      $this->ulica = $ulica;
      $this->numerDomu = $numerDomu;
      $this->numerLokalu = $numerLokalu;
      $this->nazwaWydruk = $nazwaWydruk;
      $this->punktWydaniaEPrzesylki = $punktWydaniaEPrzesylki;
      $this->powiadomienieSMS = $powiadomienieSMS;
      $this->punktWydaniaPrzesylkiBiznesowejPlus = $punktWydaniaPrzesylkiBiznesowejPlus;
      $this->punktWydaniaPrzesylkiBiznesowej = $punktWydaniaPrzesylkiBiznesowej;
      $this->siecPlacowek = $siecPlacowek;
      $this->idZPO = $idZPO;
    }

    /**
     * @return lokalizacjaGeograficznaType
     */
    public function getLokalizacjaGeograficzna()
    {
      return $this->lokalizacjaGeograficzna;
    }

    /**
     * @param lokalizacjaGeograficznaType $lokalizacjaGeograficzna
     * @return \App\ElektronicznyNadawca\placowkaPocztowaType
     */
    public function setLokalizacjaGeograficzna($lokalizacjaGeograficzna)
    {
      $this->lokalizacjaGeograficzna = $lokalizacjaGeograficzna;
      return $this;
    }

    /**
     * @return godzinyPracyType
     */
    public function getGodzinyPracy()
    {
      return $this->godzinyPracy;
    }

    /**
     * @param godzinyPracyType $godzinyPracy
     * @return \App\ElektronicznyNadawca\placowkaPocztowaType
     */
    public function setGodzinyPracy($godzinyPracy)
    {
      $this->godzinyPracy = $godzinyPracy;
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
     * @return \App\ElektronicznyNadawca\placowkaPocztowaType
     */
    public function setOpis($opis)
    {
      $this->opis = $opis;
      return $this;
    }

    /**
     * @return deliveryPathType
     */
    public function getDeliveryPath()
    {
      return $this->deliveryPath;
    }

    /**
     * @param deliveryPathType $deliveryPath
     * @return \App\ElektronicznyNadawca\placowkaPocztowaType
     */
    public function setDeliveryPath($deliveryPath)
    {
      $this->deliveryPath = $deliveryPath;
      return $this;
    }

    /**
     * @return typPlacowkiPocztowejEnum
     */
    public function getTyp()
    {
      return $this->typ;
    }

    /**
     * @param typPlacowkiPocztowejEnum $typ
     * @return \App\ElektronicznyNadawca\placowkaPocztowaType
     */
    public function setTyp($typ)
    {
      $this->typ = $typ;
      return $this;
    }

    /**
     * @return rodzajPlatnosciEnum[]
     */
    public function getRodzajPlatnosci()
    {
      return $this->rodzajPlatnosci;
    }

    /**
     * @param rodzajPlatnosciEnum[] $rodzajPlatnosci
     * @return \App\ElektronicznyNadawca\placowkaPocztowaType
     */
    public function setRodzajPlatnosci(array $rodzajPlatnosci = null)
    {
      $this->rodzajPlatnosci = $rodzajPlatnosci;
      return $this;
    }

    /**
     * @return funkcjaPlacowkiPocztowejType
     */
    public function getFunkcja()
    {
      return $this->funkcja;
    }

    /**
     * @param funkcjaPlacowkiPocztowejType $funkcja
     * @return \App\ElektronicznyNadawca\placowkaPocztowaType
     */
    public function setFunkcja($funkcja)
    {
      $this->funkcja = $funkcja;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaksymalnaKwotaPobrania()
    {
      return $this->maksymalnaKwotaPobrania;
    }

    /**
     * @param int $maksymalnaKwotaPobrania
     * @return \App\ElektronicznyNadawca\placowkaPocztowaType
     */
    public function setMaksymalnaKwotaPobrania($maksymalnaKwotaPobrania)
    {
      $this->maksymalnaKwotaPobrania = $maksymalnaKwotaPobrania;
      return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \App\ElektronicznyNadawca\placowkaPocztowaType
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getPrefixNazwy()
    {
      return $this->prefixNazwy;
    }

    /**
     * @param string $prefixNazwy
     * @return \App\ElektronicznyNadawca\placowkaPocztowaType
     */
    public function setPrefixNazwy($prefixNazwy)
    {
      $this->prefixNazwy = $prefixNazwy;
      return $this;
    }

    /**
     * @return string
     */
    public function getNazwa()
    {
      return $this->nazwa;
    }

    /**
     * @param string $nazwa
     * @return \App\ElektronicznyNadawca\placowkaPocztowaType
     */
    public function setNazwa($nazwa)
    {
      $this->nazwa = $nazwa;
      return $this;
    }

    /**
     * @return string
     */
    public function getWojewodztwo()
    {
      return $this->wojewodztwo;
    }

    /**
     * @param string $wojewodztwo
     * @return \App\ElektronicznyNadawca\placowkaPocztowaType
     */
    public function setWojewodztwo($wojewodztwo)
    {
      $this->wojewodztwo = $wojewodztwo;
      return $this;
    }

    /**
     * @return string
     */
    public function getPowiat()
    {
      return $this->powiat;
    }

    /**
     * @param string $powiat
     * @return \App\ElektronicznyNadawca\placowkaPocztowaType
     */
    public function setPowiat($powiat)
    {
      $this->powiat = $powiat;
      return $this;
    }

    /**
     * @return string
     */
    public function getMiejsce()
    {
      return $this->miejsce;
    }

    /**
     * @param string $miejsce
     * @return \App\ElektronicznyNadawca\placowkaPocztowaType
     */
    public function setMiejsce($miejsce)
    {
      $this->miejsce = $miejsce;
      return $this;
    }

    /**
     * @return anonymous125
     */
    public function getKodPocztowy()
    {
      return $this->kodPocztowy;
    }

    /**
     * @param anonymous125 $kodPocztowy
     * @return \App\ElektronicznyNadawca\placowkaPocztowaType
     */
    public function setKodPocztowy($kodPocztowy)
    {
      $this->kodPocztowy = $kodPocztowy;
      return $this;
    }

    /**
     * @return anonymous126
     */
    public function getMiejscowosc()
    {
      return $this->miejscowosc;
    }

    /**
     * @param anonymous126 $miejscowosc
     * @return \App\ElektronicznyNadawca\placowkaPocztowaType
     */
    public function setMiejscowosc($miejscowosc)
    {
      $this->miejscowosc = $miejscowosc;
      return $this;
    }

    /**
     * @return string
     */
    public function getUlica()
    {
      return $this->ulica;
    }

    /**
     * @param string $ulica
     * @return \App\ElektronicznyNadawca\placowkaPocztowaType
     */
    public function setUlica($ulica)
    {
      $this->ulica = $ulica;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumerDomu()
    {
      return $this->numerDomu;
    }

    /**
     * @param string $numerDomu
     * @return \App\ElektronicznyNadawca\placowkaPocztowaType
     */
    public function setNumerDomu($numerDomu)
    {
      $this->numerDomu = $numerDomu;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumerLokalu()
    {
      return $this->numerLokalu;
    }

    /**
     * @param string $numerLokalu
     * @return \App\ElektronicznyNadawca\placowkaPocztowaType
     */
    public function setNumerLokalu($numerLokalu)
    {
      $this->numerLokalu = $numerLokalu;
      return $this;
    }

    /**
     * @return string
     */
    public function getNazwaWydruk()
    {
      return $this->nazwaWydruk;
    }

    /**
     * @param string $nazwaWydruk
     * @return \App\ElektronicznyNadawca\placowkaPocztowaType
     */
    public function setNazwaWydruk($nazwaWydruk)
    {
      $this->nazwaWydruk = $nazwaWydruk;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPunktWydaniaEPrzesylki()
    {
      return $this->punktWydaniaEPrzesylki;
    }

    /**
     * @param boolean $punktWydaniaEPrzesylki
     * @return \App\ElektronicznyNadawca\placowkaPocztowaType
     */
    public function setPunktWydaniaEPrzesylki($punktWydaniaEPrzesylki)
    {
      $this->punktWydaniaEPrzesylki = $punktWydaniaEPrzesylki;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPowiadomienieSMS()
    {
      return $this->powiadomienieSMS;
    }

    /**
     * @param boolean $powiadomienieSMS
     * @return \App\ElektronicznyNadawca\placowkaPocztowaType
     */
    public function setPowiadomienieSMS($powiadomienieSMS)
    {
      $this->powiadomienieSMS = $powiadomienieSMS;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPunktWydaniaPrzesylkiBiznesowejPlus()
    {
      return $this->punktWydaniaPrzesylkiBiznesowejPlus;
    }

    /**
     * @param boolean $punktWydaniaPrzesylkiBiznesowejPlus
     * @return \App\ElektronicznyNadawca\placowkaPocztowaType
     */
    public function setPunktWydaniaPrzesylkiBiznesowejPlus($punktWydaniaPrzesylkiBiznesowejPlus)
    {
      $this->punktWydaniaPrzesylkiBiznesowejPlus = $punktWydaniaPrzesylkiBiznesowejPlus;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPunktWydaniaPrzesylkiBiznesowej()
    {
      return $this->punktWydaniaPrzesylkiBiznesowej;
    }

    /**
     * @param boolean $punktWydaniaPrzesylkiBiznesowej
     * @return \App\ElektronicznyNadawca\placowkaPocztowaType
     */
    public function setPunktWydaniaPrzesylkiBiznesowej($punktWydaniaPrzesylkiBiznesowej)
    {
      $this->punktWydaniaPrzesylkiBiznesowej = $punktWydaniaPrzesylkiBiznesowej;
      return $this;
    }

    /**
     * @return siecPlacowekEnum
     */
    public function getSiecPlacowek()
    {
      return $this->siecPlacowek;
    }

    /**
     * @param siecPlacowekEnum $siecPlacowek
     * @return \App\ElektronicznyNadawca\placowkaPocztowaType
     */
    public function setSiecPlacowek($siecPlacowek)
    {
      $this->siecPlacowek = $siecPlacowek;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdZPO()
    {
      return $this->idZPO;
    }

    /**
     * @param string $idZPO
     * @return \App\ElektronicznyNadawca\placowkaPocztowaType
     */
    public function setIdZPO($idZPO)
    {
      $this->idZPO = $idZPO;
      return $this;
    }

}
