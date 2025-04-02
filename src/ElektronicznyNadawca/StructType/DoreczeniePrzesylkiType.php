<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for doreczeniePrzesylkiType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DoreczeniePrzesylkiType extends AbstractStructBase
{
    /**
     * The data
     * @var string|null
     */
    public ?string $data = null;
    /**
     * The osobaOdbierajaca
     * @var string|null
     */
    public ?string $osobaOdbierajaca = null;
    /**
     * The podmiotDoreczenia
     * @var string|null
     */
    public ?string $podmiotDoreczenia = null;
    /**
     * The dataPelnomocnictwa
     * @var string|null
     */
    public ?string $dataPelnomocnictwa = null;
    /**
     * The numerPelnomocnictwa
     * @var string|null
     */
    public ?string $numerPelnomocnictwa = null;
    /**
     * The pieczecFirmowa
     * @var bool|null
     */
    public ?bool $pieczecFirmowa = null;
    /**
     * The miejscePozostawieniaZawiadomieniaODoreczeniu
     * @var string|null
     */
    public ?string $miejscePozostawieniaZawiadomieniaODoreczeniu = null;
    /**
     * Constructor method for doreczeniePrzesylkiType
     * @uses DoreczeniePrzesylkiType::setData()
     * @uses DoreczeniePrzesylkiType::setOsobaOdbierajaca()
     * @uses DoreczeniePrzesylkiType::setPodmiotDoreczenia()
     * @uses DoreczeniePrzesylkiType::setDataPelnomocnictwa()
     * @uses DoreczeniePrzesylkiType::setNumerPelnomocnictwa()
     * @uses DoreczeniePrzesylkiType::setPieczecFirmowa()
     * @uses DoreczeniePrzesylkiType::setMiejscePozostawieniaZawiadomieniaODoreczeniu()
     * @param string $data
     * @param string $osobaOdbierajaca
     * @param string $podmiotDoreczenia
     * @param string $dataPelnomocnictwa
     * @param string $numerPelnomocnictwa
     * @param bool $pieczecFirmowa
     * @param string $miejscePozostawieniaZawiadomieniaODoreczeniu
     */
    public function __construct(?string $data = null, ?string $osobaOdbierajaca = null, ?string $podmiotDoreczenia = null, ?string $dataPelnomocnictwa = null, ?string $numerPelnomocnictwa = null, ?bool $pieczecFirmowa = null, ?string $miejscePozostawieniaZawiadomieniaODoreczeniu = null)
    {
        $this
            ->setData($data)
            ->setOsobaOdbierajaca($osobaOdbierajaca)
            ->setPodmiotDoreczenia($podmiotDoreczenia)
            ->setDataPelnomocnictwa($dataPelnomocnictwa)
            ->setNumerPelnomocnictwa($numerPelnomocnictwa)
            ->setPieczecFirmowa($pieczecFirmowa)
            ->setMiejscePozostawieniaZawiadomieniaODoreczeniu($miejscePozostawieniaZawiadomieniaODoreczeniu);
    }
    /**
     * Get data value
     * @return string|null
     */
    public function getData(): ?string
    {
        return $this->data;
    }
    /**
     * Set data value
     * @param string $data
     * @return \App\ElektronicznyNadawca\StructType\DoreczeniePrzesylkiType
     */
    public function setData(?string $data = null): self
    {
        $this->data = $data;
        
        return $this;
    }
    /**
     * Get osobaOdbierajaca value
     * @return string|null
     */
    public function getOsobaOdbierajaca(): ?string
    {
        return $this->osobaOdbierajaca;
    }
    /**
     * Set osobaOdbierajaca value
     * @param string $osobaOdbierajaca
     * @return \App\ElektronicznyNadawca\StructType\DoreczeniePrzesylkiType
     */
    public function setOsobaOdbierajaca(?string $osobaOdbierajaca = null): self
    {
        $this->osobaOdbierajaca = $osobaOdbierajaca;
        
        return $this;
    }
    /**
     * Get podmiotDoreczenia value
     * @return string|null
     */
    public function getPodmiotDoreczenia(): ?string
    {
        return $this->podmiotDoreczenia;
    }
    /**
     * Set podmiotDoreczenia value
     * @param string $podmiotDoreczenia
     * @return \App\ElektronicznyNadawca\StructType\DoreczeniePrzesylkiType
     */
    public function setPodmiotDoreczenia(?string $podmiotDoreczenia = null): self
    {
        $this->podmiotDoreczenia = $podmiotDoreczenia;
        
        return $this;
    }
    /**
     * Get dataPelnomocnictwa value
     * @return string|null
     */
    public function getDataPelnomocnictwa(): ?string
    {
        return $this->dataPelnomocnictwa;
    }
    /**
     * Set dataPelnomocnictwa value
     * @param string $dataPelnomocnictwa
     * @return \App\ElektronicznyNadawca\StructType\DoreczeniePrzesylkiType
     */
    public function setDataPelnomocnictwa(?string $dataPelnomocnictwa = null): self
    {
        $this->dataPelnomocnictwa = $dataPelnomocnictwa;
        
        return $this;
    }
    /**
     * Get numerPelnomocnictwa value
     * @return string|null
     */
    public function getNumerPelnomocnictwa(): ?string
    {
        return $this->numerPelnomocnictwa;
    }
    /**
     * Set numerPelnomocnictwa value
     * @param string $numerPelnomocnictwa
     * @return \App\ElektronicznyNadawca\StructType\DoreczeniePrzesylkiType
     */
    public function setNumerPelnomocnictwa(?string $numerPelnomocnictwa = null): self
    {
        $this->numerPelnomocnictwa = $numerPelnomocnictwa;
        
        return $this;
    }
    /**
     * Get pieczecFirmowa value
     * @return bool|null
     */
    public function getPieczecFirmowa(): ?bool
    {
        return $this->pieczecFirmowa;
    }
    /**
     * Set pieczecFirmowa value
     * @param bool $pieczecFirmowa
     * @return \App\ElektronicznyNadawca\StructType\DoreczeniePrzesylkiType
     */
    public function setPieczecFirmowa(?bool $pieczecFirmowa = null): self
    {
        $this->pieczecFirmowa = $pieczecFirmowa;
        
        return $this;
    }
    /**
     * Get miejscePozostawieniaZawiadomieniaODoreczeniu value
     * @return string|null
     */
    public function getMiejscePozostawieniaZawiadomieniaODoreczeniu(): ?string
    {
        return $this->miejscePozostawieniaZawiadomieniaODoreczeniu;
    }
    /**
     * Set miejscePozostawieniaZawiadomieniaODoreczeniu value
     * @param string $miejscePozostawieniaZawiadomieniaODoreczeniu
     * @return \App\ElektronicznyNadawca\StructType\DoreczeniePrzesylkiType
     */
    public function setMiejscePozostawieniaZawiadomieniaODoreczeniu(?string $miejscePozostawieniaZawiadomieniaODoreczeniu = null): self
    {
        $this->miejscePozostawieniaZawiadomieniaODoreczeniu = $miejscePozostawieniaZawiadomieniaODoreczeniu;
        
        return $this;
    }
}
