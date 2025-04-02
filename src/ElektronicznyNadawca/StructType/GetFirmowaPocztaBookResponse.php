<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getFirmowaPocztaBookResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetFirmowaPocztaBookResponse extends AbstractStructBase
{
    /**
     * The pdfContent
     * @var string|null
     */
    public ?string $pdfContent = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\ErrorType[]
     */
    public ?array $error = null;
    /**
     * Constructor method for getFirmowaPocztaBookResponse
     * @uses GetFirmowaPocztaBookResponse::setPdfContent()
     * @uses GetFirmowaPocztaBookResponse::setError()
     * @param string $pdfContent
     * @param \App\ElektronicznyNadawca\StructType\ErrorType[] $error
     */
    public function __construct(?string $pdfContent = null, ?array $error = null)
    {
        $this
            ->setPdfContent($pdfContent)
            ->setError($error);
    }
    /**
     * Get pdfContent value
     * @return string|null
     */
    public function getPdfContent(): ?string
    {
        return $this->pdfContent;
    }
    /**
     * Set pdfContent value
     * @param string $pdfContent
     * @return \App\ElektronicznyNadawca\StructType\GetFirmowaPocztaBookResponse
     */
    public function setPdfContent(?string $pdfContent = null): self
    {
        $this->pdfContent = $pdfContent;
        
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
     * @return \App\ElektronicznyNadawca\StructType\GetFirmowaPocztaBookResponse
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
     * @return \App\ElektronicznyNadawca\StructType\GetFirmowaPocztaBookResponse
     */
    public function addToError(\App\ElektronicznyNadawca\StructType\ErrorType $item): self
    {
        $this->error[] = $item;
        
        return $this;
    }
}
