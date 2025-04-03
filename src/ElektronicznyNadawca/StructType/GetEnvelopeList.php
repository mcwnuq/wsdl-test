<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for getEnvelopeList StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetEnvelopeList
{
    /**
     * The startDate
     * @var string|null
     */
    public ?string $startDate = null;
    /**
     * The endDate
     * @var string|null
     */
    public ?string $endDate = null;
    /**
     * Constructor method for getEnvelopeList
     * @uses GetEnvelopeList::setStartDate()
     * @uses GetEnvelopeList::setEndDate()
     * @param string $startDate
     * @param string $endDate
     */
    public function __construct(?string $startDate = null, ?string $endDate = null)
    {
        $this
            ->setStartDate($startDate)
            ->setEndDate($endDate);
    }
    /**
     * Get startDate value
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }
    /**
     * Set startDate value
     * @param string $startDate
     * @return \App\ElektronicznyNadawca\StructType\GetEnvelopeList
     */
    public function setStartDate(?string $startDate = null): self
    {
        $this->startDate = $startDate;
        
        return $this;
    }
    /**
     * Get endDate value
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }
    /**
     * Set endDate value
     * @param string $endDate
     * @return \App\ElektronicznyNadawca\StructType\GetEnvelopeList
     */
    public function setEndDate(?string $endDate = null): self
    {
        $this->endDate = $endDate;
        
        return $this;
    }
}
