<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for updateParcelContent StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdateParcelContent
{
    /**
     * The parcelContent
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \App\ElektronicznyNadawca\StructType\ParcelContentType[]
     */
    public array $parcelContent;
    /**
     * Constructor method for updateParcelContent
     * @uses UpdateParcelContent::setParcelContent()
     * @param \App\ElektronicznyNadawca\StructType\ParcelContentType[] $parcelContent
     */
    public function __construct(array $parcelContent)
    {
        $this
            ->setParcelContent($parcelContent);
    }
    /**
     * Get parcelContent value
     * @return \App\ElektronicznyNadawca\StructType\ParcelContentType[]
     */
    public function getParcelContent(): array
    {
        return $this->parcelContent;
    }
    /**
     * Set parcelContent value
     * @param \App\ElektronicznyNadawca\StructType\ParcelContentType[] $parcelContent
     * @return \App\ElektronicznyNadawca\StructType\UpdateParcelContent
     */
    public function setParcelContent(array $parcelContent): self
    {
        $this->parcelContent = $parcelContent;
        
        return $this;
    }
    /**
     * Add item to parcelContent value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\ParcelContentType $item
     * @return \App\ElektronicznyNadawca\StructType\UpdateParcelContent
     */
    public function addToParcelContent(\App\ElektronicznyNadawca\StructType\ParcelContentType $item): self
    {
        $this->parcelContent[] = $item;
        
        return $this;
    }
}
