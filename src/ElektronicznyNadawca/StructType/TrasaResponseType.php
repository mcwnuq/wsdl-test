<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for trasaResponseType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TrasaResponseType
{
    /**
     * The isMiejscowa
     * @var bool|null
     */
    public ?bool $isMiejscowa = null;
    /**
     * The guid
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $guid = null;
    /**
     * Constructor method for trasaResponseType
     * @uses TrasaResponseType::setIsMiejscowa()
     * @uses TrasaResponseType::setGuid()
     * @param bool $isMiejscowa
     * @param string $guid
     */
    public function __construct(?bool $isMiejscowa = null, ?string $guid = null)
    {
        $this
            ->setIsMiejscowa($isMiejscowa)
            ->setGuid($guid);
    }
    /**
     * Get isMiejscowa value
     * @return bool|null
     */
    public function getIsMiejscowa(): ?bool
    {
        return $this->isMiejscowa;
    }
    /**
     * Set isMiejscowa value
     * @param bool $isMiejscowa
     * @return \App\ElektronicznyNadawca\StructType\TrasaResponseType
     */
    public function setIsMiejscowa(?bool $isMiejscowa = null): self
    {
        $this->isMiejscowa = $isMiejscowa;
        
        return $this;
    }
    /**
     * Get guid value
     * @return string|null
     */
    public function getGuid(): ?string
    {
        return $this->guid;
    }
    /**
     * Set guid value
     * @param string $guid
     * @return \App\ElektronicznyNadawca\StructType\TrasaResponseType
     */
    public function setGuid(?string $guid = null): self
    {
        $this->guid = $guid;
        
        return $this;
    }
}
