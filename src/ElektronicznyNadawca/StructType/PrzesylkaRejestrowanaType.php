<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for przesylkaRejestrowanaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
abstract class PrzesylkaRejestrowanaType extends PrzesylkaType
{
    /**
     * The adres
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\AdresType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\AdresType $adres = null;
    /**
     * The nadawca
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\AdresType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\AdresType $nadawca = null;
    /**
     * The relatedToAllegro
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\RelatedToAllegroType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\RelatedToAllegroType $relatedToAllegro = null;
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
     * The sygnatura
     * Meta information extracted from the WSDL
     * - documentation: sygnatura np. sprawy/pisma nadanego przesyłką
     * - base: xsd:string
     * - maxLength: 255
     * - minLength: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $sygnatura = null;
    /**
     * The terminSprawy
     * Meta information extracted from the WSDL
     * - documentation: termin np. rozprawy sądowej lub termin graniczny pisma nadanego przesyłką
     * - base: xsd:string
     * @var string|null
     */
    public ?string $terminSprawy = null;
    /**
     * The rodzaj
     * Meta information extracted from the WSDL
     * - documentation: rodzaj przesyłki klienta np. postepowanie karne, cywilne, reklamacja, odwołanie, wezwanie do zapłaty itp.
     * - base: xsd:string
     * - maxLength: 255
     * - minLength: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $rodzaj = null;
    /**
     * The weryfikacjaPlatnosci
     * @var bool|null
     */
    public ?bool $weryfikacjaPlatnosci = null;
    /**
     * Constructor method for przesylkaRejestrowanaType
     * @uses PrzesylkaRejestrowanaType::setAdres()
     * @uses PrzesylkaRejestrowanaType::setNadawca()
     * @uses PrzesylkaRejestrowanaType::setRelatedToAllegro()
     * @uses PrzesylkaRejestrowanaType::setNumerNadania()
     * @uses PrzesylkaRejestrowanaType::setSygnatura()
     * @uses PrzesylkaRejestrowanaType::setTerminSprawy()
     * @uses PrzesylkaRejestrowanaType::setRodzaj()
     * @uses PrzesylkaRejestrowanaType::setWeryfikacjaPlatnosci()
     * @param \App\ElektronicznyNadawca\StructType\AdresType $adres
     * @param \App\ElektronicznyNadawca\StructType\AdresType $nadawca
     * @param \App\ElektronicznyNadawca\StructType\RelatedToAllegroType $relatedToAllegro
     * @param string $numerNadania
     * @param string $sygnatura
     * @param string $terminSprawy
     * @param string $rodzaj
     * @param bool $weryfikacjaPlatnosci
     */
    public function __construct(?\App\ElektronicznyNadawca\StructType\AdresType $adres = null, ?\App\ElektronicznyNadawca\StructType\AdresType $nadawca = null, ?\App\ElektronicznyNadawca\StructType\RelatedToAllegroType $relatedToAllegro = null, ?string $numerNadania = null, ?string $sygnatura = null, ?string $terminSprawy = null, ?string $rodzaj = null, ?bool $weryfikacjaPlatnosci = null)
    {
        $this
            ->setAdres($adres)
            ->setNadawca($nadawca)
            ->setRelatedToAllegro($relatedToAllegro)
            ->setNumerNadania($numerNadania)
            ->setSygnatura($sygnatura)
            ->setTerminSprawy($terminSprawy)
            ->setRodzaj($rodzaj)
            ->setWeryfikacjaPlatnosci($weryfikacjaPlatnosci);
    }
    /**
     * Get adres value
     * @return \App\ElektronicznyNadawca\StructType\AdresType|null
     */
    public function getAdres(): ?\App\ElektronicznyNadawca\StructType\AdresType
    {
        return $this->adres;
    }
    /**
     * Set adres value
     * @param \App\ElektronicznyNadawca\StructType\AdresType $adres
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaRejestrowanaType
     */
    public function setAdres(?\App\ElektronicznyNadawca\StructType\AdresType $adres = null): self
    {
        $this->adres = $adres;
        
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaRejestrowanaType
     */
    public function setNadawca(?\App\ElektronicznyNadawca\StructType\AdresType $nadawca = null): self
    {
        $this->nadawca = $nadawca;
        
        return $this;
    }
    /**
     * Get relatedToAllegro value
     * @return \App\ElektronicznyNadawca\StructType\RelatedToAllegroType|null
     */
    public function getRelatedToAllegro(): ?\App\ElektronicznyNadawca\StructType\RelatedToAllegroType
    {
        return $this->relatedToAllegro;
    }
    /**
     * Set relatedToAllegro value
     * @param \App\ElektronicznyNadawca\StructType\RelatedToAllegroType $relatedToAllegro
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaRejestrowanaType
     */
    public function setRelatedToAllegro(?\App\ElektronicznyNadawca\StructType\RelatedToAllegroType $relatedToAllegro = null): self
    {
        $this->relatedToAllegro = $relatedToAllegro;
        
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
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaRejestrowanaType
     */
    public function setNumerNadania(?string $numerNadania = null): self
    {
        $this->numerNadania = $numerNadania;
        
        return $this;
    }
    /**
     * Get sygnatura value
     * @return string|null
     */
    public function getSygnatura(): ?string
    {
        return $this->sygnatura;
    }
    /**
     * Set sygnatura value
     * @param string $sygnatura
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaRejestrowanaType
     */
    public function setSygnatura(?string $sygnatura = null): self
    {
        $this->sygnatura = $sygnatura;
        
        return $this;
    }
    /**
     * Get terminSprawy value
     * @return string|null
     */
    public function getTerminSprawy(): ?string
    {
        return $this->terminSprawy;
    }
    /**
     * Set terminSprawy value
     * @param string $terminSprawy
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaRejestrowanaType
     */
    public function setTerminSprawy(?string $terminSprawy = null): self
    {
        $this->terminSprawy = $terminSprawy;
        
        return $this;
    }
    /**
     * Get rodzaj value
     * @return string|null
     */
    public function getRodzaj(): ?string
    {
        return $this->rodzaj;
    }
    /**
     * Set rodzaj value
     * @param string $rodzaj
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaRejestrowanaType
     */
    public function setRodzaj(?string $rodzaj = null): self
    {
        $this->rodzaj = $rodzaj;
        
        return $this;
    }
    /**
     * Get weryfikacjaPlatnosci value
     * @return bool|null
     */
    public function getWeryfikacjaPlatnosci(): ?bool
    {
        return $this->weryfikacjaPlatnosci;
    }
    /**
     * Set weryfikacjaPlatnosci value
     * @param bool $weryfikacjaPlatnosci
     * @return \App\ElektronicznyNadawca\StructType\PrzesylkaRejestrowanaType
     */
    public function setWeryfikacjaPlatnosci(?bool $weryfikacjaPlatnosci = null): self
    {
        $this->weryfikacjaPlatnosci = $weryfikacjaPlatnosci;
        
        return $this;
    }
}
