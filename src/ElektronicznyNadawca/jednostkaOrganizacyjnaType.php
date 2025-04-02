<?php

namespace App\ElektronicznyNadawca;

class jednostkaOrganizacyjnaType
{

    /**
     * @var accountType[] $account
     */
    protected $account = null;

    /**
     * @var jednostkaOrganizacyjnaType $jednostkaNadrzedna
     */
    protected $jednostkaNadrzedna = null;

    /**
     * @var rodzajPrzypisaniaDoJednostkiEnum[] $rodzajPrzypisania
     */
    protected $rodzajPrzypisania = null;

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var anonymous312 $nazwa
     */
    protected $nazwa = null;

    /**
     * @var anonymous313 $opis
     */
    protected $opis = null;

    /**
     * @var string $mpk
     */
    protected $mpk = null;

    /**
     * @param int $id
     * @param anonymous312 $nazwa
     * @param anonymous313 $opis
     * @param string $mpk
     */
    public function __construct($id, $nazwa, $opis, $mpk)
    {
      $this->id = $id;
      $this->nazwa = $nazwa;
      $this->opis = $opis;
      $this->mpk = $mpk;
    }

    /**
     * @return accountType[]
     */
    public function getAccount()
    {
      return $this->account;
    }

    /**
     * @param accountType[] $account
     * @return \App\ElektronicznyNadawca\jednostkaOrganizacyjnaType
     */
    public function setAccount(array $account = null)
    {
      $this->account = $account;
      return $this;
    }

    /**
     * @return jednostkaOrganizacyjnaType
     */
    public function getJednostkaNadrzedna()
    {
      return $this->jednostkaNadrzedna;
    }

    /**
     * @param jednostkaOrganizacyjnaType $jednostkaNadrzedna
     * @return \App\ElektronicznyNadawca\jednostkaOrganizacyjnaType
     */
    public function setJednostkaNadrzedna($jednostkaNadrzedna)
    {
      $this->jednostkaNadrzedna = $jednostkaNadrzedna;
      return $this;
    }

    /**
     * @return rodzajPrzypisaniaDoJednostkiEnum[]
     */
    public function getRodzajPrzypisania()
    {
      return $this->rodzajPrzypisania;
    }

    /**
     * @param rodzajPrzypisaniaDoJednostkiEnum[] $rodzajPrzypisania
     * @return \App\ElektronicznyNadawca\jednostkaOrganizacyjnaType
     */
    public function setRodzajPrzypisania(array $rodzajPrzypisania = null)
    {
      $this->rodzajPrzypisania = $rodzajPrzypisania;
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
     * @return \App\ElektronicznyNadawca\jednostkaOrganizacyjnaType
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return anonymous312
     */
    public function getNazwa()
    {
      return $this->nazwa;
    }

    /**
     * @param anonymous312 $nazwa
     * @return \App\ElektronicznyNadawca\jednostkaOrganizacyjnaType
     */
    public function setNazwa($nazwa)
    {
      $this->nazwa = $nazwa;
      return $this;
    }

    /**
     * @return anonymous313
     */
    public function getOpis()
    {
      return $this->opis;
    }

    /**
     * @param anonymous313 $opis
     * @return \App\ElektronicznyNadawca\jednostkaOrganizacyjnaType
     */
    public function setOpis($opis)
    {
      $this->opis = $opis;
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
     * @return \App\ElektronicznyNadawca\jednostkaOrganizacyjnaType
     */
    public function setMpk($mpk)
    {
      $this->mpk = $mpk;
      return $this;
    }

}
