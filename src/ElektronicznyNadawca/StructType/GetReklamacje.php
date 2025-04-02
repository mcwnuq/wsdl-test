<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getReklamacje StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetReklamacje extends AbstractStructBase
{
    /**
     * The dataRozpatrzenia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $dataRozpatrzenia = null;
    /**
     * The guidPrzesylki
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - maxOccurs: 1
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $guidPrzesylki = null;
    /**
     * The dataZlozenia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\DataZlozeniaType|null
     */
    public ?\App\ElektronicznyNadawca\StructType\DataZlozeniaType $dataZlozenia = null;
    /**
     * Constructor method for getReklamacje
     * @uses GetReklamacje::setDataRozpatrzenia()
     * @uses GetReklamacje::setGuidPrzesylki()
     * @uses GetReklamacje::setDataZlozenia()
     * @param string $dataRozpatrzenia
     * @param string $guidPrzesylki
     * @param \App\ElektronicznyNadawca\StructType\DataZlozeniaType $dataZlozenia
     */
    public function __construct(?string $dataRozpatrzenia = null, ?string $guidPrzesylki = null, ?\App\ElektronicznyNadawca\StructType\DataZlozeniaType $dataZlozenia = null)
    {
        $this
            ->setDataRozpatrzenia($dataRozpatrzenia)
            ->setGuidPrzesylki($guidPrzesylki)
            ->setDataZlozenia($dataZlozenia);
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
     * @return \App\ElektronicznyNadawca\StructType\GetReklamacje
     */
    public function setDataRozpatrzenia(?string $dataRozpatrzenia = null): self
    {
        $this->dataRozpatrzenia = $dataRozpatrzenia;
        
        return $this;
    }
    /**
     * Get guidPrzesylki value
     * @return string|null
     */
    public function getGuidPrzesylki(): ?string
    {
        return $this->guidPrzesylki;
    }
    /**
     * Set guidPrzesylki value
     * @param string $guidPrzesylki
     * @return \App\ElektronicznyNadawca\StructType\GetReklamacje
     */
    public function setGuidPrzesylki(?string $guidPrzesylki = null): self
    {
        $this->guidPrzesylki = $guidPrzesylki;
        
        return $this;
    }
    /**
     * Get dataZlozenia value
     * @return \App\ElektronicznyNadawca\StructType\DataZlozeniaType|null
     */
    public function getDataZlozenia(): ?\App\ElektronicznyNadawca\StructType\DataZlozeniaType
    {
        return $this->dataZlozenia;
    }
    /**
     * Set dataZlozenia value
     * @param \App\ElektronicznyNadawca\StructType\DataZlozeniaType $dataZlozenia
     * @return \App\ElektronicznyNadawca\StructType\GetReklamacje
     */
    public function setDataZlozenia(?\App\ElektronicznyNadawca\StructType\DataZlozeniaType $dataZlozenia = null): self
    {
        $this->dataZlozenia = $dataZlozenia;
        
        return $this;
    }
}
