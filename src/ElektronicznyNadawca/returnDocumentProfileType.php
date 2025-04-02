<?php

namespace App\ElektronicznyNadawca;

class returnDocumentProfileType
{

    /**
     * @var int $idProfile
     */
    protected $idProfile = null;

    /**
     * @var name $name
     */
    protected $name = null;

    /**
     * @var name2 $name2
     */
    protected $name2 = null;

    /**
     * @var friendlyName $friendlyName
     */
    protected $friendlyName = null;

    /**
     * @var street $street
     */
    protected $street = null;

    /**
     * @var houseNumber $houseNumber
     */
    protected $houseNumber = null;

    /**
     * @var premisesNumber $premisesNumber
     */
    protected $premisesNumber = null;

    /**
     * @var city $city
     */
    protected $city = null;

    /**
     * @var postalCode $postalCode
     */
    protected $postalCode = null;

    /**
     * @var mobile $mobile
     */
    protected $mobile = null;

    /**
     * @var phonenumber $phonenumber
     */
    protected $phonenumber = null;

    /**
     * @var email $email
     */
    protected $email = null;

    /**
     * @var boolean $default
     */
    protected $default = null;

    /**
     * @param name $name
     * @param friendlyName $friendlyName
     * @param street $street
     * @param houseNumber $houseNumber
     * @param city $city
     * @param postalCode $postalCode
     */
    public function __construct($name, $friendlyName, $street, $houseNumber, $city, $postalCode)
    {
      $this->name = $name;
      $this->friendlyName = $friendlyName;
      $this->street = $street;
      $this->houseNumber = $houseNumber;
      $this->city = $city;
      $this->postalCode = $postalCode;
    }

    /**
     * @return int
     */
    public function getIdProfile()
    {
      return $this->idProfile;
    }

    /**
     * @param int $idProfile
     * @return \App\ElektronicznyNadawca\returnDocumentProfileType
     */
    public function setIdProfile($idProfile)
    {
      $this->idProfile = $idProfile;
      return $this;
    }

    /**
     * @return name
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param name $name
     * @return \App\ElektronicznyNadawca\returnDocumentProfileType
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return name2
     */
    public function getName2()
    {
      return $this->name2;
    }

    /**
     * @param name2 $name2
     * @return \App\ElektronicznyNadawca\returnDocumentProfileType
     */
    public function setName2($name2)
    {
      $this->name2 = $name2;
      return $this;
    }

    /**
     * @return friendlyName
     */
    public function getFriendlyName()
    {
      return $this->friendlyName;
    }

    /**
     * @param friendlyName $friendlyName
     * @return \App\ElektronicznyNadawca\returnDocumentProfileType
     */
    public function setFriendlyName($friendlyName)
    {
      $this->friendlyName = $friendlyName;
      return $this;
    }

    /**
     * @return street
     */
    public function getStreet()
    {
      return $this->street;
    }

    /**
     * @param street $street
     * @return \App\ElektronicznyNadawca\returnDocumentProfileType
     */
    public function setStreet($street)
    {
      $this->street = $street;
      return $this;
    }

    /**
     * @return houseNumber
     */
    public function getHouseNumber()
    {
      return $this->houseNumber;
    }

    /**
     * @param houseNumber $houseNumber
     * @return \App\ElektronicznyNadawca\returnDocumentProfileType
     */
    public function setHouseNumber($houseNumber)
    {
      $this->houseNumber = $houseNumber;
      return $this;
    }

    /**
     * @return premisesNumber
     */
    public function getPremisesNumber()
    {
      return $this->premisesNumber;
    }

    /**
     * @param premisesNumber $premisesNumber
     * @return \App\ElektronicznyNadawca\returnDocumentProfileType
     */
    public function setPremisesNumber($premisesNumber)
    {
      $this->premisesNumber = $premisesNumber;
      return $this;
    }

    /**
     * @return city
     */
    public function getCity()
    {
      return $this->city;
    }

    /**
     * @param city $city
     * @return \App\ElektronicznyNadawca\returnDocumentProfileType
     */
    public function setCity($city)
    {
      $this->city = $city;
      return $this;
    }

    /**
     * @return postalCode
     */
    public function getPostalCode()
    {
      return $this->postalCode;
    }

    /**
     * @param postalCode $postalCode
     * @return \App\ElektronicznyNadawca\returnDocumentProfileType
     */
    public function setPostalCode($postalCode)
    {
      $this->postalCode = $postalCode;
      return $this;
    }

    /**
     * @return mobile
     */
    public function getMobile()
    {
      return $this->mobile;
    }

    /**
     * @param mobile $mobile
     * @return \App\ElektronicznyNadawca\returnDocumentProfileType
     */
    public function setMobile($mobile)
    {
      $this->mobile = $mobile;
      return $this;
    }

    /**
     * @return phonenumber
     */
    public function getPhonenumber()
    {
      return $this->phonenumber;
    }

    /**
     * @param phonenumber $phonenumber
     * @return \App\ElektronicznyNadawca\returnDocumentProfileType
     */
    public function setPhonenumber($phonenumber)
    {
      $this->phonenumber = $phonenumber;
      return $this;
    }

    /**
     * @return email
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param email $email
     * @return \App\ElektronicznyNadawca\returnDocumentProfileType
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDefault()
    {
      return $this->default;
    }

    /**
     * @param boolean $default
     * @return \App\ElektronicznyNadawca\returnDocumentProfileType
     */
    public function setDefault($default)
    {
      $this->default = $default;
      return $this;
    }

}
