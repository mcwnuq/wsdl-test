<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for jednostkaOrganizacyjnaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class JednostkaOrganizacyjnaType
{
    /**
     * The account
     * Meta information extracted from the WSDL
     * - documentation: Wystarczy przesłać obiekt z ustawionym id reszta pól może zostać pominięta (aby zmniejszyć ilość danych do transmisji)
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\AccountType[]
     */
    public ?array $account = null;
    /**
     * The jednostkaNadrzedna
     * Meta information extracted from the WSDL
     * - documentation: Wystarczy przesłać obiekt z ustawionym id reszta pól może zostać pominięta (aby zmniejszyć ilość danych do transmisji)
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $jednostkaNadrzedna = null;
    /**
     * The rodzajPrzypisania
     * Meta information extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var string[]
     */
    public ?array $rodzajPrzypisania = null;
    /**
     * The id
     * @var int|null
     */
    public ?int $id = null;
    /**
     * The nazwa
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 255
     * - minLength: 1
     * @var string|null
     */
    public ?string $nazwa = null;
    /**
     * The opis
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 4000
     * - minLength: 0
     * @var string|null
     */
    public ?string $opis = null;
    /**
     * The mpk
     * @var string|null
     */
    public ?string $mpk = null;
    /**
     * Constructor method for jednostkaOrganizacyjnaType
     * @uses JednostkaOrganizacyjnaType::setAccount()
     * @uses JednostkaOrganizacyjnaType::setJednostkaNadrzedna()
     * @uses JednostkaOrganizacyjnaType::setRodzajPrzypisania()
     * @uses JednostkaOrganizacyjnaType::setId()
     * @uses JednostkaOrganizacyjnaType::setNazwa()
     * @uses JednostkaOrganizacyjnaType::setOpis()
     * @uses JednostkaOrganizacyjnaType::setMpk()
     * @param \App\ElektronicznyNadawca\StructType\AccountType[] $account
     * @param \App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $jednostkaNadrzedna
     * @param string[] $rodzajPrzypisania
     * @param int $id
     * @param string $nazwa
     * @param string $opis
     * @param string $mpk
     */
    public function __construct(?array $account = null, ?\App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $jednostkaNadrzedna = null, ?array $rodzajPrzypisania = null, ?int $id = null, ?string $nazwa = null, ?string $opis = null, ?string $mpk = null)
    {
        $this
            ->setAccount($account)
            ->setJednostkaNadrzedna($jednostkaNadrzedna)
            ->setRodzajPrzypisania($rodzajPrzypisania)
            ->setId($id)
            ->setNazwa($nazwa)
            ->setOpis($opis)
            ->setMpk($mpk);
    }
    /**
     * Get account value
     * @return \App\ElektronicznyNadawca\StructType\AccountType[]
     */
    public function getAccount(): ?array
    {
        return $this->account;
    }
    /**
     * Set account value
     * @param \App\ElektronicznyNadawca\StructType\AccountType[] $account
     * @return \App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType
     */
    public function setAccount(?array $account = null): self
    {
        $this->account = $account;
        
        return $this;
    }
    /**
     * Add item to account value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\AccountType $item
     * @return \App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType
     */
    public function addToAccount(\App\ElektronicznyNadawca\StructType\AccountType $item): self
    {
        $this->account[] = $item;
        
        return $this;
    }
    /**
     * Get jednostkaNadrzedna value
     * @return \App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType|null
     */
    public function getJednostkaNadrzedna(): ?\App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType
    {
        return $this->jednostkaNadrzedna;
    }
    /**
     * Set jednostkaNadrzedna value
     * @param \App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $jednostkaNadrzedna
     * @return \App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType
     */
    public function setJednostkaNadrzedna(?\App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $jednostkaNadrzedna = null): self
    {
        $this->jednostkaNadrzedna = $jednostkaNadrzedna;
        
        return $this;
    }
    /**
     * Get rodzajPrzypisania value
     * @return string[]
     */
    public function getRodzajPrzypisania(): ?array
    {
        return $this->rodzajPrzypisania;
    }
    /**
     * Set rodzajPrzypisania value
     * @param string[] $rodzajPrzypisania
     * @return \App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType
     */
    public function setRodzajPrzypisania(?array $rodzajPrzypisania = null): self
    {
        $this->rodzajPrzypisania = $rodzajPrzypisania;
        
        return $this;
    }
    /**
     * Add item to rodzajPrzypisania value
     * @uses \App\ElektronicznyNadawca\EnumType\RodzajPrzypisaniaDoJednostkiEnum::valueIsValid()
     * @uses \App\ElektronicznyNadawca\EnumType\RodzajPrzypisaniaDoJednostkiEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType
     */
    public function addToRodzajPrzypisania(string $item): self
    {
        $this->rodzajPrzypisania[] = $item;
        
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType
     */
    public function setId(?int $id = null): self
    {
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get nazwa value
     * @return string|null
     */
    public function getNazwa(): ?string
    {
        return $this->nazwa;
    }
    /**
     * Set nazwa value
     * @param string $nazwa
     * @return \App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType
     */
    public function setNazwa(?string $nazwa = null): self
    {
        $this->nazwa = $nazwa;
        
        return $this;
    }
    /**
     * Get opis value
     * @return string|null
     */
    public function getOpis(): ?string
    {
        return $this->opis;
    }
    /**
     * Set opis value
     * @param string $opis
     * @return \App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType
     */
    public function setOpis(?string $opis = null): self
    {
        $this->opis = $opis;
        
        return $this;
    }
    /**
     * Get mpk value
     * @return string|null
     */
    public function getMpk(): ?string
    {
        return $this->mpk;
    }
    /**
     * Set mpk value
     * @param string $mpk
     * @return \App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType
     */
    public function setMpk(?string $mpk = null): self
    {
        $this->mpk = $mpk;
        
        return $this;
    }
}
