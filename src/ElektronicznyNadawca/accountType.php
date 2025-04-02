<?php

namespace App\ElektronicznyNadawca;

class accountType
{

    /**
     * @var kartaType[] $karta
     */
    protected $karta = null;

    /**
     * @var permisionType[] $permision
     */
    protected $permision = null;

    /**
     * @var profilType[] $profil
     */
    protected $profil = null;

    /**
     * @var jednostkaOrganizacyjnaType[] $jednostka
     */
    protected $jednostka = null;

    /**
     * @var jednostkaOrganizacyjnaType $domyslnaJednostka
     */
    protected $domyslnaJednostka = null;

    /**
     * @var profilType $domyslnyProfil
     */
    protected $domyslnyProfil = null;

    /**
     * @var string[] $dostepPoAdresieIP
     */
    protected $dostepPoAdresieIP = null;

    /**
     * @var int $idDomyslnyProfilDokZwrKlient
     */
    protected $idDomyslnyProfilDokZwrKlient = null;

    /**
     * @var int $idDomyslnyProfilDokZwrUzytk
     */
    protected $idDomyslnyProfilDokZwrUzytk = null;

    /**
     * @var rodzajPrzypisaniaDoJednostkiEnum[] $rodzajPrzypisania
     */
    protected $rodzajPrzypisania = null;

    /**
     * @var string $userName
     */
    protected $userName = null;

    /**
     * @var string $firstName
     */
    protected $firstName = null;

    /**
     * @var string $lastName
     */
    protected $lastName = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var statusAccountType $status
     */
    protected $status = null;

    /**
     * @param profilType[] $profil
     * @param string $userName
     * @param string $firstName
     * @param string $lastName
     * @param string $email
     * @param statusAccountType $status
     */
    public function __construct(array $profil, $userName, $firstName, $lastName, $email, $status)
    {
      $this->profil = $profil;
      $this->userName = $userName;
      $this->firstName = $firstName;
      $this->lastName = $lastName;
      $this->email = $email;
      $this->status = $status;
    }

    /**
     * @return kartaType[]
     */
    public function getKarta()
    {
      return $this->karta;
    }

    /**
     * @param kartaType[] $karta
     * @return \App\ElektronicznyNadawca\accountType
     */
    public function setKarta(array $karta = null)
    {
      $this->karta = $karta;
      return $this;
    }

    /**
     * @return permisionType[]
     */
    public function getPermision()
    {
      return $this->permision;
    }

    /**
     * @param permisionType[] $permision
     * @return \App\ElektronicznyNadawca\accountType
     */
    public function setPermision(array $permision = null)
    {
      $this->permision = $permision;
      return $this;
    }

    /**
     * @return profilType[]
     */
    public function getProfil()
    {
      return $this->profil;
    }

    /**
     * @param profilType[] $profil
     * @return \App\ElektronicznyNadawca\accountType
     */
    public function setProfil(array $profil)
    {
      $this->profil = $profil;
      return $this;
    }

    /**
     * @return jednostkaOrganizacyjnaType[]
     */
    public function getJednostka()
    {
      return $this->jednostka;
    }

    /**
     * @param jednostkaOrganizacyjnaType[] $jednostka
     * @return \App\ElektronicznyNadawca\accountType
     */
    public function setJednostka(array $jednostka = null)
    {
      $this->jednostka = $jednostka;
      return $this;
    }

    /**
     * @return jednostkaOrganizacyjnaType
     */
    public function getDomyslnaJednostka()
    {
      return $this->domyslnaJednostka;
    }

    /**
     * @param jednostkaOrganizacyjnaType $domyslnaJednostka
     * @return \App\ElektronicznyNadawca\accountType
     */
    public function setDomyslnaJednostka($domyslnaJednostka)
    {
      $this->domyslnaJednostka = $domyslnaJednostka;
      return $this;
    }

    /**
     * @return profilType
     */
    public function getDomyslnyProfil()
    {
      return $this->domyslnyProfil;
    }

    /**
     * @param profilType $domyslnyProfil
     * @return \App\ElektronicznyNadawca\accountType
     */
    public function setDomyslnyProfil($domyslnyProfil)
    {
      $this->domyslnyProfil = $domyslnyProfil;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getDostepPoAdresieIP()
    {
      return $this->dostepPoAdresieIP;
    }

    /**
     * @param string[] $dostepPoAdresieIP
     * @return \App\ElektronicznyNadawca\accountType
     */
    public function setDostepPoAdresieIP(array $dostepPoAdresieIP = null)
    {
      $this->dostepPoAdresieIP = $dostepPoAdresieIP;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdDomyslnyProfilDokZwrKlient()
    {
      return $this->idDomyslnyProfilDokZwrKlient;
    }

    /**
     * @param int $idDomyslnyProfilDokZwrKlient
     * @return \App\ElektronicznyNadawca\accountType
     */
    public function setIdDomyslnyProfilDokZwrKlient($idDomyslnyProfilDokZwrKlient)
    {
      $this->idDomyslnyProfilDokZwrKlient = $idDomyslnyProfilDokZwrKlient;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdDomyslnyProfilDokZwrUzytk()
    {
      return $this->idDomyslnyProfilDokZwrUzytk;
    }

    /**
     * @param int $idDomyslnyProfilDokZwrUzytk
     * @return \App\ElektronicznyNadawca\accountType
     */
    public function setIdDomyslnyProfilDokZwrUzytk($idDomyslnyProfilDokZwrUzytk)
    {
      $this->idDomyslnyProfilDokZwrUzytk = $idDomyslnyProfilDokZwrUzytk;
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
     * @return \App\ElektronicznyNadawca\accountType
     */
    public function setRodzajPrzypisania(array $rodzajPrzypisania = null)
    {
      $this->rodzajPrzypisania = $rodzajPrzypisania;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
      return $this->userName;
    }

    /**
     * @param string $userName
     * @return \App\ElektronicznyNadawca\accountType
     */
    public function setUserName($userName)
    {
      $this->userName = $userName;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
      return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return \App\ElektronicznyNadawca\accountType
     */
    public function setFirstName($firstName)
    {
      $this->firstName = $firstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
      return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return \App\ElektronicznyNadawca\accountType
     */
    public function setLastName($lastName)
    {
      $this->lastName = $lastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param string $email
     * @return \App\ElektronicznyNadawca\accountType
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return statusAccountType
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param statusAccountType $status
     * @return \App\ElektronicznyNadawca\accountType
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}
