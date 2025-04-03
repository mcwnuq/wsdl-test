<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for downloadIWDContentResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DownloadIWDContentResponse
{
    /**
     * The IWDContent
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public string $IWDContent;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\ErrorType[]
     */
    public ?array $error = null;
    /**
     * Constructor method for downloadIWDContentResponse
     * @uses DownloadIWDContentResponse::setIWDContent()
     * @uses DownloadIWDContentResponse::setError()
     * @param string $iWDContent
     * @param \App\ElektronicznyNadawca\StructType\ErrorType[] $error
     */
    public function __construct(string $iWDContent, ?array $error = null)
    {
        $this
            ->setIWDContent($iWDContent)
            ->setError($error);
    }
    /**
     * Get IWDContent value
     * @return string
     */
    public function getIWDContent(): string
    {
        return $this->IWDContent;
    }
    /**
     * Set IWDContent value
     * @param string $iWDContent
     * @return \App\ElektronicznyNadawca\StructType\DownloadIWDContentResponse
     */
    public function setIWDContent(string $iWDContent): self
    {
        $this->IWDContent = $iWDContent;
        
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
     * @return \App\ElektronicznyNadawca\StructType\DownloadIWDContentResponse
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
     * @return \App\ElektronicznyNadawca\StructType\DownloadIWDContentResponse
     */
    public function addToError(\App\ElektronicznyNadawca\StructType\ErrorType $item): self
    {
        $this->error[] = $item;
        
        return $this;
    }
}
