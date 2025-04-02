<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getPrintForParcelResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetPrintForParcelResponse extends AbstractStructBase
{
    /**
     * The printResult
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\PrintResultType[]
     */
    public ?array $printResult = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \App\ElektronicznyNadawca\StructType\ErrorType[]
     */
    public ?array $error = null;
    /**
     * Constructor method for getPrintForParcelResponse
     * @uses GetPrintForParcelResponse::setPrintResult()
     * @uses GetPrintForParcelResponse::setError()
     * @param \App\ElektronicznyNadawca\StructType\PrintResultType[] $printResult
     * @param \App\ElektronicznyNadawca\StructType\ErrorType[] $error
     */
    public function __construct(?array $printResult = null, ?array $error = null)
    {
        $this
            ->setPrintResult($printResult)
            ->setError($error);
    }
    /**
     * Get printResult value
     * @return \App\ElektronicznyNadawca\StructType\PrintResultType[]
     */
    public function getPrintResult(): ?array
    {
        return $this->printResult;
    }
    /**
     * Set printResult value
     * @param \App\ElektronicznyNadawca\StructType\PrintResultType[] $printResult
     * @return \App\ElektronicznyNadawca\StructType\GetPrintForParcelResponse
     */
    public function setPrintResult(?array $printResult = null): self
    {
        $this->printResult = $printResult;
        
        return $this;
    }
    /**
     * Add item to printResult value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\PrintResultType $item
     * @return \App\ElektronicznyNadawca\StructType\GetPrintForParcelResponse
     */
    public function addToPrintResult(\App\ElektronicznyNadawca\StructType\PrintResultType $item): self
    {
        $this->printResult[] = $item;
        
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
     * @return \App\ElektronicznyNadawca\StructType\GetPrintForParcelResponse
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
     * @return \App\ElektronicznyNadawca\StructType\GetPrintForParcelResponse
     */
    public function addToError(\App\ElektronicznyNadawca\StructType\ErrorType $item): self
    {
        $this->error[] = $item;
        
        return $this;
    }
}
