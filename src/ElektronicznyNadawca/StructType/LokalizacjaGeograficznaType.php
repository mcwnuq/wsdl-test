<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for lokalizacjaGeograficznaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class LokalizacjaGeograficznaType
{
    /**
     * The dlugosc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \App\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType
     */
    public \App\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType $dlugosc;
    /**
     * The szerokosc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \App\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType
     */
    public \App\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType $szerokosc;
    /**
     * Constructor method for lokalizacjaGeograficznaType
     * @uses LokalizacjaGeograficznaType::setDlugosc()
     * @uses LokalizacjaGeograficznaType::setSzerokosc()
     * @param \App\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType $dlugosc
     * @param \App\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType $szerokosc
     */
    public function __construct(\App\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType $dlugosc, \App\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType $szerokosc)
    {
        $this
            ->setDlugosc($dlugosc)
            ->setSzerokosc($szerokosc);
    }
    /**
     * Get dlugosc value
     * @return \App\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType
     */
    public function getDlugosc(): \App\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType
    {
        return $this->dlugosc;
    }
    /**
     * Set dlugosc value
     * @param \App\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType $dlugosc
     * @return \App\ElektronicznyNadawca\StructType\LokalizacjaGeograficznaType
     */
    public function setDlugosc(\App\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType $dlugosc): self
    {
        $this->dlugosc = $dlugosc;
        
        return $this;
    }
    /**
     * Get szerokosc value
     * @return \App\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType
     */
    public function getSzerokosc(): \App\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType
    {
        return $this->szerokosc;
    }
    /**
     * Set szerokosc value
     * @param \App\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType $szerokosc
     * @return \App\ElektronicznyNadawca\StructType\LokalizacjaGeograficznaType
     */
    public function setSzerokosc(\App\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType $szerokosc): self
    {
        $this->szerokosc = $szerokosc;
        
        return $this;
    }
}
