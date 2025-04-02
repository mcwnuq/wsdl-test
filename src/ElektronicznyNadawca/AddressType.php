<?php

namespace App\ElektronicznyNadawca;

class AddressType
{

    /**
     * @var FirstNameOrCompanyNameType $firstNameOrCompanyName
     */
    protected $firstNameOrCompanyName = null;

    /**
     * @var LastNameOrCompanyNameContinuedType $lastNameOrCompanyNameContinued
     */
    protected $lastNameOrCompanyNameContinued = null;

    /**
     * @var StreetType $street
     */
    protected $street = null;

    /**
     * @var HouseNumberType $houseNumber
     */
    protected $houseNumber = null;

    /**
     * @var ApartamentNumberType $apartamentNumber
     */
    protected $apartamentNumber = null;

    /**
     * @var CityType $city
     */
    protected $city = null;

    /**
     * @var ZipCodeType $zipCode
     */
    protected $zipCode = null;

    /**
     * @var string $countryCode
     */
    protected $countryCode = null;

    /**
     * @var mobileType $mobile
     */
    protected $mobile = null;

    /**
     * @var TelephoneType $telephone
     */
    protected $telephone = null;

    /**
     * @var emailType $email
     */
    protected $email = null;

    /**
     * @var string $contactPerson
     */
    protected $contactPerson = null;

    /**
     * @var string $nip
     */
    protected $nip = null;

    /**
     * @param string $contactPerson
     */
    public function __construct($contactPerson)
    {
      $this->contactPerson = $contactPerson;
    }

    /**
     * @return FirstNameOrCompanyNameType
     */
    public function getFirstNameOrCompanyName()
    {
      return $this->firstNameOrCompanyName;
    }

    /**
     * @param FirstNameOrCompanyNameType $firstNameOrCompanyName
     * @return \App\ElektronicznyNadawca\AddressType
     */
    public function setFirstNameOrCompanyName($firstNameOrCompanyName)
    {
      $this->firstNameOrCompanyName = $firstNameOrCompanyName;
      return $this;
    }

    /**
     * @return LastNameOrCompanyNameContinuedType
     */
    public function getLastNameOrCompanyNameContinued()
    {
      return $this->lastNameOrCompanyNameContinued;
    }

    /**
     * @param LastNameOrCompanyNameContinuedType $lastNameOrCompanyNameContinued
     * @return \App\ElektronicznyNadawca\AddressType
     */
    public function setLastNameOrCompanyNameContinued($lastNameOrCompanyNameContinued)
    {
      $this->lastNameOrCompanyNameContinued = $lastNameOrCompanyNameContinued;
      return $this;
    }

    /**
     * @return StreetType
     */
    public function getStreet()
    {
      return $this->street;
    }

    /**
     * @param StreetType $street
     * @return \App\ElektronicznyNadawca\AddressType
     */
    public function setStreet($street)
    {
      $this->street = $street;
      return $this;
    }

    /**
     * @return HouseNumberType
     */
    public function getHouseNumber()
    {
      return $this->houseNumber;
    }

    /**
     * @param HouseNumberType $houseNumber
     * @return \App\ElektronicznyNadawca\AddressType
     */
    public function setHouseNumber($houseNumber)
    {
      $this->houseNumber = $houseNumber;
      return $this;
    }

    /**
     * @return ApartamentNumberType
     */
    public function getApartamentNumber()
    {
      return $this->apartamentNumber;
    }

    /**
     * @param ApartamentNumberType $apartamentNumber
     * @return \App\ElektronicznyNadawca\AddressType
     */
    public function setApartamentNumber($apartamentNumber)
    {
      $this->apartamentNumber = $apartamentNumber;
      return $this;
    }

    /**
     * @return CityType
     */
    public function getCity()
    {
      return $this->city;
    }

    /**
     * @param CityType $city
     * @return \App\ElektronicznyNadawca\AddressType
     */
    public function setCity($city)
    {
      $this->city = $city;
      return $this;
    }

    /**
     * @return ZipCodeType
     */
    public function getZipCode()
    {
      return $this->zipCode;
    }

    /**
     * @param ZipCodeType $zipCode
     * @return \App\ElektronicznyNadawca\AddressType
     */
    public function setZipCode($zipCode)
    {
      $this->zipCode = $zipCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
      return $this->countryCode;
    }

    /**
     * @param string $countryCode
     * @return \App\ElektronicznyNadawca\AddressType
     */
    public function setCountryCode($countryCode)
    {
      $this->countryCode = $countryCode;
      return $this;
    }

    /**
     * @return mobileType
     */
    public function getMobile()
    {
      return $this->mobile;
    }

    /**
     * @param mobileType $mobile
     * @return \App\ElektronicznyNadawca\AddressType
     */
    public function setMobile($mobile)
    {
      $this->mobile = $mobile;
      return $this;
    }

    /**
     * @return TelephoneType
     */
    public function getTelephone()
    {
      return $this->telephone;
    }

    /**
     * @param TelephoneType $telephone
     * @return \App\ElektronicznyNadawca\AddressType
     */
    public function setTelephone($telephone)
    {
      $this->telephone = $telephone;
      return $this;
    }

    /**
     * @return emailType
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param emailType $email
     * @return \App\ElektronicznyNadawca\AddressType
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return string
     */
    public function getContactPerson()
    {
      return $this->contactPerson;
    }

    /**
     * @param string $contactPerson
     * @return \App\ElektronicznyNadawca\AddressType
     */
    public function setContactPerson($contactPerson)
    {
      $this->contactPerson = $contactPerson;
      return $this;
    }

    /**
     * @return string
     */
    public function getNip()
    {
      return $this->nip;
    }

    /**
     * @param string $nip
     * @return \App\ElektronicznyNadawca\AddressType
     */
    public function setNip($nip)
    {
      $this->nip = $nip;
      return $this;
    }

}
