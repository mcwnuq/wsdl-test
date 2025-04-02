<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getZapowiedziFakturResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetZapowiedziFakturResponse extends AbstractStructBase
{
    /**
     * The zapowiedzFakturyZipFile
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public ?array $zapowiedzFakturyZipFile = null;
    /**
     * Constructor method for getZapowiedziFakturResponse
     * @uses GetZapowiedziFakturResponse::setZapowiedzFakturyZipFile()
     * @param string[] $zapowiedzFakturyZipFile
     */
    public function __construct(?array $zapowiedzFakturyZipFile = null)
    {
        $this
            ->setZapowiedzFakturyZipFile($zapowiedzFakturyZipFile);
    }
    /**
     * Get zapowiedzFakturyZipFile value
     * @return string[]
     */
    public function getZapowiedzFakturyZipFile(): ?array
    {
        return $this->zapowiedzFakturyZipFile;
    }
    /**
     * Set zapowiedzFakturyZipFile value
     * @param string[] $zapowiedzFakturyZipFile
     * @return \App\ElektronicznyNadawca\StructType\GetZapowiedziFakturResponse
     */
    public function setZapowiedzFakturyZipFile(?array $zapowiedzFakturyZipFile = null): self
    {
        $this->zapowiedzFakturyZipFile = $zapowiedzFakturyZipFile;
        
        return $this;
    }
    /**
     * Add item to zapowiedzFakturyZipFile value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \App\ElektronicznyNadawca\StructType\GetZapowiedziFakturResponse
     */
    public function addToZapowiedzFakturyZipFile(string $item): self
    {
        $this->zapowiedzFakturyZipFile[] = $item;
        
        return $this;
    }
}
