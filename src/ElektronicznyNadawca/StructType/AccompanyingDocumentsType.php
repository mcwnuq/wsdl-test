<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for AccompanyingDocumentsType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AccompanyingDocumentsType
{
    /**
     * The type
     * @var string|null
     */
    public ?string $type = null;
    /**
     * The number
     * @var string|null
     */
    public ?string $number = null;
    /**
     * Constructor method for AccompanyingDocumentsType
     * @uses AccompanyingDocumentsType::setType()
     * @uses AccompanyingDocumentsType::setNumber()
     * @param string $type
     * @param string $number
     */
    public function __construct(?string $type = null, ?string $number = null)
    {
        $this
            ->setType($type)
            ->setNumber($number);
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \App\ElektronicznyNadawca\StructType\AccompanyingDocumentsType
     */
    public function setType(?string $type = null): self
    {
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get number value
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }
    /**
     * Set number value
     * @param string $number
     * @return \App\ElektronicznyNadawca\StructType\AccompanyingDocumentsType
     */
    public function setNumber(?string $number = null): self
    {
        $this->number = $number;
        
        return $this;
    }
}
