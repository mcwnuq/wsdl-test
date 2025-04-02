<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for addRozbieznoscDoZapowiedziFaktur StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AddRozbieznoscDoZapowiedziFaktur extends AbstractStructBase
{
    /**
     * The rozbieznosciZipFile
     * Meta information extracted from the WSDL
     * - maxOccurs: 10
     * - minOccurs: 1
     * @var string[]
     */
    public array $rozbieznosciZipFile;
    /**
     * Constructor method for addRozbieznoscDoZapowiedziFaktur
     * @uses AddRozbieznoscDoZapowiedziFaktur::setRozbieznosciZipFile()
     * @param string[] $rozbieznosciZipFile
     */
    public function __construct(array $rozbieznosciZipFile)
    {
        $this
            ->setRozbieznosciZipFile($rozbieznosciZipFile);
    }
    /**
     * Get rozbieznosciZipFile value
     * @return string[]
     */
    public function getRozbieznosciZipFile(): array
    {
        return $this->rozbieznosciZipFile;
    }
    /**
     * Set rozbieznosciZipFile value
     * @param string[] $rozbieznosciZipFile
     * @return \App\ElektronicznyNadawca\StructType\AddRozbieznoscDoZapowiedziFaktur
     */
    public function setRozbieznosciZipFile(array $rozbieznosciZipFile): self
    {
        $this->rozbieznosciZipFile = $rozbieznosciZipFile;
        
        return $this;
    }
    /**
     * Add item to rozbieznosciZipFile value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \App\ElektronicznyNadawca\StructType\AddRozbieznoscDoZapowiedziFaktur
     */
    public function addToRozbieznosciZipFile(string $item): self
    {
        $this->rozbieznosciZipFile[] = $item;
        
        return $this;
    }
}
