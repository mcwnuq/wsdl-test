<?php

namespace App\ElektronicznyNadawca;

class profilType extends adresType
{

    /**
     * @var int $idProfil
     */
    protected $idProfil = null;

    /**
     * @var string $nazwaSkrocona
     */
    protected $nazwaSkrocona = null;

    /**
     * @var string $fax
     */
    protected $fax = null;

    /**
     * @var string $mpk
     */
    protected $mpk = null;

    /**
     * @param nazwaType $nazwa
     * @param nazwa2Type $nazwa2
     * @param ulicaType $ulica
     * @param numerDomuType $numerDomu
     * @param numerLokaluType $numerLokalu
     * @param miejscowoscType $miejscowosc
     * @param kodPocztowyType $kodPocztowy
     * @param krajType $kraj
     * @param telefonType $telefon
     * @param emailType $email
     * @param mobileType $mobile
     * @param string $osobaKontaktowa
     * @param string $nip
     * @param int $idProfil
     * @param string $nazwaSkrocona
     * @param string $fax
     * @param string $mpk
     */
    public function __construct($nazwa, $nazwa2, $ulica, $numerDomu, $numerLokalu, $miejscowosc, $kodPocztowy, $kraj, $telefon, $email, $mobile, $osobaKontaktowa, $nip, $idProfil, $nazwaSkrocona, $fax, $mpk)
    {
      parent::__construct($nazwa, $nazwa2, $ulica, $numerDomu, $numerLokalu, $miejscowosc, $kodPocztowy, $kraj, $telefon, $email, $mobile, $osobaKontaktowa, $nip);
      $this->idProfil = $idProfil;
      $this->nazwaSkrocona = $nazwaSkrocona;
      $this->fax = $fax;
      $this->mpk = $mpk;
    }

    /**
     * @return int
     */
    public function getIdProfil()
    {
      return $this->idProfil;
    }

    /**
     * @param int $idProfil
     * @return \App\ElektronicznyNadawca\profilType
     */
    public function setIdProfil($idProfil)
    {
      $this->idProfil = $idProfil;
      return $this;
    }

    /**
     * @return string
     */
    public function getNazwaSkrocona()
    {
      return $this->nazwaSkrocona;
    }

    /**
     * @param string $nazwaSkrocona
     * @return \App\ElektronicznyNadawca\profilType
     */
    public function setNazwaSkrocona($nazwaSkrocona)
    {
      $this->nazwaSkrocona = $nazwaSkrocona;
      return $this;
    }

    /**
     * @return string
     */
    public function getFax()
    {
      return $this->fax;
    }

    /**
     * @param string $fax
     * @return \App\ElektronicznyNadawca\profilType
     */
    public function setFax($fax)
    {
      $this->fax = $fax;
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
     * @return \App\ElektronicznyNadawca\profilType
     */
    public function setMpk($mpk)
    {
      $this->mpk = $mpk;
      return $this;
    }

}
