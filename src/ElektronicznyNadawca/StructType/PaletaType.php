<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for paletaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PaletaType
{
    /**
     * The rodzajPalety
     * @var string|null
     */
    public ?string $rodzajPalety = null;
    /**
     * The szerokosc
     * @var int|null
     */
    public ?int $szerokosc = null;
    /**
     * The dlugosc
     * @var string|null
     */
    public ?string $dlugosc = null;
    /**
     * The wysokosc
     * @var string|null
     */
    public ?string $wysokosc = null;
    /**
     * Constructor method for paletaType
     * @uses PaletaType::setRodzajPalety()
     * @uses PaletaType::setSzerokosc()
     * @uses PaletaType::setDlugosc()
     * @uses PaletaType::setWysokosc()
     * @param string $rodzajPalety
     * @param int $szerokosc
     * @param string $dlugosc
     * @param string $wysokosc
     */
    public function __construct(?string $rodzajPalety = null, ?int $szerokosc = null, ?string $dlugosc = null, ?string $wysokosc = null)
    {
        $this
            ->setRodzajPalety($rodzajPalety)
            ->setSzerokosc($szerokosc)
            ->setDlugosc($dlugosc)
            ->setWysokosc($wysokosc);
    }
    /**
     * Get rodzajPalety value
     * @return string|null
     */
    public function getRodzajPalety(): ?string
    {
        return $this->rodzajPalety;
    }
    /**
     * Set rodzajPalety value
     * @param string $rodzajPalety
     * @return \App\ElektronicznyNadawca\StructType\PaletaType
     */
    public function setRodzajPalety(?string $rodzajPalety = null): self
    {
        $this->rodzajPalety = $rodzajPalety;
        
        return $this;
    }
    /**
     * Get szerokosc value
     * @return int|null
     */
    public function getSzerokosc(): ?int
    {
        return $this->szerokosc;
    }
    /**
     * Set szerokosc value
     * @param int $szerokosc
     * @return \App\ElektronicznyNadawca\StructType\PaletaType
     */
    public function setSzerokosc(?int $szerokosc = null): self
    {
        $this->szerokosc = $szerokosc;
        
        return $this;
    }
    /**
     * Get dlugosc value
     * @return string|null
     */
    public function getDlugosc(): ?string
    {
        return $this->dlugosc;
    }
    /**
     * Set dlugosc value
     * @param string $dlugosc
     * @return \App\ElektronicznyNadawca\StructType\PaletaType
     */
    public function setDlugosc(?string $dlugosc = null): self
    {
        $this->dlugosc = $dlugosc;
        
        return $this;
    }
    /**
     * Get wysokosc value
     * @return string|null
     */
    public function getWysokosc(): ?string
    {
        return $this->wysokosc;
    }
    /**
     * Set wysokosc value
     * @param string $wysokosc
     * @return \App\ElektronicznyNadawca\StructType\PaletaType
     */
    public function setWysokosc(?string $wysokosc = null): self
    {
        $this->wysokosc = $wysokosc;
        
        return $this;
    }
}
