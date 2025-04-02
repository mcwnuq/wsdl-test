<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for returnDocumentProfileType StructType
 * Meta information extracted from the WSDL
 * - documentation: Returned during getting list of profiles
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReturnDocumentProfileType extends AbstractStructBase
{
    /**
     * The idProfile
     * Meta information extracted from the WSDL
     * - documentation: Required during updating profile. Returned during getting list of profiles.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    public ?int $idProfile = null;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 120
     * @var string|null
     */
    public ?string $name = null;
    /**
     * The name2
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 120
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $name2 = null;
    /**
     * The friendlyName
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 20
     * @var string|null
     */
    public ?string $friendlyName = null;
    /**
     * The street
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 70
     * @var string|null
     */
    public ?string $street = null;
    /**
     * The houseNumber
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 11
     * @var string|null
     */
    public ?string $houseNumber = null;
    /**
     * The premisesNumber
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 11
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $premisesNumber = null;
    /**
     * The city
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 35
     * @var string|null
     */
    public ?string $city = null;
    /**
     * The postalCode
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 5
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $postalCode = null;
    /**
     * The mobile
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 9
     * - maxOccurs: 1
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $mobile = null;
    /**
     * The phonenumber
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 9
     * - maxOccurs: 1
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $phonenumber = null;
    /**
     * The email
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 50
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $email = null;
    /**
     * The default
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    public ?bool $default = null;
    /**
     * Constructor method for returnDocumentProfileType
     * @uses ReturnDocumentProfileType::setIdProfile()
     * @uses ReturnDocumentProfileType::setName()
     * @uses ReturnDocumentProfileType::setName2()
     * @uses ReturnDocumentProfileType::setFriendlyName()
     * @uses ReturnDocumentProfileType::setStreet()
     * @uses ReturnDocumentProfileType::setHouseNumber()
     * @uses ReturnDocumentProfileType::setPremisesNumber()
     * @uses ReturnDocumentProfileType::setCity()
     * @uses ReturnDocumentProfileType::setPostalCode()
     * @uses ReturnDocumentProfileType::setMobile()
     * @uses ReturnDocumentProfileType::setPhonenumber()
     * @uses ReturnDocumentProfileType::setEmail()
     * @uses ReturnDocumentProfileType::setDefault()
     * @param int $idProfile
     * @param string $name
     * @param string $name2
     * @param string $friendlyName
     * @param string $street
     * @param string $houseNumber
     * @param string $premisesNumber
     * @param string $city
     * @param string $postalCode
     * @param string $mobile
     * @param string $phonenumber
     * @param string $email
     * @param bool $default
     */
    public function __construct(?int $idProfile = null, ?string $name = null, ?string $name2 = null, ?string $friendlyName = null, ?string $street = null, ?string $houseNumber = null, ?string $premisesNumber = null, ?string $city = null, ?string $postalCode = null, ?string $mobile = null, ?string $phonenumber = null, ?string $email = null, ?bool $default = null)
    {
        $this
            ->setIdProfile($idProfile)
            ->setName($name)
            ->setName2($name2)
            ->setFriendlyName($friendlyName)
            ->setStreet($street)
            ->setHouseNumber($houseNumber)
            ->setPremisesNumber($premisesNumber)
            ->setCity($city)
            ->setPostalCode($postalCode)
            ->setMobile($mobile)
            ->setPhonenumber($phonenumber)
            ->setEmail($email)
            ->setDefault($default);
    }
    /**
     * Get idProfile value
     * @return int|null
     */
    public function getIdProfile(): ?int
    {
        return $this->idProfile;
    }
    /**
     * Set idProfile value
     * @param int $idProfile
     * @return \App\ElektronicznyNadawca\StructType\ReturnDocumentProfileType
     */
    public function setIdProfile(?int $idProfile = null): self
    {
        $this->idProfile = $idProfile;
        
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \App\ElektronicznyNadawca\StructType\ReturnDocumentProfileType
     */
    public function setName(?string $name = null): self
    {
        $this->name = $name;
        
        return $this;
    }
    /**
     * Get name2 value
     * @return string|null
     */
    public function getName2(): ?string
    {
        return $this->name2;
    }
    /**
     * Set name2 value
     * @param string $name2
     * @return \App\ElektronicznyNadawca\StructType\ReturnDocumentProfileType
     */
    public function setName2(?string $name2 = null): self
    {
        $this->name2 = $name2;
        
        return $this;
    }
    /**
     * Get friendlyName value
     * @return string|null
     */
    public function getFriendlyName(): ?string
    {
        return $this->friendlyName;
    }
    /**
     * Set friendlyName value
     * @param string $friendlyName
     * @return \App\ElektronicznyNadawca\StructType\ReturnDocumentProfileType
     */
    public function setFriendlyName(?string $friendlyName = null): self
    {
        $this->friendlyName = $friendlyName;
        
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
     * @return \App\ElektronicznyNadawca\StructType\ReturnDocumentProfileType
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
     * @return \App\ElektronicznyNadawca\StructType\ReturnDocumentProfileType
     */
    public function setHouseNumber(?string $houseNumber = null): self
    {
        $this->houseNumber = $houseNumber;
        
        return $this;
    }
    /**
     * Get premisesNumber value
     * @return string|null
     */
    public function getPremisesNumber(): ?string
    {
        return $this->premisesNumber;
    }
    /**
     * Set premisesNumber value
     * @param string $premisesNumber
     * @return \App\ElektronicznyNadawca\StructType\ReturnDocumentProfileType
     */
    public function setPremisesNumber(?string $premisesNumber = null): self
    {
        $this->premisesNumber = $premisesNumber;
        
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
     * @return \App\ElektronicznyNadawca\StructType\ReturnDocumentProfileType
     */
    public function setCity(?string $city = null): self
    {
        $this->city = $city;
        
        return $this;
    }
    /**
     * Get postalCode value
     * @return string|null
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }
    /**
     * Set postalCode value
     * @param string $postalCode
     * @return \App\ElektronicznyNadawca\StructType\ReturnDocumentProfileType
     */
    public function setPostalCode(?string $postalCode = null): self
    {
        $this->postalCode = $postalCode;
        
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
     * @return \App\ElektronicznyNadawca\StructType\ReturnDocumentProfileType
     */
    public function setMobile(?string $mobile = null): self
    {
        $this->mobile = $mobile;
        
        return $this;
    }
    /**
     * Get phonenumber value
     * @return string|null
     */
    public function getPhonenumber(): ?string
    {
        return $this->phonenumber;
    }
    /**
     * Set phonenumber value
     * @param string $phonenumber
     * @return \App\ElektronicznyNadawca\StructType\ReturnDocumentProfileType
     */
    public function setPhonenumber(?string $phonenumber = null): self
    {
        $this->phonenumber = $phonenumber;
        
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
     * @return \App\ElektronicznyNadawca\StructType\ReturnDocumentProfileType
     */
    public function setEmail(?string $email = null): self
    {
        $this->email = $email;
        
        return $this;
    }
    /**
     * Get default value
     * @return bool|null
     */
    public function getDefault(): ?bool
    {
        return $this->default;
    }
    /**
     * Set default value
     * @param bool $default
     * @return \App\ElektronicznyNadawca\StructType\ReturnDocumentProfileType
     */
    public function setDefault(?bool $default = null): self
    {
        $this->default = $default;
        
        return $this;
    }
}
