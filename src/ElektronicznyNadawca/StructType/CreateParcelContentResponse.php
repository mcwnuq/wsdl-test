<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createParcelContentResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateParcelContentResponse extends AbstractStructBase
{
    /**
     * The parcelContent
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\ParcelContentType[]
     */
    public ?array $parcelContent = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\ErrorType[]
     */
    public ?array $error = null;
    /**
     * Constructor method for createParcelContentResponse
     * @uses CreateParcelContentResponse::setParcelContent()
     * @uses CreateParcelContentResponse::setError()
     * @param \App\ElektronicznyNadawca\StructType\ParcelContentType[] $parcelContent
     * @param \App\ElektronicznyNadawca\StructType\ErrorType[] $error
     */
    public function __construct(?array $parcelContent = null, ?array $error = null)
    {
        $this
            ->setParcelContent($parcelContent)
            ->setError($error);
    }
    /**
     * Get parcelContent value
     * @return \App\ElektronicznyNadawca\StructType\ParcelContentType[]
     */
    public function getParcelContent(): ?array
    {
        return $this->parcelContent;
    }
    /**
     * Set parcelContent value
     * @param \App\ElektronicznyNadawca\StructType\ParcelContentType[] $parcelContent
     * @return \App\ElektronicznyNadawca\StructType\CreateParcelContentResponse
     */
    public function setParcelContent(?array $parcelContent = null): self
    {
        $this->parcelContent = $parcelContent;
        
        return $this;
    }
    /**
     * Add item to parcelContent value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\ParcelContentType $item
     * @return \App\ElektronicznyNadawca\StructType\CreateParcelContentResponse
     */
    public function addToParcelContent(\App\ElektronicznyNadawca\StructType\ParcelContentType $item): self
    {
        $this->parcelContent[] = $item;
        
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
     * @return \App\ElektronicznyNadawca\StructType\CreateParcelContentResponse
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
     * @return \App\ElektronicznyNadawca\StructType\CreateParcelContentResponse
     */
    public function addToError(\App\ElektronicznyNadawca\StructType\ErrorType $item): self
    {
        $this->error[] = $item;
        
        return $this;
    }
}
