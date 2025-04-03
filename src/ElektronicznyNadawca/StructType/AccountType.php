<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for accountType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AccountType
{
    /**
     * The profil
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \App\ElektronicznyNadawca\StructType\ProfilType[]
     */
    public array $profil;
    /**
     * The karta
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\KartaType[]
     */
    public ?array $karta = null;
    /**
     * The permision
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public ?array $permision = null;
    /**
     * The jednostka
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType[]
     */
    public ?array $jednostka = null;
    /**
     * The domyslnaJednostka
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $domyslnaJednostka = null;
    /**
     * The domyslnyProfil
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\ProfilType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\ProfilType $domyslnyProfil = null;
    /**
     * The dostepPoAdresieIP
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public ?array $dostepPoAdresieIP = null;
    /**
     * The idDomyslnyProfilDokZwrKlient
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    public ?int $idDomyslnyProfilDokZwrKlient = null;
    /**
     * The idDomyslnyProfilDokZwrUzytk
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    public ?int $idDomyslnyProfilDokZwrUzytk = null;
    /**
     * The rodzajPrzypisania
     * Meta information extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var string[]
     */
    public ?array $rodzajPrzypisania = null;
    /**
     * The userName
     * @var string|null
     */
    public ?string $userName = null;
    /**
     * The firstName
     * @var string|null
     */
    public ?string $firstName = null;
    /**
     * The lastName
     * @var string|null
     */
    public ?string $lastName = null;
    /**
     * The email
     * @var string|null
     */
    public ?string $email = null;
    /**
     * The status
     * @var string|null
     */
    public ?string $status = null;
    /**
     * Constructor method for accountType
     * @uses AccountType::setProfil()
     * @uses AccountType::setKarta()
     * @uses AccountType::setPermision()
     * @uses AccountType::setJednostka()
     * @uses AccountType::setDomyslnaJednostka()
     * @uses AccountType::setDomyslnyProfil()
     * @uses AccountType::setDostepPoAdresieIP()
     * @uses AccountType::setIdDomyslnyProfilDokZwrKlient()
     * @uses AccountType::setIdDomyslnyProfilDokZwrUzytk()
     * @uses AccountType::setRodzajPrzypisania()
     * @uses AccountType::setUserName()
     * @uses AccountType::setFirstName()
     * @uses AccountType::setLastName()
     * @uses AccountType::setEmail()
     * @uses AccountType::setStatus()
     * @param \App\ElektronicznyNadawca\StructType\ProfilType[] $profil
     * @param \App\ElektronicznyNadawca\StructType\KartaType[] $karta
     * @param string[] $permision
     * @param \App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType[] $jednostka
     * @param \App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $domyslnaJednostka
     * @param \App\ElektronicznyNadawca\StructType\ProfilType $domyslnyProfil
     * @param string[] $dostepPoAdresieIP
     * @param int $idDomyslnyProfilDokZwrKlient
     * @param int $idDomyslnyProfilDokZwrUzytk
     * @param string[] $rodzajPrzypisania
     * @param string $userName
     * @param string $firstName
     * @param string $lastName
     * @param string $email
     * @param string $status
     */
    public function __construct(array $profil, ?array $karta = null, ?array $permision = null, ?array $jednostka = null, ?\App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $domyslnaJednostka = null, ?\App\ElektronicznyNadawca\StructType\ProfilType $domyslnyProfil = null, ?array $dostepPoAdresieIP = null, ?int $idDomyslnyProfilDokZwrKlient = null, ?int $idDomyslnyProfilDokZwrUzytk = null, ?array $rodzajPrzypisania = null, ?string $userName = null, ?string $firstName = null, ?string $lastName = null, ?string $email = null, ?string $status = null)
    {
        $this
            ->setProfil($profil)
            ->setKarta($karta)
            ->setPermision($permision)
            ->setJednostka($jednostka)
            ->setDomyslnaJednostka($domyslnaJednostka)
            ->setDomyslnyProfil($domyslnyProfil)
            ->setDostepPoAdresieIP($dostepPoAdresieIP)
            ->setIdDomyslnyProfilDokZwrKlient($idDomyslnyProfilDokZwrKlient)
            ->setIdDomyslnyProfilDokZwrUzytk($idDomyslnyProfilDokZwrUzytk)
            ->setRodzajPrzypisania($rodzajPrzypisania)
            ->setUserName($userName)
            ->setFirstName($firstName)
            ->setLastName($lastName)
            ->setEmail($email)
            ->setStatus($status);
    }
    /**
     * Get profil value
     * @return \App\ElektronicznyNadawca\StructType\ProfilType[]
     */
    public function getProfil(): array
    {
        return $this->profil;
    }
    /**
     * Set profil value
     * @param \App\ElektronicznyNadawca\StructType\ProfilType[] $profil
     * @return \App\ElektronicznyNadawca\StructType\AccountType
     */
    public function setProfil(array $profil): self
    {
        $this->profil = $profil;
        
        return $this;
    }
    /**
     * Add item to profil value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\ProfilType $item
     * @return \App\ElektronicznyNadawca\StructType\AccountType
     */
    public function addToProfil(\App\ElektronicznyNadawca\StructType\ProfilType $item): self
    {
        $this->profil[] = $item;
        
        return $this;
    }
    /**
     * Get karta value
     * @return \App\ElektronicznyNadawca\StructType\KartaType[]
     */
    public function getKarta(): ?array
    {
        return $this->karta;
    }
    /**
     * Set karta value
     * @param \App\ElektronicznyNadawca\StructType\KartaType[] $karta
     * @return \App\ElektronicznyNadawca\StructType\AccountType
     */
    public function setKarta(?array $karta = null): self
    {
        $this->karta = $karta;
        
        return $this;
    }
    /**
     * Add item to karta value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\KartaType $item
     * @return \App\ElektronicznyNadawca\StructType\AccountType
     */
    public function addToKarta(\App\ElektronicznyNadawca\StructType\KartaType $item): self
    {
        $this->karta[] = $item;
        
        return $this;
    }
    /**
     * Get permision value
     * @return string[]
     */
    public function getPermision(): ?array
    {
        return $this->permision;
    }
    /**
     * Set permision value
     * @param string[] $permision
     * @return \App\ElektronicznyNadawca\StructType\AccountType
     */
    public function setPermision(?array $permision = null): self
    {
        $this->permision = $permision;
        
        return $this;
    }
    /**
     * Add item to permision value
     * @uses \App\ElektronicznyNadawca\EnumType\PermisionType::valueIsValid()
     * @uses \App\ElektronicznyNadawca\EnumType\PermisionType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \App\ElektronicznyNadawca\StructType\AccountType
     */
    public function addToPermision(string $item): self
    {
        $this->permision[] = $item;
        
        return $this;
    }
    /**
     * Get jednostka value
     * @return \App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType[]
     */
    public function getJednostka(): ?array
    {
        return $this->jednostka;
    }
    /**
     * Set jednostka value
     * @param \App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType[] $jednostka
     * @return \App\ElektronicznyNadawca\StructType\AccountType
     */
    public function setJednostka(?array $jednostka = null): self
    {
        $this->jednostka = $jednostka;
        
        return $this;
    }
    /**
     * Add item to jednostka value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $item
     * @return \App\ElektronicznyNadawca\StructType\AccountType
     */
    public function addToJednostka(\App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $item): self
    {
        $this->jednostka[] = $item;
        
        return $this;
    }
    /**
     * Get domyslnaJednostka value
     * @return \App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType|null
     */
    public function getDomyslnaJednostka(): ?\App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType
    {
        return $this->domyslnaJednostka;
    }
    /**
     * Set domyslnaJednostka value
     * @param \App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $domyslnaJednostka
     * @return \App\ElektronicznyNadawca\StructType\AccountType
     */
    public function setDomyslnaJednostka(?\App\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $domyslnaJednostka = null): self
    {
        $this->domyslnaJednostka = $domyslnaJednostka;
        
        return $this;
    }
    /**
     * Get domyslnyProfil value
     * @return \App\ElektronicznyNadawca\StructType\ProfilType|null
     */
    public function getDomyslnyProfil(): ?\App\ElektronicznyNadawca\StructType\ProfilType
    {
        return $this->domyslnyProfil;
    }
    /**
     * Set domyslnyProfil value
     * @param \App\ElektronicznyNadawca\StructType\ProfilType $domyslnyProfil
     * @return \App\ElektronicznyNadawca\StructType\AccountType
     */
    public function setDomyslnyProfil(?\App\ElektronicznyNadawca\StructType\ProfilType $domyslnyProfil = null): self
    {
        $this->domyslnyProfil = $domyslnyProfil;
        
        return $this;
    }
    /**
     * Get dostepPoAdresieIP value
     * @return string[]
     */
    public function getDostepPoAdresieIP(): ?array
    {
        return $this->dostepPoAdresieIP;
    }
    /**
     * Set dostepPoAdresieIP value
     * @param string[] $dostepPoAdresieIP
     * @return \App\ElektronicznyNadawca\StructType\AccountType
     */
    public function setDostepPoAdresieIP(?array $dostepPoAdresieIP = null): self
    {
        $this->dostepPoAdresieIP = $dostepPoAdresieIP;
        
        return $this;
    }
    /**
     * Add item to dostepPoAdresieIP value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \App\ElektronicznyNadawca\StructType\AccountType
     */
    public function addToDostepPoAdresieIP(string $item): self
    {
        $this->dostepPoAdresieIP[] = $item;
        
        return $this;
    }
    /**
     * Get idDomyslnyProfilDokZwrKlient value
     * @return int|null
     */
    public function getIdDomyslnyProfilDokZwrKlient(): ?int
    {
        return $this->idDomyslnyProfilDokZwrKlient;
    }
    /**
     * Set idDomyslnyProfilDokZwrKlient value
     * @param int $idDomyslnyProfilDokZwrKlient
     * @return \App\ElektronicznyNadawca\StructType\AccountType
     */
    public function setIdDomyslnyProfilDokZwrKlient(?int $idDomyslnyProfilDokZwrKlient = null): self
    {
        $this->idDomyslnyProfilDokZwrKlient = $idDomyslnyProfilDokZwrKlient;
        
        return $this;
    }
    /**
     * Get idDomyslnyProfilDokZwrUzytk value
     * @return int|null
     */
    public function getIdDomyslnyProfilDokZwrUzytk(): ?int
    {
        return $this->idDomyslnyProfilDokZwrUzytk;
    }
    /**
     * Set idDomyslnyProfilDokZwrUzytk value
     * @param int $idDomyslnyProfilDokZwrUzytk
     * @return \App\ElektronicznyNadawca\StructType\AccountType
     */
    public function setIdDomyslnyProfilDokZwrUzytk(?int $idDomyslnyProfilDokZwrUzytk = null): self
    {
        $this->idDomyslnyProfilDokZwrUzytk = $idDomyslnyProfilDokZwrUzytk;
        
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
     * @return \App\ElektronicznyNadawca\StructType\AccountType
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
     * @return \App\ElektronicznyNadawca\StructType\AccountType
     */
    public function addToRodzajPrzypisania(string $item): self
    {
        $this->rodzajPrzypisania[] = $item;
        
        return $this;
    }
    /**
     * Get userName value
     * @return string|null
     */
    public function getUserName(): ?string
    {
        return $this->userName;
    }
    /**
     * Set userName value
     * @param string $userName
     * @return \App\ElektronicznyNadawca\StructType\AccountType
     */
    public function setUserName(?string $userName = null): self
    {
        $this->userName = $userName;
        
        return $this;
    }
    /**
     * Get firstName value
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }
    /**
     * Set firstName value
     * @param string $firstName
     * @return \App\ElektronicznyNadawca\StructType\AccountType
     */
    public function setFirstName(?string $firstName = null): self
    {
        $this->firstName = $firstName;
        
        return $this;
    }
    /**
     * Get lastName value
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }
    /**
     * Set lastName value
     * @param string $lastName
     * @return \App\ElektronicznyNadawca\StructType\AccountType
     */
    public function setLastName(?string $lastName = null): self
    {
        $this->lastName = $lastName;
        
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
     * @return \App\ElektronicznyNadawca\StructType\AccountType
     */
    public function setEmail(?string $email = null): self
    {
        $this->email = $email;
        
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \App\ElektronicznyNadawca\StructType\AccountType
     */
    public function setStatus(?string $status = null): self
    {
        $this->status = $status;
        
        return $this;
    }
}
