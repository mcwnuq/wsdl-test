<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for uploadIWDContent StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UploadIWDContent
{
    /**
     * The IWDContent
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public string $IWDContent;
    /**
     * The urzadNadania
     * Meta information extracted from the WSDL
     * - base: xsd:int
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    public ?int $urzadNadania = null;
    /**
     * Constructor method for uploadIWDContent
     * @uses UploadIWDContent::setIWDContent()
     * @uses UploadIWDContent::setUrzadNadania()
     * @param string $iWDContent
     * @param int $urzadNadania
     */
    public function __construct(string $iWDContent, ?int $urzadNadania = null)
    {
        $this
            ->setIWDContent($iWDContent)
            ->setUrzadNadania($urzadNadania);
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
     * @return \App\ElektronicznyNadawca\StructType\UploadIWDContent
     */
    public function setIWDContent(string $iWDContent): self
    {
        $this->IWDContent = $iWDContent;
        
        return $this;
    }
    /**
     * Get urzadNadania value
     * @return int|null
     */
    public function getUrzadNadania(): ?int
    {
        return $this->urzadNadania;
    }
    /**
     * Set urzadNadania value
     * @param int $urzadNadania
     * @return \App\ElektronicznyNadawca\StructType\UploadIWDContent
     */
    public function setUrzadNadania(?int $urzadNadania = null): self
    {
        $this->urzadNadania = $urzadNadania;
        
        return $this;
    }
}
