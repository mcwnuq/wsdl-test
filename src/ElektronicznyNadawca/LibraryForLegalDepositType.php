<?php

namespace App\ElektronicznyNadawca;

class LibraryForLegalDepositType
{

    /**
     * @var IdLibraryForLegalDepositType $idLibraryForLegalDeposit
     */
    protected $idLibraryForLegalDeposit = null;

    /**
     * @var FirstNameOrCompanyNameType $libraryName
     */
    protected $libraryName = null;

    /**
     * @var StreetType $street
     */
    protected $street = null;

    /**
     * @var HouseNumberType $houseNumber
     */
    protected $houseNumber = null;

    /**
     * @var ApartamentNumberType $apartmentNumber
     */
    protected $apartmentNumber = null;

    /**
     * @var ZipCodeType $zipCode
     */
    protected $zipCode = null;

    /**
     * @var CityType $city
     */
    protected $city = null;

    /**
     * @param IdLibraryForLegalDepositType $idLibraryForLegalDeposit
     * @param FirstNameOrCompanyNameType $libraryName
     */
    public function __construct($idLibraryForLegalDeposit, $libraryName)
    {
      $this->idLibraryForLegalDeposit = $idLibraryForLegalDeposit;
      $this->libraryName = $libraryName;
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
     * @return \App\ElektronicznyNadawca\LibraryForLegalDepositType
     */
    public function setIdLibraryForLegalDeposit($idLibraryForLegalDeposit)
    {
      $this->idLibraryForLegalDeposit = $idLibraryForLegalDeposit;
      return $this;
    }

    /**
     * @return FirstNameOrCompanyNameType
     */
    public function getLibraryName()
    {
      return $this->libraryName;
    }

    /**
     * @param FirstNameOrCompanyNameType $libraryName
     * @return \App\ElektronicznyNadawca\LibraryForLegalDepositType
     */
    public function setLibraryName($libraryName)
    {
      $this->libraryName = $libraryName;
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
     * @return \App\ElektronicznyNadawca\LibraryForLegalDepositType
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
     * @return \App\ElektronicznyNadawca\LibraryForLegalDepositType
     */
    public function setHouseNumber($houseNumber)
    {
      $this->houseNumber = $houseNumber;
      return $this;
    }

    /**
     * @return ApartamentNumberType
     */
    public function getApartmentNumber()
    {
      return $this->apartmentNumber;
    }

    /**
     * @param ApartamentNumberType $apartmentNumber
     * @return \App\ElektronicznyNadawca\LibraryForLegalDepositType
     */
    public function setApartmentNumber($apartmentNumber)
    {
      $this->apartmentNumber = $apartmentNumber;
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
     * @return \App\ElektronicznyNadawca\LibraryForLegalDepositType
     */
    public function setZipCode($zipCode)
    {
      $this->zipCode = $zipCode;
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
     * @return \App\ElektronicznyNadawca\LibraryForLegalDepositType
     */
    public function setCity($city)
    {
      $this->city = $city;
      return $this;
    }

}
