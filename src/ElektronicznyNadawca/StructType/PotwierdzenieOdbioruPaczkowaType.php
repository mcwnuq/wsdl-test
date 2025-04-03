<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for potwierdzenieOdbioruPaczkowaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PotwierdzenieOdbioruPaczkowaType
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
     * Constructor method for potwierdzenieOdbioruPaczkowaType
     * @uses PotwierdzenieOdbioruPaczkowaType::setIlosc()
     * @uses PotwierdzenieOdbioruPaczkowaType::setSposob()
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
     * @return \App\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruPaczkowaType
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
     * @return \App\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruPaczkowaType
     */
    public function setSposob(?string $sposob = null): self
    {
        $this->sposob = $sposob;
        
        return $this;
    }
}
