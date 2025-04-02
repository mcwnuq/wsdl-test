<?php

namespace App\ElektronicznyNadawca;

class zamowKuriera
{

    /**
     * @var adresType $miejsceOdbioru
     */
    protected $miejsceOdbioru = null;

    /**
     * @var adresType $nadawca
     */
    protected $nadawca = null;

    /**
     * @var string $oczekiwanaDataOdbioru
     */
    protected $oczekiwanaDataOdbioru = null;

    /**
     * @var string $oczekiwanaGodzinaOdbioru
     */
    protected $oczekiwanaGodzinaOdbioru = null;

    /**
     * @var string $szacowanaIloscPrzeslek
     */
    protected $szacowanaIloscPrzeslek = null;

    /**
     * @var string $szacowanaLacznaMasaPrzesylek
     */
    protected $szacowanaLacznaMasaPrzesylek = null;

    /**
     * @var emailType $potwierdzenieZamowieniaEmail
     */
    protected $potwierdzenieZamowieniaEmail = null;

    /**
     * @param adresType $miejsceOdbioru
     * @param adresType $nadawca
     * @param string $oczekiwanaDataOdbioru
     * @param string $oczekiwanaGodzinaOdbioru
     * @param string $szacowanaIloscPrzeslek
     * @param string $szacowanaLacznaMasaPrzesylek
     * @param emailType $potwierdzenieZamowieniaEmail
     */
    public function __construct($miejsceOdbioru, $nadawca, $oczekiwanaDataOdbioru, $oczekiwanaGodzinaOdbioru, $szacowanaIloscPrzeslek, $szacowanaLacznaMasaPrzesylek, $potwierdzenieZamowieniaEmail)
    {
      $this->miejsceOdbioru = $miejsceOdbioru;
      $this->nadawca = $nadawca;
      $this->oczekiwanaDataOdbioru = $oczekiwanaDataOdbioru;
      $this->oczekiwanaGodzinaOdbioru = $oczekiwanaGodzinaOdbioru;
      $this->szacowanaIloscPrzeslek = $szacowanaIloscPrzeslek;
      $this->szacowanaLacznaMasaPrzesylek = $szacowanaLacznaMasaPrzesylek;
      $this->potwierdzenieZamowieniaEmail = $potwierdzenieZamowieniaEmail;
    }

    /**
     * @return adresType
     */
    public function getMiejsceOdbioru()
    {
      return $this->miejsceOdbioru;
    }

    /**
     * @param adresType $miejsceOdbioru
     * @return \App\ElektronicznyNadawca\zamowKuriera
     */
    public function setMiejsceOdbioru($miejsceOdbioru)
    {
      $this->miejsceOdbioru = $miejsceOdbioru;
      return $this;
    }

    /**
     * @return adresType
     */
    public function getNadawca()
    {
      return $this->nadawca;
    }

    /**
     * @param adresType $nadawca
     * @return \App\ElektronicznyNadawca\zamowKuriera
     */
    public function setNadawca($nadawca)
    {
      $this->nadawca = $nadawca;
      return $this;
    }

    /**
     * @return string
     */
    public function getOczekiwanaDataOdbioru()
    {
      return $this->oczekiwanaDataOdbioru;
    }

    /**
     * @param string $oczekiwanaDataOdbioru
     * @return \App\ElektronicznyNadawca\zamowKuriera
     */
    public function setOczekiwanaDataOdbioru($oczekiwanaDataOdbioru)
    {
      $this->oczekiwanaDataOdbioru = $oczekiwanaDataOdbioru;
      return $this;
    }

    /**
     * @return string
     */
    public function getOczekiwanaGodzinaOdbioru()
    {
      return $this->oczekiwanaGodzinaOdbioru;
    }

    /**
     * @param string $oczekiwanaGodzinaOdbioru
     * @return \App\ElektronicznyNadawca\zamowKuriera
     */
    public function setOczekiwanaGodzinaOdbioru($oczekiwanaGodzinaOdbioru)
    {
      $this->oczekiwanaGodzinaOdbioru = $oczekiwanaGodzinaOdbioru;
      return $this;
    }

    /**
     * @return string
     */
    public function getSzacowanaIloscPrzeslek()
    {
      return $this->szacowanaIloscPrzeslek;
    }

    /**
     * @param string $szacowanaIloscPrzeslek
     * @return \App\ElektronicznyNadawca\zamowKuriera
     */
    public function setSzacowanaIloscPrzeslek($szacowanaIloscPrzeslek)
    {
      $this->szacowanaIloscPrzeslek = $szacowanaIloscPrzeslek;
      return $this;
    }

    /**
     * @return string
     */
    public function getSzacowanaLacznaMasaPrzesylek()
    {
      return $this->szacowanaLacznaMasaPrzesylek;
    }

    /**
     * @param string $szacowanaLacznaMasaPrzesylek
     * @return \App\ElektronicznyNadawca\zamowKuriera
     */
    public function setSzacowanaLacznaMasaPrzesylek($szacowanaLacznaMasaPrzesylek)
    {
      $this->szacowanaLacznaMasaPrzesylek = $szacowanaLacznaMasaPrzesylek;
      return $this;
    }

    /**
     * @return emailType
     */
    public function getPotwierdzenieZamowieniaEmail()
    {
      return $this->potwierdzenieZamowieniaEmail;
    }

    /**
     * @param emailType $potwierdzenieZamowieniaEmail
     * @return \App\ElektronicznyNadawca\zamowKuriera
     */
    public function setPotwierdzenieZamowieniaEmail($potwierdzenieZamowieniaEmail)
    {
      $this->potwierdzenieZamowieniaEmail = $potwierdzenieZamowieniaEmail;
      return $this;
    }

}
