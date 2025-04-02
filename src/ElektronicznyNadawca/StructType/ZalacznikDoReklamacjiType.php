<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for zalacznikDoReklamacjiType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ZalacznikDoReklamacjiType extends AbstractStructBase
{
    /**
     * The fileContent
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public string $fileContent;
    /**
     * The fileName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public string $fileName;
    /**
     * The fileDesc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $fileDesc = null;
    /**
     * Constructor method for zalacznikDoReklamacjiType
     * @uses ZalacznikDoReklamacjiType::setFileContent()
     * @uses ZalacznikDoReklamacjiType::setFileName()
     * @uses ZalacznikDoReklamacjiType::setFileDesc()
     * @param string $fileContent
     * @param string $fileName
     * @param string $fileDesc
     */
    public function __construct(string $fileContent, string $fileName, ?string $fileDesc = null)
    {
        $this
            ->setFileContent($fileContent)
            ->setFileName($fileName)
            ->setFileDesc($fileDesc);
    }
    /**
     * Get fileContent value
     * @return string
     */
    public function getFileContent(): string
    {
        return $this->fileContent;
    }
    /**
     * Set fileContent value
     * @param string $fileContent
     * @return \App\ElektronicznyNadawca\StructType\ZalacznikDoReklamacjiType
     */
    public function setFileContent(string $fileContent): self
    {
        $this->fileContent = $fileContent;
        
        return $this;
    }
    /**
     * Get fileName value
     * @return string
     */
    public function getFileName(): string
    {
        return $this->fileName;
    }
    /**
     * Set fileName value
     * @param string $fileName
     * @return \App\ElektronicznyNadawca\StructType\ZalacznikDoReklamacjiType
     */
    public function setFileName(string $fileName): self
    {
        $this->fileName = $fileName;
        
        return $this;
    }
    /**
     * Get fileDesc value
     * @return string|null
     */
    public function getFileDesc(): ?string
    {
        return $this->fileDesc;
    }
    /**
     * Set fileDesc value
     * @param string $fileDesc
     * @return \App\ElektronicznyNadawca\StructType\ZalacznikDoReklamacjiType
     */
    public function setFileDesc(?string $fileDesc = null): self
    {
        $this->fileDesc = $fileDesc;
        
        return $this;
    }
}
