<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for AddressType StructType
 * Meta information extracted from the WSDL
 * - maxOccurs: 1
 * - minOccurs: 0
 * - type: xsd:string
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AddressType
{
    /**
     * The firstNameOrCompanyName
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 60
     * - maxOccurs: 1
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $firstNameOrCompanyName = null;
    /**
     * The lastNameOrCompanyNameContinued
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 60
     * - maxOccurs: 1
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $lastNameOrCompanyNameContinued = null;
    /**
     * The street
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 255
     * - maxOccurs: 1
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $street = null;
    /**
     * The houseNumber
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 11
     * - maxOccurs: 1
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $houseNumber = null;
    /**
     * The apartamentNumber
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 11
     * - maxOccurs: 1
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $apartamentNumber = null;
    /**
     * The city
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 63
     * - maxOccurs: 1
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $city = null;
    /**
     * The zipCode
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 10
     * - maxOccurs: 1
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $zipCode = null;
    /**
     * The countryCode
     * Meta information extracted from the WSDL
     * - documentation: Code (ISO 3166) of the country.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $countryCode = null;
    /**
     * The mobile
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $mobile = null;
    /**
     * The telephone
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 20
     * - maxOccurs: 1
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $telephone = null;
    /**
     * The email
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 50
     * - maxOccurs: 1
     * - minLength: 6
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $email = null;
    /**
     * The contactPerson
     * @var string|null
     */
    public ?string $contactPerson = null;
    /**
     * The nip
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $nip = null;
    /**
     * Constructor method for AddressType
     * @uses AddressType::setFirstNameOrCompanyName()
     * @uses AddressType::setLastNameOrCompanyNameContinued()
     * @uses AddressType::setStreet()
     * @uses AddressType::setHouseNumber()
     * @uses AddressType::setApartamentNumber()
     * @uses AddressType::setCity()
     * @uses AddressType::setZipCode()
     * @uses AddressType::setCountryCode()
     * @uses AddressType::setMobile()
     * @uses AddressType::setTelephone()
     * @uses AddressType::setEmail()
     * @uses AddressType::setContactPerson()
     * @uses AddressType::setNip()
     * @param string $firstNameOrCompanyName
     * @param string $lastNameOrCompanyNameContinued
     * @param string $street
     * @param string $houseNumber
     * @param string $apartamentNumber
     * @param string $city
     * @param string $zipCode
     * @param string $countryCode
     * @param string $mobile
     * @param string $telephone
     * @param string $email
     * @param string $contactPerson
     * @param string $nip
     */
    public function __construct(?string $firstNameOrCompanyName = null, ?string $lastNameOrCompanyNameContinued = null, ?string $street = null, ?string $houseNumber = null, ?string $apartamentNumber = null, ?string $city = null, ?string $zipCode = null, ?string $countryCode = null, ?string $mobile = null, ?string $telephone = null, ?string $email = null, ?string $contactPerson = null, ?string $nip = null)
    {
        $this
            ->setFirstNameOrCompanyName($firstNameOrCompanyName)
            ->setLastNameOrCompanyNameContinued($lastNameOrCompanyNameContinued)
            ->setStreet($street)
            ->setHouseNumber($houseNumber)
            ->setApartamentNumber($apartamentNumber)
            ->setCity($city)
            ->setZipCode($zipCode)
            ->setCountryCode($countryCode)
            ->setMobile($mobile)
            ->setTelephone($telephone)
            ->setEmail($email)
            ->setContactPerson($contactPerson)
            ->setNip($nip);
    }
    /**
     * Get firstNameOrCompanyName value
     * @return string|null
     */
    public function getFirstNameOrCompanyName(): ?string
    {
        return $this->firstNameOrCompanyName;
    }
    /**
     * Set firstNameOrCompanyName value
     * @param string $firstNameOrCompanyName
     * @return \App\ElektronicznyNadawca\StructType\AddressType
     */
    public function setFirstNameOrCompanyName(?string $firstNameOrCompanyName = null): self
    {
        $this->firstNameOrCompanyName = $firstNameOrCompanyName;
        
        return $this;
    }
    /**
     * Get lastNameOrCompanyNameContinued value
     * @return string|null
     */
    public function getLastNameOrCompanyNameContinued(): ?string
    {
        return $this->lastNameOrCompanyNameContinued;
    }
    /**
     * Set lastNameOrCompanyNameContinued value
     * @param string $lastNameOrCompanyNameContinued
     * @return \App\ElektronicznyNadawca\StructType\AddressType
     */
    public function setLastNameOrCompanyNameContinued(?string $lastNameOrCompanyNameContinued = null): self
    {
        $this->lastNameOrCompanyNameContinued = $lastNameOrCompanyNameContinued;
        
        return $this;
    }
    /**
     * Get street value
     * @return string|null
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }
    /**
     * Set street value
     * @param string $street
     * @return \App\ElektronicznyNadawca\StructType\AddressType
     */
    public function setStreet(?string $street = null): self
    {
        $this->street = $street;
        
        return $this;
    }
    /**
     * Get houseNumber value
     * @return string|null
     */
    public function getHouseNumber(): ?string
    {
        return $this->houseNumber;
    }
    /**
     * Set houseNumber value
     * @param string $houseNumber
     * @return \App\ElektronicznyNadawca\StructType\AddressType
     */
    public function setHouseNumber(?string $houseNumber = null): self
    {
        $this->houseNumber = $houseNumber;
        
        return $this;
    }
    /**
     * Get apartamentNumber value
     * @return string|null
     */
    public function getApartamentNumber(): ?string
    {
        return $this->apartamentNumber;
    }
    /**
     * Set apartamentNumber value
     * @param string $apartamentNumber
     * @return \App\ElektronicznyNadawca\StructType\AddressType
     */
    public function setApartamentNumber(?string $apartamentNumber = null): self
    {
        $this->apartamentNumber = $apartamentNumber;
        
        return $this;
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \App\ElektronicznyNadawca\StructType\AddressType
     */
    public function setCity(?string $city = null): self
    {
        $this->city = $city;
        
        return $this;
    }
    /**
     * Get zipCode value
     * @return string|null
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }
    /**
     * Set zipCode value
     * @param string $zipCode
     * @return \App\ElektronicznyNadawca\StructType\AddressType
     */
    public function setZipCode(?string $zipCode = null): self
    {
        $this->zipCode = $zipCode;
        
        return $this;
    }
    /**
     * Get countryCode value
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }
    /**
     * Set countryCode value
     * @param string $countryCode
     * @return \App\ElektronicznyNadawca\StructType\AddressType
     */
    public function setCountryCode(?string $countryCode = null): self
    {
        $this->countryCode = $countryCode;
        
        return $this;
    }
    /**
     * Get mobile value
     * @return string|null
     */
    public function getMobile(): ?string
    {
        return $this->mobile;
    }
    /**
     * Set mobile value
     * @param string $mobile
     * @return \App\ElektronicznyNadawca\StructType\AddressType
     */
    public function setMobile(?string $mobile = null): self
    {
        $this->mobile = $mobile;
        
        return $this;
    }
    /**
     * Get telephone value
     * @return string|null
     */
    public function getTelephone(): ?string
    {
        return $this->telephone;
    }
    /**
     * Set telephone value
     * @param string $telephone
     * @return \App\ElektronicznyNadawca\StructType\AddressType
     */
    public function setTelephone(?string $telephone = null): self
    {
        $this->telephone = $telephone;
        
        return $this;
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \App\ElektronicznyNadawca\StructType\AddressType
     */
    public function setEmail(?string $email = null): self
    {
        $this->email = $email;
        
        return $this;
    }
    /**
     * Get contactPerson value
     * @return string|null
     */
    public function getContactPerson(): ?string
    {
        return $this->contactPerson;
    }
    /**
     * Set contactPerson value
     * @param string $contactPerson
     * @return \App\ElektronicznyNadawca\StructType\AddressType
     */
    public function setContactPerson(?string $contactPerson = null): self
    {
        $this->contactPerson = $contactPerson;
        
        return $this;
    }
    /**
     * Get nip value
     * @return string|null
     */
    public function getNip(): ?string
    {
        return $this->nip;
    }
    /**
     * Set nip value
     * @param string $nip
     * @return \App\ElektronicznyNadawca\StructType\AddressType
     */
    public function setNip(?string $nip = null): self
    {
        $this->nip = $nip;
        
        return $this;
    }
}
