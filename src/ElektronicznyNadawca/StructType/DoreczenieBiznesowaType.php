<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for doreczenieBiznesowaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DoreczenieBiznesowaType
{
    /**
     * The doRakWlasnych
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    public ?bool $doRakWlasnych = null;
    /**
     * Constructor method for doreczenieBiznesowaType
     * @uses DoreczenieBiznesowaType::setDoRakWlasnych()
     * @param bool $doRakWlasnych
     */
    public function __construct(?bool $doRakWlasnych = null)
    {
        $this
            ->setDoRakWlasnych($doRakWlasnych);
    }
    /**
     * Get doRakWlasnych value
     * @return bool|null
     */
    public function getDoRakWlasnych(): ?bool
    {
        return $this->doRakWlasnych;
    }
    /**
     * Set doRakWlasnych value
     * @param bool $doRakWlasnych
     * @return \App\ElektronicznyNadawca\StructType\DoreczenieBiznesowaType
     */
    public function setDoRakWlasnych(?bool $doRakWlasnych = null): self
    {
        $this->doRakWlasnych = $doRakWlasnych;
        
        return $this;
    }
}
