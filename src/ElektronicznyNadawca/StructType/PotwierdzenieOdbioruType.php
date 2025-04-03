<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for potwierdzenieOdbioruType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PotwierdzenieOdbioruType
{
    /**
     * The ilosc
     * Meta information extracted from the WSDL
     * - base: xsd:int
     * - maxInclusive: 9
     * - minInclusive: 0
     * @var int|null
     */
    public ?int $ilosc = null;
    /**
     * The sposob
     * @var string|null
     */
    public ?string $sposob = null;
    /**
     * Constructor method for potwierdzenieOdbioruType
     * @uses PotwierdzenieOdbioruType::setIlosc()
     * @uses PotwierdzenieOdbioruType::setSposob()
     * @param int $ilosc
     * @param string $sposob
     */
    public function __construct(?int $ilosc = null, ?string $sposob = null)
    {
        $this
            ->setIlosc($ilosc)
            ->setSposob($sposob);
    }
    /**
     * Get ilosc value
     * @return int|null
     */
    public function getIlosc(): ?int
    {
        return $this->ilosc;
    }
    /**
     * Set ilosc value
     * @param int $ilosc
     * @return \App\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruType
     */
    public function setIlosc(?int $ilosc = null): self
    {
        $this->ilosc = $ilosc;
        
        return $this;
    }
    /**
     * Get sposob value
     * @return string|null
     */
    public function getSposob(): ?string
    {
        return $this->sposob;
    }
    /**
     * Set sposob value
     * @param string $sposob
     * @return \App\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruType
     */
    public function setSposob(?string $sposob = null): self
    {
        $this->sposob = $sposob;
        
        return $this;
    }
}
