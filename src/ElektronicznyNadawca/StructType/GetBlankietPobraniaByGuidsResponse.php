<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for getBlankietPobraniaByGuidsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetBlankietPobraniaByGuidsResponse
{
    /**
     * The content
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\AddressLabelContent[]
     */
    public ?array $content = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\ErrorType[]
     */
    public ?array $error = null;
    /**
     * Constructor method for getBlankietPobraniaByGuidsResponse
     * @uses GetBlankietPobraniaByGuidsResponse::setContent()
     * @uses GetBlankietPobraniaByGuidsResponse::setError()
     * @param \App\ElektronicznyNadawca\StructType\AddressLabelContent[] $content
     * @param \App\ElektronicznyNadawca\StructType\ErrorType[] $error
     */
    public function __construct(?array $content = null, ?array $error = null)
    {
        $this
            ->setContent($content)
            ->setError($error);
    }
    /**
     * Get content value
     * @return \App\ElektronicznyNadawca\StructType\AddressLabelContent[]
     */
    public function getContent(): ?array
    {
        return $this->content;
    }
    /**
     * Set content value
     * @param \App\ElektronicznyNadawca\StructType\AddressLabelContent[] $content
     * @return \App\ElektronicznyNadawca\StructType\GetBlankietPobraniaByGuidsResponse
     */
    public function setContent(?array $content = null): self
    {
        $this->content = $content;
        
        return $this;
    }
    /**
     * Add item to content value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\AddressLabelContent $item
     * @return \App\ElektronicznyNadawca\StructType\GetBlankietPobraniaByGuidsResponse
     */
    public function addToContent(\App\ElektronicznyNadawca\StructType\AddressLabelContent $item): self
    {
        $this->content[] = $item;
        
        return $this;
    }
    /**
     * Get error value
     * @return \App\ElektronicznyNadawca\StructType\ErrorType[]
     */
    public function getError(): ?array
    {
        return $this->error;
    }
    /**
     * Set error value
     * @param \App\ElektronicznyNadawca\StructType\ErrorType[] $error
     * @return \App\ElektronicznyNadawca\StructType\GetBlankietPobraniaByGuidsResponse
     */
    public function setError(?array $error = null): self
    {
        $this->error = $error;
        
        return $this;
    }
    /**
     * Add item to error value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\ErrorType $item
     * @return \App\ElektronicznyNadawca\StructType\GetBlankietPobraniaByGuidsResponse
     */
    public function addToError(\App\ElektronicznyNadawca\StructType\ErrorType $item): self
    {
        $this->error[] = $item;
        
        return $this;
    }
}
