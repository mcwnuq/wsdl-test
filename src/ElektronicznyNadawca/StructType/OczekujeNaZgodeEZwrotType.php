<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for oczekujeNaZgodeEZwrotType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OczekujeNaZgodeEZwrotType
{
    /**
     * The sklepEZwrot
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\ShopEZwrotyType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\ShopEZwrotyType $sklepEZwrot = null;
    /**
     * The idZgody
     * @var int|null
     */
    public ?int $idZgody = null;
    /**
     * The nazwaProduktu
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 60
     * @var string|null
     */
    public ?string $nazwaProduktu = null;
    /**
     * The numerZamowienia
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 150
     * @var string|null
     */
    public ?string $numerZamowienia = null;
    /**
     * The numerNadania
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 20
     * - minLength: 10
     * @var string|null
     */
    public ?string $numerNadania = null;
    /**
     * The email
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 50
     * - minLength: 6
     * @var string|null
     */
    public ?string $email = null;
    /**
     * The dataNadania
     * @var string|null
     */
    public ?string $dataNadania = null;
    /**
     * The guidZgodaEZwrot
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $guidZgodaEZwrot = null;
    /**
     * Constructor method for oczekujeNaZgodeEZwrotType
     * @uses OczekujeNaZgodeEZwrotType::setSklepEZwrot()
     * @uses OczekujeNaZgodeEZwrotType::setIdZgody()
     * @uses OczekujeNaZgodeEZwrotType::setNazwaProduktu()
     * @uses OczekujeNaZgodeEZwrotType::setNumerZamowienia()
     * @uses OczekujeNaZgodeEZwrotType::setNumerNadania()
     * @uses OczekujeNaZgodeEZwrotType::setEmail()
     * @uses OczekujeNaZgodeEZwrotType::setDataNadania()
     * @uses OczekujeNaZgodeEZwrotType::setGuidZgodaEZwrot()
     * @param \App\ElektronicznyNadawca\StructType\ShopEZwrotyType $sklepEZwrot
     * @param int $idZgody
     * @param string $nazwaProduktu
     * @param string $numerZamowienia
     * @param string $numerNadania
     * @param string $email
     * @param string $dataNadania
     * @param string $guidZgodaEZwrot
     */
    public function __construct(?\App\ElektronicznyNadawca\StructType\ShopEZwrotyType $sklepEZwrot = null, ?int $idZgody = null, ?string $nazwaProduktu = null, ?string $numerZamowienia = null, ?string $numerNadania = null, ?string $email = null, ?string $dataNadania = null, ?string $guidZgodaEZwrot = null)
    {
        $this
            ->setSklepEZwrot($sklepEZwrot)
            ->setIdZgody($idZgody)
            ->setNazwaProduktu($nazwaProduktu)
            ->setNumerZamowienia($numerZamowienia)
            ->setNumerNadania($numerNadania)
            ->setEmail($email)
            ->setDataNadania($dataNadania)
            ->setGuidZgodaEZwrot($guidZgodaEZwrot);
    }
    /**
     * Get sklepEZwrot value
     * @return \App\ElektronicznyNadawca\StructType\ShopEZwrotyType|null
     */
    public function getSklepEZwrot(): ?\App\ElektronicznyNadawca\StructType\ShopEZwrotyType
    {
        return $this->sklepEZwrot;
    }
    /**
     * Set sklepEZwrot value
     * @param \App\ElektronicznyNadawca\StructType\ShopEZwrotyType $sklepEZwrot
     * @return \App\ElektronicznyNadawca\StructType\OczekujeNaZgodeEZwrotType
     */
    public function setSklepEZwrot(?\App\ElektronicznyNadawca\StructType\ShopEZwrotyType $sklepEZwrot = null): self
    {
        $this->sklepEZwrot = $sklepEZwrot;
        
        return $this;
    }
    /**
     * Get idZgody value
     * @return int|null
     */
    public function getIdZgody(): ?int
    {
        return $this->idZgody;
    }
    /**
     * Set idZgody value
     * @param int $idZgody
     * @return \App\ElektronicznyNadawca\StructType\OczekujeNaZgodeEZwrotType
     */
    public function setIdZgody(?int $idZgody = null): self
    {
        $this->idZgody = $idZgody;
        
        return $this;
    }
    /**
     * Get nazwaProduktu value
     * @return string|null
     */
    public function getNazwaProduktu(): ?string
    {
        return $this->nazwaProduktu;
    }
    /**
     * Set nazwaProduktu value
     * @param string $nazwaProduktu
     * @return \App\ElektronicznyNadawca\StructType\OczekujeNaZgodeEZwrotType
     */
    public function setNazwaProduktu(?string $nazwaProduktu = null): self
    {
        $this->nazwaProduktu = $nazwaProduktu;
        
        return $this;
    }
    /**
     * Get numerZamowienia value
     * @return string|null
     */
    public function getNumerZamowienia(): ?string
    {
        return $this->numerZamowienia;
    }
    /**
     * Set numerZamowienia value
     * @param string $numerZamowienia
     * @return \App\ElektronicznyNadawca\StructType\OczekujeNaZgodeEZwrotType
     */
    public function setNumerZamowienia(?string $numerZamowienia = null): self
    {
        $this->numerZamowienia = $numerZamowienia;
        
        return $this;
    }
    /**
     * Get numerNadania value
     * @return string|null
     */
    public function getNumerNadania(): ?string
    {
        return $this->numerNadania;
    }
    /**
     * Set numerNadania value
     * @param string $numerNadania
     * @return \App\ElektronicznyNadawca\StructType\OczekujeNaZgodeEZwrotType
     */
    public function setNumerNadania(?string $numerNadania = null): self
    {
        $this->numerNadania = $numerNadania;
        
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
     * @return \App\ElektronicznyNadawca\StructType\OczekujeNaZgodeEZwrotType
     */
    public function setEmail(?string $email = null): self
    {
        $this->email = $email;
        
        return $this;
    }
    /**
     * Get dataNadania value
     * @return string|null
     */
    public function getDataNadania(): ?string
    {
        return $this->dataNadania;
    }
    /**
     * Set dataNadania value
     * @param string $dataNadania
     * @return \App\ElektronicznyNadawca\StructType\OczekujeNaZgodeEZwrotType
     */
    public function setDataNadania(?string $dataNadania = null): self
    {
        $this->dataNadania = $dataNadania;
        
        return $this;
    }
    /**
     * Get guidZgodaEZwrot value
     * @return string|null
     */
    public function getGuidZgodaEZwrot(): ?string
    {
        return $this->guidZgodaEZwrot;
    }
    /**
     * Set guidZgodaEZwrot value
     * @param string $guidZgodaEZwrot
     * @return \App\ElektronicznyNadawca\StructType\OczekujeNaZgodeEZwrotType
     */
    public function setGuidZgodaEZwrot(?string $guidZgodaEZwrot = null): self
    {
        $this->guidZgodaEZwrot = $guidZgodaEZwrot;
        
        return $this;
    }
}
