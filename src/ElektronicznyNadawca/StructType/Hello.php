<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for hello StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Hello
{
    /**
     * The in
     * @var string|null
     */
    public ?string $in = null;
    /**
     * Constructor method for hello
     * @uses Hello::setIn()
     * @param string $in
     */
    public function __construct(?string $in = null)
    {
        $this
            ->setIn($in);
    }
    /**
     * Get in value
     * @return string|null
     */
    public function getIn(): ?string
    {
        return $this->in;
    }
    /**
     * Set in value
     * @param string $in
     * @return \App\ElektronicznyNadawca\StructType\Hello
     */
    public function setIn(?string $in = null): self
    {
        $this->in = $in;
        
        return $this;
    }
}
