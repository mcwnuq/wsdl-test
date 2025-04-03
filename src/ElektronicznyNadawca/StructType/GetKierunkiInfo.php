<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for getKierunkiInfo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetKierunkiInfo
{
    /**
     * The plan
     * @var string|null
     */
    public ?string $plan = null;
    /**
     * Constructor method for getKierunkiInfo
     * @uses GetKierunkiInfo::setPlan()
     * @param string $plan
     */
    public function __construct(?string $plan = null)
    {
        $this
            ->setPlan($plan);
    }
    /**
     * Get plan value
     * @return string|null
     */
    public function getPlan(): ?string
    {
        return $this->plan;
    }
    /**
     * Set plan value
     * @param string $plan
     * @return \App\ElektronicznyNadawca\StructType\GetKierunkiInfo
     */
    public function setPlan(?string $plan = null): self
    {
        $this->plan = $plan;
        
        return $this;
    }
}
