<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for adresType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AdresType
{
    /**
     * The nazwa
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 60
     * - minLength: 1
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $nazwa = null;
    /**
     * The nazwa2
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 60
     * - minLength: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $nazwa2 = null;
    /**
     * The ulica
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 255
     * - minLength: 1
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $ulica = null;
    /**
     * The numerDomu
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 11
     * - minLength: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $numerDomu = null;
    /**
     * The numerLokalu
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 11
     * - minLength: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $numerLokalu = null;
    /**
     * The miejscowosc
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 63
     * - minLength: 1
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $miejscowosc = null;
    /**
     * The kodPocztowy
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 10
     * - minLength: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $kodPocztowy = null;
    /**
     * The kraj
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - default: Polska
     * - maxLength: 40
     * - minLength: 0
     * - use: optional
     * @var string|null
     */
    public ?string $kraj = null;
    /**
     * The telefon
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 20
     * - minLength: 0
     * @var string|null
     */
    public ?string $telefon = null;
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
     * The mobile
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * @var string|null
     */
    public ?string $mobile = null;
    /**
     * The osobaKontaktowa
     * @var string|null
     */
    public ?string $osobaKontaktowa = null;
    /**
     * The nip
     * @var string|null
     */
    public ?string $nip = null;
    /**
     * Constructor method for adresType
     * @uses AdresType::setNazwa()
     * @uses AdresType::setNazwa2()
     * @uses AdresType::setUlica()
     * @uses AdresType::setNumerDomu()
     * @uses AdresType::setNumerLokalu()
     * @uses AdresType::setMiejscowosc()
     * @uses AdresType::setKodPocztowy()
     * @uses AdresType::setKraj()
     * @uses AdresType::setTelefon()
     * @uses AdresType::setEmail()
     * @uses AdresType::setMobile()
     * @uses AdresType::setOsobaKontaktowa()
     * @uses AdresType::setNip()
     * @param string $nazwa
     * @param string $nazwa2
     * @param string $ulica
     * @param string $numerDomu
     * @param string $numerLokalu
     * @param string $miejscowosc
     * @param string $kodPocztowy
     * @param string $kraj
     * @param string $telefon
     * @param string $email
     * @param string $mobile
     * @param string $osobaKontaktowa
     * @param string $nip
     */
    public function __construct(?string $nazwa = null, ?string $nazwa2 = null, ?string $ulica = null, ?string $numerDomu = null, ?string $numerLokalu = null, ?string $miejscowosc = null, ?string $kodPocztowy = null, ?string $kraj = 'Polska', ?string $telefon = null, ?string $email = null, ?string $mobile = null, ?string $osobaKontaktowa = null, ?string $nip = null)
    {
        $this
            ->setNazwa($nazwa)
            ->setNazwa2($nazwa2)
            ->setUlica($ulica)
            ->setNumerDomu($numerDomu)
            ->setNumerLokalu($numerLokalu)
            ->setMiejscowosc($miejscowosc)
            ->setKodPocztowy($kodPocztowy)
            ->setKraj($kraj)
            ->setTelefon($telefon)
            ->setEmail($email)
            ->setMobile($mobile)
            ->setOsobaKontaktowa($osobaKontaktowa)
            ->setNip($nip);
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
     * @return \App\ElektronicznyNadawca\StructType\AdresType
     */
    public function setNazwa(?string $nazwa = null): self
    {
        $this->nazwa = $nazwa;
        
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
     * @return \App\ElektronicznyNadawca\StructType\AdresType
     */
    public function setNazwa2(?string $nazwa2 = null): self
    {
        $this->nazwa2 = $nazwa2;
        
        return $this;
    }
    /**
     * Get ulica value
     * @return string|null
     */
    public function getUlica(): ?string
    {
        return $this->ulica;
    }
    /**
     * Set ulica value
     * @param string $ulica
     * @return \App\ElektronicznyNadawca\StructType\AdresType
     */
    public function setUlica(?string $ulica = null): self
    {
        $this->ulica = $ulica;
        
        return $this;
    }
    /**
     * Get numerDomu value
     * @return string|null
     */
    public function getNumerDomu(): ?string
    {
        return $this->numerDomu;
    }
    /**
     * Set numerDomu value
     * @param string $numerDomu
     * @return \App\ElektronicznyNadawca\StructType\AdresType
     */
    public function setNumerDomu(?string $numerDomu = null): self
    {
        $this->numerDomu = $numerDomu;
        
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
     * @return \App\ElektronicznyNadawca\StructType\AdresType
     */
    public function setNumerLokalu(?string $numerLokalu = null): self
    {
        $this->numerLokalu = $numerLokalu;
        
        return $this;
    }
    /**
     * Get miejscowosc value
     * @return string|null
     */
    public function getMiejscowosc(): ?string
    {
        return $this->miejscowosc;
    }
    /**
     * Set miejscowosc value
     * @param string $miejscowosc
     * @return \App\ElektronicznyNadawca\StructType\AdresType
     */
    public function setMiejscowosc(?string $miejscowosc = null): self
    {
        $this->miejscowosc = $miejscowosc;
        
        return $this;
    }
    /**
     * Get kodPocztowy value
     * @return string|null
     */
    public function getKodPocztowy(): ?string
    {
        return $this->kodPocztowy;
    }
    /**
     * Set kodPocztowy value
     * @param string $kodPocztowy
     * @return \App\ElektronicznyNadawca\StructType\AdresType
     */
    public function setKodPocztowy(?string $kodPocztowy = null): self
    {
        $this->kodPocztowy = $kodPocztowy;
        
        return $this;
    }
    /**
     * Get kraj value
     * @return string|null
     */
    public function getKraj(): ?string
    {
        return $this->kraj;
    }
    /**
     * Set kraj value
     * @param string $kraj
     * @return \App\ElektronicznyNadawca\StructType\AdresType
     */
    public function setKraj(?string $kraj = 'Polska'): self
    {
        $this->kraj = $kraj;
        
        return $this;
    }
    /**
     * Get telefon value
     * @return string|null
     */
    public function getTelefon(): ?string
    {
        return $this->telefon;
    }
    /**
     * Set telefon value
     * @param string $telefon
     * @return \App\ElektronicznyNadawca\StructType\AdresType
     */
    public function setTelefon(?string $telefon = null): self
    {
        $this->telefon = $telefon;
        
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
     * @return \App\ElektronicznyNadawca\StructType\AdresType
     */
    public function setEmail(?string $email = null): self
    {
        $this->email = $email;
        
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
     * @return \App\ElektronicznyNadawca\StructType\AdresType
     */
    public function setMobile(?string $mobile = null): self
    {
        $this->mobile = $mobile;
        
        return $this;
    }
    /**
     * Get osobaKontaktowa value
     * @return string|null
     */
    public function getOsobaKontaktowa(): ?string
    {
        return $this->osobaKontaktowa;
    }
    /**
     * Set osobaKontaktowa value
     * @param string $osobaKontaktowa
     * @return \App\ElektronicznyNadawca\StructType\AdresType
     */
    public function setOsobaKontaktowa(?string $osobaKontaktowa = null): self
    {
        $this->osobaKontaktowa = $osobaKontaktowa;
        
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
     * @return \App\ElektronicznyNadawca\StructType\AdresType
     */
    public function setNip(?string $nip = null): self
    {
        $this->nip = $nip;
        
        return $this;
    }
}
