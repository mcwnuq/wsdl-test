<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for helloResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class HelloResponse extends AbstractStructBase
{
    /**
     * The out
     * @var string|null
     */
    public ?string $out = null;
    /**
     * Constructor method for helloResponse
     * @uses HelloResponse::setOut()
     * @param string $out
     */
    public function __construct(?string $out = null)
    {
        $this
            ->setOut($out);
    }
    /**
     * Get out value
     * @return string|null
     */
    public function getOut(): ?string
    {
        return $this->out;
    }
    /**
     * Set out value
     * @param string $out
     * @return \App\ElektronicznyNadawca\StructType\HelloResponse
     */
    public function setOut(?string $out = null): self
    {
        $this->out = $out;
        
        return $this;
    }
}
