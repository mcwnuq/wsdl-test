<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getPasswordExpiredDateResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetPasswordExpiredDateResponse extends AbstractStructBase
{
    /**
     * The dataWygasniecia
     * @var string|null
     */
    public ?string $dataWygasniecia = null;
    /**
     * Constructor method for getPasswordExpiredDateResponse
     * @uses GetPasswordExpiredDateResponse::setDataWygasniecia()
     * @param string $dataWygasniecia
     */
    public function __construct(?string $dataWygasniecia = null)
    {
        $this
            ->setDataWygasniecia($dataWygasniecia);
    }
    /**
     * Get dataWygasniecia value
     * @return string|null
     */
    public function getDataWygasniecia(): ?string
    {
        return $this->dataWygasniecia;
    }
    /**
     * Set dataWygasniecia value
     * @param string $dataWygasniecia
     * @return \App\ElektronicznyNadawca\StructType\GetPasswordExpiredDateResponse
     */
    public function setDataWygasniecia(?string $dataWygasniecia = null): self
    {
        $this->dataWygasniecia = $dataWygasniecia;
        
        return $this;
    }
}
