<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for zamowKuriera StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ZamowKuriera extends AbstractStructBase
{
    /**
     * The miejsceOdbioru
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \App\ElektronicznyNadawca\StructType\AdresType
     */
    public \App\ElektronicznyNadawca\StructType\AdresType $miejsceOdbioru;
    /**
     * The oczekiwanaDataOdbioru
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public string $oczekiwanaDataOdbioru;
    /**
     * The oczekiwanaGodzinaOdbioru
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public string $oczekiwanaGodzinaOdbioru;
    /**
     * The szacowanaIloscPrzeslek
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public string $szacowanaIloscPrzeslek;
    /**
     * The szacowanaLacznaMasaPrzesylek
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public string $szacowanaLacznaMasaPrzesylek;
    /**
     * The nadawca
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\AdresType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\AdresType $nadawca = null;
    /**
     * The potwierdzenieZamowieniaEmail
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 50
     * - maxOccurs: 1
     * - minLength: 6
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $potwierdzenieZamowieniaEmail = null;
    /**
     * Constructor method for zamowKuriera
     * @uses ZamowKuriera::setMiejsceOdbioru()
     * @uses ZamowKuriera::setOczekiwanaDataOdbioru()
     * @uses ZamowKuriera::setOczekiwanaGodzinaOdbioru()
     * @uses ZamowKuriera::setSzacowanaIloscPrzeslek()
     * @uses ZamowKuriera::setSzacowanaLacznaMasaPrzesylek()
     * @uses ZamowKuriera::setNadawca()
     * @uses ZamowKuriera::setPotwierdzenieZamowieniaEmail()
     * @param \App\ElektronicznyNadawca\StructType\AdresType $miejsceOdbioru
     * @param string $oczekiwanaDataOdbioru
     * @param string $oczekiwanaGodzinaOdbioru
     * @param string $szacowanaIloscPrzeslek
     * @param string $szacowanaLacznaMasaPrzesylek
     * @param \App\ElektronicznyNadawca\StructType\AdresType $nadawca
     * @param string $potwierdzenieZamowieniaEmail
     */
    public function __construct(\App\ElektronicznyNadawca\StructType\AdresType $miejsceOdbioru, string $oczekiwanaDataOdbioru, string $oczekiwanaGodzinaOdbioru, string $szacowanaIloscPrzeslek, string $szacowanaLacznaMasaPrzesylek, ?\App\ElektronicznyNadawca\StructType\AdresType $nadawca = null, ?string $potwierdzenieZamowieniaEmail = null)
    {
        $this
            ->setMiejsceOdbioru($miejsceOdbioru)
            ->setOczekiwanaDataOdbioru($oczekiwanaDataOdbioru)
            ->setOczekiwanaGodzinaOdbioru($oczekiwanaGodzinaOdbioru)
            ->setSzacowanaIloscPrzeslek($szacowanaIloscPrzeslek)
            ->setSzacowanaLacznaMasaPrzesylek($szacowanaLacznaMasaPrzesylek)
            ->setNadawca($nadawca)
            ->setPotwierdzenieZamowieniaEmail($potwierdzenieZamowieniaEmail);
    }
    /**
     * Get miejsceOdbioru value
     * @return \App\ElektronicznyNadawca\StructType\AdresType
     */
    public function getMiejsceOdbioru(): \App\ElektronicznyNadawca\StructType\AdresType
    {
        return $this->miejsceOdbioru;
    }
    /**
     * Set miejsceOdbioru value
     * @param \App\ElektronicznyNadawca\StructType\AdresType $miejsceOdbioru
     * @return \App\ElektronicznyNadawca\StructType\ZamowKuriera
     */
    public function setMiejsceOdbioru(\App\ElektronicznyNadawca\StructType\AdresType $miejsceOdbioru): self
    {
        $this->miejsceOdbioru = $miejsceOdbioru;
        
        return $this;
    }
    /**
     * Get oczekiwanaDataOdbioru value
     * @return string
     */
    public function getOczekiwanaDataOdbioru(): string
    {
        return $this->oczekiwanaDataOdbioru;
    }
    /**
     * Set oczekiwanaDataOdbioru value
     * @param string $oczekiwanaDataOdbioru
     * @return \App\ElektronicznyNadawca\StructType\ZamowKuriera
     */
    public function setOczekiwanaDataOdbioru(string $oczekiwanaDataOdbioru): self
    {
        $this->oczekiwanaDataOdbioru = $oczekiwanaDataOdbioru;
        
        return $this;
    }
    /**
     * Get oczekiwanaGodzinaOdbioru value
     * @return string
     */
    public function getOczekiwanaGodzinaOdbioru(): string
    {
        return $this->oczekiwanaGodzinaOdbioru;
    }
    /**
     * Set oczekiwanaGodzinaOdbioru value
     * @param string $oczekiwanaGodzinaOdbioru
     * @return \App\ElektronicznyNadawca\StructType\ZamowKuriera
     */
    public function setOczekiwanaGodzinaOdbioru(string $oczekiwanaGodzinaOdbioru): self
    {
        $this->oczekiwanaGodzinaOdbioru = $oczekiwanaGodzinaOdbioru;
        
        return $this;
    }
    /**
     * Get szacowanaIloscPrzeslek value
     * @return string
     */
    public function getSzacowanaIloscPrzeslek(): string
    {
        return $this->szacowanaIloscPrzeslek;
    }
    /**
     * Set szacowanaIloscPrzeslek value
     * @param string $szacowanaIloscPrzeslek
     * @return \App\ElektronicznyNadawca\StructType\ZamowKuriera
     */
    public function setSzacowanaIloscPrzeslek(string $szacowanaIloscPrzeslek): self
    {
        $this->szacowanaIloscPrzeslek = $szacowanaIloscPrzeslek;
        
        return $this;
    }
    /**
     * Get szacowanaLacznaMasaPrzesylek value
     * @return string
     */
    public function getSzacowanaLacznaMasaPrzesylek(): string
    {
        return $this->szacowanaLacznaMasaPrzesylek;
    }
    /**
     * Set szacowanaLacznaMasaPrzesylek value
     * @param string $szacowanaLacznaMasaPrzesylek
     * @return \App\ElektronicznyNadawca\StructType\ZamowKuriera
     */
    public function setSzacowanaLacznaMasaPrzesylek(string $szacowanaLacznaMasaPrzesylek): self
    {
        $this->szacowanaLacznaMasaPrzesylek = $szacowanaLacznaMasaPrzesylek;
        
        return $this;
    }
    /**
     * Get nadawca value
     * @return \App\ElektronicznyNadawca\StructType\AdresType|null
     */
    public function getNadawca(): ?\App\ElektronicznyNadawca\StructType\AdresType
    {
        return $this->nadawca;
    }
    /**
     * Set nadawca value
     * @param \App\ElektronicznyNadawca\StructType\AdresType $nadawca
     * @return \App\ElektronicznyNadawca\StructType\ZamowKuriera
     */
    public function setNadawca(?\App\ElektronicznyNadawca\StructType\AdresType $nadawca = null): self
    {
        $this->nadawca = $nadawca;
        
        return $this;
    }
    /**
     * Get potwierdzenieZamowieniaEmail value
     * @return string|null
     */
    public function getPotwierdzenieZamowieniaEmail(): ?string
    {
        return $this->potwierdzenieZamowieniaEmail;
    }
    /**
     * Set potwierdzenieZamowieniaEmail value
     * @param string $potwierdzenieZamowieniaEmail
     * @return \App\ElektronicznyNadawca\StructType\ZamowKuriera
     */
    public function setPotwierdzenieZamowieniaEmail(?string $potwierdzenieZamowieniaEmail = null): self
    {
        $this->potwierdzenieZamowieniaEmail = $potwierdzenieZamowieniaEmail;
        
        return $this;
    }
}
