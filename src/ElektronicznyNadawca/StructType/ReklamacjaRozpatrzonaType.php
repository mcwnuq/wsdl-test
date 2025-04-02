<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for reklamacjaRozpatrzonaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReklamacjaRozpatrzonaType extends AbstractStructBase
{
    /**
     * The guid
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $guid = null;
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
     * The rozstrzygniecie
     * @var string|null
     */
    public ?string $rozstrzygniecie = null;
    /**
     * The przyznaneOdszkodowanie
     * @var int|null
     */
    public ?int $przyznaneOdszkodowanie = null;
    /**
     * The uzasadnienie
     * @var string|null
     */
    public ?string $uzasadnienie = null;
    /**
     * The dataRozpatrzenia
     * @var string|null
     */
    public ?string $dataRozpatrzenia = null;
    /**
     * The nazwaJednostkiRozpatrujacej
     * @var string|null
     */
    public ?string $nazwaJednostkiRozpatrujacej = null;
    /**
     * The osobaRozpatrujaca
     * @var string|null
     */
    public ?string $osobaRozpatrujaca = null;
    /**
     * The idReklamacja
     * @var string|null
     */
    public ?string $idReklamacja = null;
    /**
     * The numerReklamacji
     * @var string|null
     */
    public ?string $numerReklamacji = null;
    /**
     * Constructor method for reklamacjaRozpatrzonaType
     * @uses ReklamacjaRozpatrzonaType::setGuid()
     * @uses ReklamacjaRozpatrzonaType::setNumerNadania()
     * @uses ReklamacjaRozpatrzonaType::setRozstrzygniecie()
     * @uses ReklamacjaRozpatrzonaType::setPrzyznaneOdszkodowanie()
     * @uses ReklamacjaRozpatrzonaType::setUzasadnienie()
     * @uses ReklamacjaRozpatrzonaType::setDataRozpatrzenia()
     * @uses ReklamacjaRozpatrzonaType::setNazwaJednostkiRozpatrujacej()
     * @uses ReklamacjaRozpatrzonaType::setOsobaRozpatrujaca()
     * @uses ReklamacjaRozpatrzonaType::setIdReklamacja()
     * @uses ReklamacjaRozpatrzonaType::setNumerReklamacji()
     * @param string $guid
     * @param string $numerNadania
     * @param string $rozstrzygniecie
     * @param int $przyznaneOdszkodowanie
     * @param string $uzasadnienie
     * @param string $dataRozpatrzenia
     * @param string $nazwaJednostkiRozpatrujacej
     * @param string $osobaRozpatrujaca
     * @param string $idReklamacja
     * @param string $numerReklamacji
     */
    public function __construct(?string $guid = null, ?string $numerNadania = null, ?string $rozstrzygniecie = null, ?int $przyznaneOdszkodowanie = null, ?string $uzasadnienie = null, ?string $dataRozpatrzenia = null, ?string $nazwaJednostkiRozpatrujacej = null, ?string $osobaRozpatrujaca = null, ?string $idReklamacja = null, ?string $numerReklamacji = null)
    {
        $this
            ->setGuid($guid)
            ->setNumerNadania($numerNadania)
            ->setRozstrzygniecie($rozstrzygniecie)
            ->setPrzyznaneOdszkodowanie($przyznaneOdszkodowanie)
            ->setUzasadnienie($uzasadnienie)
            ->setDataRozpatrzenia($dataRozpatrzenia)
            ->setNazwaJednostkiRozpatrujacej($nazwaJednostkiRozpatrujacej)
            ->setOsobaRozpatrujaca($osobaRozpatrujaca)
            ->setIdReklamacja($idReklamacja)
            ->setNumerReklamacji($numerReklamacji);
    }
    /**
     * Get guid value
     * @return string|null
     */
    public function getGuid(): ?string
    {
        return $this->guid;
    }
    /**
     * Set guid value
     * @param string $guid
     * @return \App\ElektronicznyNadawca\StructType\ReklamacjaRozpatrzonaType
     */
    public function setGuid(?string $guid = null): self
    {
        $this->guid = $guid;
        
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
     * @return \App\ElektronicznyNadawca\StructType\ReklamacjaRozpatrzonaType
     */
    public function setNumerNadania(?string $numerNadania = null): self
    {
        $this->numerNadania = $numerNadania;
        
        return $this;
    }
    /**
     * Get rozstrzygniecie value
     * @return string|null
     */
    public function getRozstrzygniecie(): ?string
    {
        return $this->rozstrzygniecie;
    }
    /**
     * Set rozstrzygniecie value
     * @param string $rozstrzygniecie
     * @return \App\ElektronicznyNadawca\StructType\ReklamacjaRozpatrzonaType
     */
    public function setRozstrzygniecie(?string $rozstrzygniecie = null): self
    {
        $this->rozstrzygniecie = $rozstrzygniecie;
        
        return $this;
    }
    /**
     * Get przyznaneOdszkodowanie value
     * @return int|null
     */
    public function getPrzyznaneOdszkodowanie(): ?int
    {
        return $this->przyznaneOdszkodowanie;
    }
    /**
     * Set przyznaneOdszkodowanie value
     * @param int $przyznaneOdszkodowanie
     * @return \App\ElektronicznyNadawca\StructType\ReklamacjaRozpatrzonaType
     */
    public function setPrzyznaneOdszkodowanie(?int $przyznaneOdszkodowanie = null): self
    {
        $this->przyznaneOdszkodowanie = $przyznaneOdszkodowanie;
        
        return $this;
    }
    /**
     * Get uzasadnienie value
     * @return string|null
     */
    public function getUzasadnienie(): ?string
    {
        return $this->uzasadnienie;
    }
    /**
     * Set uzasadnienie value
     * @param string $uzasadnienie
     * @return \App\ElektronicznyNadawca\StructType\ReklamacjaRozpatrzonaType
     */
    public function setUzasadnienie(?string $uzasadnienie = null): self
    {
        $this->uzasadnienie = $uzasadnienie;
        
        return $this;
    }
    /**
     * Get dataRozpatrzenia value
     * @return string|null
     */
    public function getDataRozpatrzenia(): ?string
    {
        return $this->dataRozpatrzenia;
    }
    /**
     * Set dataRozpatrzenia value
     * @param string $dataRozpatrzenia
     * @return \App\ElektronicznyNadawca\StructType\ReklamacjaRozpatrzonaType
     */
    public function setDataRozpatrzenia(?string $dataRozpatrzenia = null): self
    {
        $this->dataRozpatrzenia = $dataRozpatrzenia;
        
        return $this;
    }
    /**
     * Get nazwaJednostkiRozpatrujacej value
     * @return string|null
     */
    public function getNazwaJednostkiRozpatrujacej(): ?string
    {
        return $this->nazwaJednostkiRozpatrujacej;
    }
    /**
     * Set nazwaJednostkiRozpatrujacej value
     * @param string $nazwaJednostkiRozpatrujacej
     * @return \App\ElektronicznyNadawca\StructType\ReklamacjaRozpatrzonaType
     */
    public function setNazwaJednostkiRozpatrujacej(?string $nazwaJednostkiRozpatrujacej = null): self
    {
        $this->nazwaJednostkiRozpatrujacej = $nazwaJednostkiRozpatrujacej;
        
        return $this;
    }
    /**
     * Get osobaRozpatrujaca value
     * @return string|null
     */
    public function getOsobaRozpatrujaca(): ?string
    {
        return $this->osobaRozpatrujaca;
    }
    /**
     * Set osobaRozpatrujaca value
     * @param string $osobaRozpatrujaca
     * @return \App\ElektronicznyNadawca\StructType\ReklamacjaRozpatrzonaType
     */
    public function setOsobaRozpatrujaca(?string $osobaRozpatrujaca = null): self
    {
        $this->osobaRozpatrujaca = $osobaRozpatrujaca;
        
        return $this;
    }
    /**
     * Get idReklamacja value
     * @return string|null
     */
    public function getIdReklamacja(): ?string
    {
        return $this->idReklamacja;
    }
    /**
     * Set idReklamacja value
     * @param string $idReklamacja
     * @return \App\ElektronicznyNadawca\StructType\ReklamacjaRozpatrzonaType
     */
    public function setIdReklamacja(?string $idReklamacja = null): self
    {
        $this->idReklamacja = $idReklamacja;
        
        return $this;
    }
    /**
     * Get numerReklamacji value
     * @return string|null
     */
    public function getNumerReklamacji(): ?string
    {
        return $this->numerReklamacji;
    }
    /**
     * Set numerReklamacji value
     * @param string $numerReklamacji
     * @return \App\ElektronicznyNadawca\StructType\ReklamacjaRozpatrzonaType
     */
    public function setNumerReklamacji(?string $numerReklamacji = null): self
    {
        $this->numerReklamacji = $numerReklamacji;
        
        return $this;
    }
}
