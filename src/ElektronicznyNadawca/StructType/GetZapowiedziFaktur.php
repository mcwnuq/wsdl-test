<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getZapowiedziFaktur StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetZapowiedziFaktur extends AbstractStructBase
{
    /**
     * The data
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public string $data;
    /**
     * Constructor method for getZapowiedziFaktur
     * @uses GetZapowiedziFaktur::setData()
     * @param string $data
     */
    public function __construct(string $data)
    {
        $this
            ->setData($data);
    }
    /**
     * Get data value
     * @return string
     */
    public function getData(): string
    {
        return $this->data;
    }
    /**
     * Set data value
     * @param string $data
     * @return \App\ElektronicznyNadawca\StructType\GetZapowiedziFaktur
     */
    public function setData(string $data): self
    {
        $this->data = $data;
        
        return $this;
    }
}
