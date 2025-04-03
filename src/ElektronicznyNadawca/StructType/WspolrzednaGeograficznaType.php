<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for wspolrzednaGeograficznaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class WspolrzednaGeograficznaType
{
    /**
     * The dec
     * @var float|null
     */
    public ?float $dec = null;
    /**
     * The stopien
     * @var int|null
     */
    public ?int $stopien = null;
    /**
     * The minuta
     * @var int|null
     */
    public ?int $minuta = null;
    /**
     * The sekunda
     * @var float|null
     */
    public ?float $sekunda = null;
    /**
     * Constructor method for wspolrzednaGeograficznaType
     * @uses WspolrzednaGeograficznaType::setDec()
     * @uses WspolrzednaGeograficznaType::setStopien()
     * @uses WspolrzednaGeograficznaType::setMinuta()
     * @uses WspolrzednaGeograficznaType::setSekunda()
     * @param float $dec
     * @param int $stopien
     * @param int $minuta
     * @param float $sekunda
     */
    public function __construct(?float $dec = null, ?int $stopien = null, ?int $minuta = null, ?float $sekunda = null)
    {
        $this
            ->setDec($dec)
            ->setStopien($stopien)
            ->setMinuta($minuta)
            ->setSekunda($sekunda);
    }
    /**
     * Get dec value
     * @return float|null
     */
    public function getDec(): ?float
    {
        return $this->dec;
    }
    /**
     * Set dec value
     * @param float $dec
     * @return \App\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType
     */
    public function setDec(?float $dec = null): self
    {
        $this->dec = $dec;
        
        return $this;
    }
    /**
     * Get stopien value
     * @return int|null
     */
    public function getStopien(): ?int
    {
        return $this->stopien;
    }
    /**
     * Set stopien value
     * @param int $stopien
     * @return \App\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType
     */
    public function setStopien(?int $stopien = null): self
    {
        $this->stopien = $stopien;
        
        return $this;
    }
    /**
     * Get minuta value
     * @return int|null
     */
    public function getMinuta(): ?int
    {
        return $this->minuta;
    }
    /**
     * Set minuta value
     * @param int $minuta
     * @return \App\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType
     */
    public function setMinuta(?int $minuta = null): self
    {
        $this->minuta = $minuta;
        
        return $this;
    }
    /**
     * Get sekunda value
     * @return float|null
     */
    public function getSekunda(): ?float
    {
        return $this->sekunda;
    }
    /**
     * Set sekunda value
     * @param float $sekunda
     * @return \App\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType
     */
    public function setSekunda(?float $sekunda = null): self
    {
        $this->sekunda = $sekunda;
        
        return $this;
    }
}
