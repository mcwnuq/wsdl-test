<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for potwierdzenieDoreczeniaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PotwierdzenieDoreczeniaType extends AbstractStructBase
{
    /**
     * The sposob
     * @var string|null
     */
    public ?string $sposob = null;
    /**
     * The kontakt
     * @var string|null
     */
    public ?string $kontakt = null;
    /**
     * Constructor method for potwierdzenieDoreczeniaType
     * @uses PotwierdzenieDoreczeniaType::setSposob()
     * @uses PotwierdzenieDoreczeniaType::setKontakt()
     * @param string $sposob
     * @param string $kontakt
     */
    public function __construct(?string $sposob = null, ?string $kontakt = null)
    {
        $this
            ->setSposob($sposob)
            ->setKontakt($kontakt);
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
     * @return \App\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType
     */
    public function setSposob(?string $sposob = null): self
    {
        $this->sposob = $sposob;
        
        return $this;
    }
    /**
     * Get kontakt value
     * @return string|null
     */
    public function getKontakt(): ?string
    {
        return $this->kontakt;
    }
    /**
     * Set kontakt value
     * @param string $kontakt
     * @return \App\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType
     */
    public function setKontakt(?string $kontakt = null): self
    {
        $this->kontakt = $kontakt;
        
        return $this;
    }
}
