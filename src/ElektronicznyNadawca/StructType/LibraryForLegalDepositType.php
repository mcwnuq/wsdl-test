<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LibraryForLegalDepositType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class LibraryForLegalDepositType extends AbstractStructBase
{
    /**
     * The idLibraryForLegalDeposit
     * Meta information extracted from the WSDL
     * - documentation: Library ID to use for shipment data in the <idLibraryForLegalDeposit/> element
     * - base: xsd:string
     * - maxLength: 4
     * - maxOccurs: 1
     * - minLength: 4
     * - minOccurs: 1
     * @var string
     */
    public string $idLibraryForLegalDeposit;
    /**
     * The libraryName
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 60
     * - maxOccurs: 1
     * - minLength: 1
     * - minOccurs: 1
     * @var string
     */
    public string $libraryName;
    /**
     * The street
     * Meta information extracted from the WSDL
     * - documentation: For a P.O. Box, this item includes a string &quot;skr. poczt.&quot; and box_number
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
     * The apartmentNumber
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 11
     * - maxOccurs: 1
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $apartmentNumber = null;
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
     * Constructor method for LibraryForLegalDepositType
     * @uses LibraryForLegalDepositType::setIdLibraryForLegalDeposit()
     * @uses LibraryForLegalDepositType::setLibraryName()
     * @uses LibraryForLegalDepositType::setStreet()
     * @uses LibraryForLegalDepositType::setHouseNumber()
     * @uses LibraryForLegalDepositType::setApartmentNumber()
     * @uses LibraryForLegalDepositType::setZipCode()
     * @uses LibraryForLegalDepositType::setCity()
     * @param string $idLibraryForLegalDeposit
     * @param string $libraryName
     * @param string $street
     * @param string $houseNumber
     * @param string $apartmentNumber
     * @param string $zipCode
     * @param string $city
     */
    public function __construct(string $idLibraryForLegalDeposit, string $libraryName, ?string $street = null, ?string $houseNumber = null, ?string $apartmentNumber = null, ?string $zipCode = null, ?string $city = null)
    {
        $this
            ->setIdLibraryForLegalDeposit($idLibraryForLegalDeposit)
            ->setLibraryName($libraryName)
            ->setStreet($street)
            ->setHouseNumber($houseNumber)
            ->setApartmentNumber($apartmentNumber)
            ->setZipCode($zipCode)
            ->setCity($city);
    }
    /**
     * Get idLibraryForLegalDeposit value
     * @return string
     */
    public function getIdLibraryForLegalDeposit(): string
    {
        return $this->idLibraryForLegalDeposit;
    }
    /**
     * Set idLibraryForLegalDeposit value
     * @param string $idLibraryForLegalDeposit
     * @return \App\ElektronicznyNadawca\StructType\LibraryForLegalDepositType
     */
    public function setIdLibraryForLegalDeposit(string $idLibraryForLegalDeposit): self
    {
        $this->idLibraryForLegalDeposit = $idLibraryForLegalDeposit;
        
        return $this;
    }
    /**
     * Get libraryName value
     * @return string
     */
    public function getLibraryName(): string
    {
        return $this->libraryName;
    }
    /**
     * Set libraryName value
     * @param string $libraryName
     * @return \App\ElektronicznyNadawca\StructType\LibraryForLegalDepositType
     */
    public function setLibraryName(string $libraryName): self
    {
        $this->libraryName = $libraryName;
        
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
     * @return \App\ElektronicznyNadawca\StructType\LibraryForLegalDepositType
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
     * @return \App\ElektronicznyNadawca\StructType\LibraryForLegalDepositType
     */
    public function setHouseNumber(?string $houseNumber = null): self
    {
        $this->houseNumber = $houseNumber;
        
        return $this;
    }
    /**
     * Get apartmentNumber value
     * @return string|null
     */
    public function getApartmentNumber(): ?string
    {
        return $this->apartmentNumber;
    }
    /**
     * Set apartmentNumber value
     * @param string $apartmentNumber
     * @return \App\ElektronicznyNadawca\StructType\LibraryForLegalDepositType
     */
    public function setApartmentNumber(?string $apartmentNumber = null): self
    {
        $this->apartmentNumber = $apartmentNumber;
        
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
     * @return \App\ElektronicznyNadawca\StructType\LibraryForLegalDepositType
     */
    public function setZipCode(?string $zipCode = null): self
    {
        $this->zipCode = $zipCode;
        
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
     * @return \App\ElektronicznyNadawca\StructType\LibraryForLegalDepositType
     */
    public function setCity(?string $city = null): self
    {
        $this->city = $city;
        
        return $this;
    }
}
