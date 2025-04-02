<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rodzajListType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RodzajListType extends AbstractStructBase
{
    /**
     * The polecony
     * @var bool|null
     */
    public ?bool $polecony = null;
    /**
     * The kategoria
     * @var string|null
     */
    public ?string $kategoria = null;
    /**
     * Constructor method for rodzajListType
     * @uses RodzajListType::setPolecony()
     * @uses RodzajListType::setKategoria()
     * @param bool $polecony
     * @param string $kategoria
     */
    public function __construct(?bool $polecony = null, ?string $kategoria = null)
    {
        $this
            ->setPolecony($polecony)
            ->setKategoria($kategoria);
    }
    /**
     * Get polecony value
     * @return bool|null
     */
    public function getPolecony(): ?bool
    {
        return $this->polecony;
    }
    /**
     * Set polecony value
     * @param bool $polecony
     * @return \App\ElektronicznyNadawca\StructType\RodzajListType
     */
    public function setPolecony(?bool $polecony = null): self
    {
        $this->polecony = $polecony;
        
        return $this;
    }
    /**
     * Get kategoria value
     * @return string|null
     */
    public function getKategoria(): ?string
    {
        return $this->kategoria;
    }
    /**
     * Set kategoria value
     * @param string $kategoria
     * @return \App\ElektronicznyNadawca\StructType\RodzajListType
     */
    public function setKategoria(?string $kategoria = null): self
    {
        $this->kategoria = $kategoria;
        
        return $this;
    }
}
