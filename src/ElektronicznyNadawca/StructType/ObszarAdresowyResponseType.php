<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for obszarAdresowyResponseType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ObszarAdresowyResponseType
{
    /**
     * The isObszarMiasto
     * @var bool|null
     */
    public ?bool $isObszarMiasto = null;
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
     * Constructor method for obszarAdresowyResponseType
     * @uses ObszarAdresowyResponseType::setIsObszarMiasto()
     * @uses ObszarAdresowyResponseType::setGuid()
     * @param bool $isObszarMiasto
     * @param string $guid
     */
    public function __construct(?bool $isObszarMiasto = null, ?string $guid = null)
    {
        $this
            ->setIsObszarMiasto($isObszarMiasto)
            ->setGuid($guid);
    }
    /**
     * Get isObszarMiasto value
     * @return bool|null
     */
    public function getIsObszarMiasto(): ?bool
    {
        return $this->isObszarMiasto;
    }
    /**
     * Set isObszarMiasto value
     * @param bool $isObszarMiasto
     * @return \App\ElektronicznyNadawca\StructType\ObszarAdresowyResponseType
     */
    public function setIsObszarMiasto(?bool $isObszarMiasto = null): self
    {
        $this->isObszarMiasto = $isObszarMiasto;
        
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
     * @return \App\ElektronicznyNadawca\StructType\ObszarAdresowyResponseType
     */
    public function setGuid(?string $guid = null): self
    {
        $this->guid = $guid;
        
        return $this;
    }
}
