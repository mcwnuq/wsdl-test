<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for shopEZwrotyType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ShopEZwrotyType
{
    /**
     * The eZwrotPrzesylki
     * Meta information extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 1
     * @var string[]
     */
    public array $eZwrotPrzesylki;
    /**
     * The nazwa
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 60
     * - minLength: 1
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    public string $nazwa;
    /**
     * The przyjaznaNazwa
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 60
     * - minLength: 1
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    public string $przyjaznaNazwa;
    /**
     * The ulica
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 255
     * - minLength: 1
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    public string $ulica;
    /**
     * The numerDomu
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 11
     * - minLength: 0
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    public string $numerDomu;
    /**
     * The miejscowosc
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 63
     * - minLength: 1
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    public string $miejscowosc;
    /**
     * The kodPocztowy
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 10
     * - minLength: 0
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    public string $kodPocztowy;
    /**
     * The mobile
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - use: required
     * @var string
     */
    public string $mobile;
    /**
     * The email
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 50
     * - minLength: 6
     * - use: required
     * @var string
     */
    public string $email;
    /**
     * The eZwrotKarta
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\EZwrotKartaType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\EZwrotKartaType $eZwrotKarta = null;
    /**
     * The idShop
     * @var int|null
     */
    public ?int $idShop = null;
    /**
     * The nazwa2
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 60
     * - minLength: 1
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $nazwa2 = null;
    /**
     * The numerLokalu
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 11
     * - minLength: 0
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $numerLokalu = null;
    /**
     * The nip
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $nip = null;
    /**
     * The regon
     * @var string|null
     */
    public ?string $regon = null;
    /**
     * The krs
     * @var string|null
     */
    public ?string $krs = null;
    /**
     * The eZwrotTyp
     * @var string|null
     */
    public ?string $eZwrotTyp = null;
    /**
     * The wymagalnoscNumeruIdentyfikujacegoPrzesylke
     * @var string|null
     */
    public ?string $wymagalnoscNumeruIdentyfikujacegoPrzesylke = null;
    /**
     * The availableOnWebsite
     * @var bool|null
     */
    public ?bool $availableOnWebsite = null;
    /**
     * The emailForEZwrot
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 50
     * - minLength: 6
     * @var string|null
     */
    public ?string $emailForEZwrot = null;
    /**
     * The paid
     * @var bool|null
     */
    public ?bool $paid = null;
    /**
     * The consentValidFor
     * @var int|null
     */
    public ?int $consentValidFor = null;
    /**
     * The contractorCost
     * @var int|null
     */
    public ?int $contractorCost = null;
    /**
     * The infoForClient
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 300
     * @var string|null
     */
    public ?string $infoForClient = null;
    /**
     * Constructor method for shopEZwrotyType
     * @uses ShopEZwrotyType::setEZwrotPrzesylki()
     * @uses ShopEZwrotyType::setNazwa()
     * @uses ShopEZwrotyType::setPrzyjaznaNazwa()
     * @uses ShopEZwrotyType::setUlica()
     * @uses ShopEZwrotyType::setNumerDomu()
     * @uses ShopEZwrotyType::setMiejscowosc()
     * @uses ShopEZwrotyType::setKodPocztowy()
     * @uses ShopEZwrotyType::setMobile()
     * @uses ShopEZwrotyType::setEmail()
     * @uses ShopEZwrotyType::setEZwrotKarta()
     * @uses ShopEZwrotyType::setIdShop()
     * @uses ShopEZwrotyType::setNazwa2()
     * @uses ShopEZwrotyType::setNumerLokalu()
     * @uses ShopEZwrotyType::setNip()
     * @uses ShopEZwrotyType::setRegon()
     * @uses ShopEZwrotyType::setKrs()
     * @uses ShopEZwrotyType::setEZwrotTyp()
     * @uses ShopEZwrotyType::setWymagalnoscNumeruIdentyfikujacegoPrzesylke()
     * @uses ShopEZwrotyType::setAvailableOnWebsite()
     * @uses ShopEZwrotyType::setEmailForEZwrot()
     * @uses ShopEZwrotyType::setPaid()
     * @uses ShopEZwrotyType::setConsentValidFor()
     * @uses ShopEZwrotyType::setContractorCost()
     * @uses ShopEZwrotyType::setInfoForClient()
     * @param string[] $eZwrotPrzesylki
     * @param string $nazwa
     * @param string $przyjaznaNazwa
     * @param string $ulica
     * @param string $numerDomu
     * @param string $miejscowosc
     * @param string $kodPocztowy
     * @param string $mobile
     * @param string $email
     * @param \App\ElektronicznyNadawca\StructType\EZwrotKartaType $eZwrotKarta
     * @param int $idShop
     * @param string $nazwa2
     * @param string $numerLokalu
     * @param string $nip
     * @param string $regon
     * @param string $krs
     * @param string $eZwrotTyp
     * @param string $wymagalnoscNumeruIdentyfikujacegoPrzesylke
     * @param bool $availableOnWebsite
     * @param string $emailForEZwrot
     * @param bool $paid
     * @param int $consentValidFor
     * @param int $contractorCost
     * @param string $infoForClient
     */
    public function __construct(array $eZwrotPrzesylki, string $nazwa, string $przyjaznaNazwa, string $ulica, string $numerDomu, string $miejscowosc, string $kodPocztowy, string $mobile, string $email, ?\App\ElektronicznyNadawca\StructType\EZwrotKartaType $eZwrotKarta = null, ?int $idShop = null, ?string $nazwa2 = null, ?string $numerLokalu = null, ?string $nip = null, ?string $regon = null, ?string $krs = null, ?string $eZwrotTyp = null, ?string $wymagalnoscNumeruIdentyfikujacegoPrzesylke = null, ?bool $availableOnWebsite = null, ?string $emailForEZwrot = null, ?bool $paid = null, ?int $consentValidFor = null, ?int $contractorCost = null, ?string $infoForClient = null)
    {
        $this
            ->setEZwrotPrzesylki($eZwrotPrzesylki)
            ->setNazwa($nazwa)
            ->setPrzyjaznaNazwa($przyjaznaNazwa)
            ->setUlica($ulica)
            ->setNumerDomu($numerDomu)
            ->setMiejscowosc($miejscowosc)
            ->setKodPocztowy($kodPocztowy)
            ->setMobile($mobile)
            ->setEmail($email)
            ->setEZwrotKarta($eZwrotKarta)
            ->setIdShop($idShop)
            ->setNazwa2($nazwa2)
            ->setNumerLokalu($numerLokalu)
            ->setNip($nip)
            ->setRegon($regon)
            ->setKrs($krs)
            ->setEZwrotTyp($eZwrotTyp)
            ->setWymagalnoscNumeruIdentyfikujacegoPrzesylke($wymagalnoscNumeruIdentyfikujacegoPrzesylke)
            ->setAvailableOnWebsite($availableOnWebsite)
            ->setEmailForEZwrot($emailForEZwrot)
            ->setPaid($paid)
            ->setConsentValidFor($consentValidFor)
            ->setContractorCost($contractorCost)
            ->setInfoForClient($infoForClient);
    }
    /**
     * Get eZwrotPrzesylki value
     * @return string[]
     */
    public function getEZwrotPrzesylki(): array
    {
        return $this->eZwrotPrzesylki;
    }
    /**
     * Set eZwrotPrzesylki value
     * @param string[] $eZwrotPrzesylki
     * @return \App\ElektronicznyNadawca\StructType\ShopEZwrotyType
     */
    public function setEZwrotPrzesylki(array $eZwrotPrzesylki): self
    {
        $this->eZwrotPrzesylki = $eZwrotPrzesylki;
        
        return $this;
    }
    /**
     * Add item to eZwrotPrzesylki value
     * @uses \App\ElektronicznyNadawca\EnumType\EZwrotPrzesylkiType::valueIsValid()
     * @uses \App\ElektronicznyNadawca\EnumType\EZwrotPrzesylkiType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \App\ElektronicznyNadawca\StructType\ShopEZwrotyType
     */
    public function addToEZwrotPrzesylki(string $item): self
    {
        $this->eZwrotPrzesylki[] = $item;
        
        return $this;
    }
    /**
     * Get nazwa value
     * @return string
     */
    public function getNazwa(): string
    {
        return $this->nazwa;
    }
    /**
     * Set nazwa value
     * @param string $nazwa
     * @return \App\ElektronicznyNadawca\StructType\ShopEZwrotyType
     */
    public function setNazwa(string $nazwa): self
    {
        $this->nazwa = $nazwa;
        
        return $this;
    }
    /**
     * Get przyjaznaNazwa value
     * @return string
     */
    public function getPrzyjaznaNazwa(): string
    {
        return $this->przyjaznaNazwa;
    }
    /**
     * Set przyjaznaNazwa value
     * @param string $przyjaznaNazwa
     * @return \App\ElektronicznyNadawca\StructType\ShopEZwrotyType
     */
    public function setPrzyjaznaNazwa(string $przyjaznaNazwa): self
    {
        $this->przyjaznaNazwa = $przyjaznaNazwa;
        
        return $this;
    }
    /**
     * Get ulica value
     * @return string
     */
    public function getUlica(): string
    {
        return $this->ulica;
    }
    /**
     * Set ulica value
     * @param string $ulica
     * @return \App\ElektronicznyNadawca\StructType\ShopEZwrotyType
     */
    public function setUlica(string $ulica): self
    {
        $this->ulica = $ulica;
        
        return $this;
    }
    /**
     * Get numerDomu value
     * @return string
     */
    public function getNumerDomu(): string
    {
        return $this->numerDomu;
    }
    /**
     * Set numerDomu value
     * @param string $numerDomu
     * @return \App\ElektronicznyNadawca\StructType\ShopEZwrotyType
     */
    public function setNumerDomu(string $numerDomu): self
    {
        $this->numerDomu = $numerDomu;
        
        return $this;
    }
    /**
     * Get miejscowosc value
     * @return string
     */
    public function getMiejscowosc(): string
    {
        return $this->miejscowosc;
    }
    /**
     * Set miejscowosc value
     * @param string $miejscowosc
     * @return \App\ElektronicznyNadawca\StructType\ShopEZwrotyType
     */
    public function setMiejscowosc(string $miejscowosc): self
    {
        $this->miejscowosc = $miejscowosc;
        
        return $this;
    }
    /**
     * Get kodPocztowy value
     * @return string
     */
    public function getKodPocztowy(): string
    {
        return $this->kodPocztowy;
    }
    /**
     * Set kodPocztowy value
     * @param string $kodPocztowy
     * @return \App\ElektronicznyNadawca\StructType\ShopEZwrotyType
     */
    public function setKodPocztowy(string $kodPocztowy): self
    {
        $this->kodPocztowy = $kodPocztowy;
        
        return $this;
    }
    /**
     * Get mobile value
     * @return string
     */
    public function getMobile(): string
    {
        return $this->mobile;
    }
    /**
     * Set mobile value
     * @param string $mobile
     * @return \App\ElektronicznyNadawca\StructType\ShopEZwrotyType
     */
    public function setMobile(string $mobile): self
    {
        $this->mobile = $mobile;
        
        return $this;
    }
    /**
     * Get email value
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \App\ElektronicznyNadawca\StructType\ShopEZwrotyType
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;
        
        return $this;
    }
    /**
     * Get eZwrotKarta value
     * @return \App\ElektronicznyNadawca\StructType\EZwrotKartaType|null
     */
    public function getEZwrotKarta(): ?\App\ElektronicznyNadawca\StructType\EZwrotKartaType
    {
        return $this->eZwrotKarta;
    }
    /**
     * Set eZwrotKarta value
     * @param \App\ElektronicznyNadawca\StructType\EZwrotKartaType $eZwrotKarta
     * @return \App\ElektronicznyNadawca\StructType\ShopEZwrotyType
     */
    public function setEZwrotKarta(?\App\ElektronicznyNadawca\StructType\EZwrotKartaType $eZwrotKarta = null): self
    {
        $this->eZwrotKarta = $eZwrotKarta;
        
        return $this;
    }
    /**
     * Get idShop value
     * @return int|null
     */
    public function getIdShop(): ?int
    {
        return $this->idShop;
    }
    /**
     * Set idShop value
     * @param int $idShop
     * @return \App\ElektronicznyNadawca\StructType\ShopEZwrotyType
     */
    public function setIdShop(?int $idShop = null): self
    {
        $this->idShop = $idShop;
        
        return $this;
    }
    /**
     * Get nazwa2 value
     * @return string|null
     */
    public function getNazwa2(): ?string
    {
        return $this->nazwa2;
    }
    /**
     * Set nazwa2 value
     * @param string $nazwa2
     * @return \App\ElektronicznyNadawca\StructType\ShopEZwrotyType
     */
    public function setNazwa2(?string $nazwa2 = null): self
    {
        $this->nazwa2 = $nazwa2;
        
        return $this;
    }
    /**
     * Get numerLokalu value
     * @return string|null
     */
    public function getNumerLokalu(): ?string
    {
        return $this->numerLokalu;
    }
    /**
     * Set numerLokalu value
     * @param string $numerLokalu
     * @return \App\ElektronicznyNadawca\StructType\ShopEZwrotyType
     */
    public function setNumerLokalu(?string $numerLokalu = null): self
    {
        $this->numerLokalu = $numerLokalu;
        
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
     * @return \App\ElektronicznyNadawca\StructType\ShopEZwrotyType
     */
    public function setNip(?string $nip = null): self
    {
        $this->nip = $nip;
        
        return $this;
    }
    /**
     * Get regon value
     * @return string|null
     */
    public function getRegon(): ?string
    {
        return $this->regon;
    }
    /**
     * Set regon value
     * @param string $regon
     * @return \App\ElektronicznyNadawca\StructType\ShopEZwrotyType
     */
    public function setRegon(?string $regon = null): self
    {
        $this->regon = $regon;
        
        return $this;
    }
    /**
     * Get krs value
     * @return string|null
     */
    public function getKrs(): ?string
    {
        return $this->krs;
    }
    /**
     * Set krs value
     * @param string $krs
     * @return \App\ElektronicznyNadawca\StructType\ShopEZwrotyType
     */
    public function setKrs(?string $krs = null): self
    {
        $this->krs = $krs;
        
        return $this;
    }
    /**
     * Get eZwrotTyp value
     * @return string|null
     */
    public function getEZwrotTyp(): ?string
    {
        return $this->eZwrotTyp;
    }
    /**
     * Set eZwrotTyp value
     * @param string $eZwrotTyp
     * @return \App\ElektronicznyNadawca\StructType\ShopEZwrotyType
     */
    public function setEZwrotTyp(?string $eZwrotTyp = null): self
    {
        $this->eZwrotTyp = $eZwrotTyp;
        
        return $this;
    }
    /**
     * Get wymagalnoscNumeruIdentyfikujacegoPrzesylke value
     * @return string|null
     */
    public function getWymagalnoscNumeruIdentyfikujacegoPrzesylke(): ?string
    {
        return $this->wymagalnoscNumeruIdentyfikujacegoPrzesylke;
    }
    /**
     * Set wymagalnoscNumeruIdentyfikujacegoPrzesylke value
     * @param string $wymagalnoscNumeruIdentyfikujacegoPrzesylke
     * @return \App\ElektronicznyNadawca\StructType\ShopEZwrotyType
     */
    public function setWymagalnoscNumeruIdentyfikujacegoPrzesylke(?string $wymagalnoscNumeruIdentyfikujacegoPrzesylke = null): self
    {
        $this->wymagalnoscNumeruIdentyfikujacegoPrzesylke = $wymagalnoscNumeruIdentyfikujacegoPrzesylke;
        
        return $this;
    }
    /**
     * Get availableOnWebsite value
     * @return bool|null
     */
    public function getAvailableOnWebsite(): ?bool
    {
        return $this->availableOnWebsite;
    }
    /**
     * Set availableOnWebsite value
     * @param bool $availableOnWebsite
     * @return \App\ElektronicznyNadawca\StructType\ShopEZwrotyType
     */
    public function setAvailableOnWebsite(?bool $availableOnWebsite = null): self
    {
        $this->availableOnWebsite = $availableOnWebsite;
        
        return $this;
    }
    /**
     * Get emailForEZwrot value
     * @return string|null
     */
    public function getEmailForEZwrot(): ?string
    {
        return $this->emailForEZwrot;
    }
    /**
     * Set emailForEZwrot value
     * @param string $emailForEZwrot
     * @return \App\ElektronicznyNadawca\StructType\ShopEZwrotyType
     */
    public function setEmailForEZwrot(?string $emailForEZwrot = null): self
    {
        $this->emailForEZwrot = $emailForEZwrot;
        
        return $this;
    }
    /**
     * Get paid value
     * @return bool|null
     */
    public function getPaid(): ?bool
    {
        return $this->paid;
    }
    /**
     * Set paid value
     * @param bool $paid
     * @return \App\ElektronicznyNadawca\StructType\ShopEZwrotyType
     */
    public function setPaid(?bool $paid = null): self
    {
        $this->paid = $paid;
        
        return $this;
    }
    /**
     * Get consentValidFor value
     * @return int|null
     */
    public function getConsentValidFor(): ?int
    {
        return $this->consentValidFor;
    }
    /**
     * Set consentValidFor value
     * @param int $consentValidFor
     * @return \App\ElektronicznyNadawca\StructType\ShopEZwrotyType
     */
    public function setConsentValidFor(?int $consentValidFor = null): self
    {
        $this->consentValidFor = $consentValidFor;
        
        return $this;
    }
    /**
     * Get contractorCost value
     * @return int|null
     */
    public function getContractorCost(): ?int
    {
        return $this->contractorCost;
    }
    /**
     * Set contractorCost value
     * @param int $contractorCost
     * @return \App\ElektronicznyNadawca\StructType\ShopEZwrotyType
     */
    public function setContractorCost(?int $contractorCost = null): self
    {
        $this->contractorCost = $contractorCost;
        
        return $this;
    }
    /**
     * Get infoForClient value
     * @return string|null
     */
    public function getInfoForClient(): ?string
    {
        return $this->infoForClient;
    }
    /**
     * Set infoForClient value
     * @param string $infoForClient
     * @return \App\ElektronicznyNadawca\StructType\ShopEZwrotyType
     */
    public function setInfoForClient(?string $infoForClient = null): self
    {
        $this->infoForClient = $infoForClient;
        
        return $this;
    }
}
