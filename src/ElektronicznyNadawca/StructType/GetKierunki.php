<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for getKierunki StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetKierunki
{
    /**
     * The plan
     * @var string|null
     */
    public ?string $plan = null;
    /**
     * The prefixKodPocztowy
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 2
     * @var string|null
     */
    public ?string $prefixKodPocztowy = null;
    /**
     * Constructor method for getKierunki
     * @uses GetKierunki::setPlan()
     * @uses GetKierunki::setPrefixKodPocztowy()
     * @param string $plan
     * @param string $prefixKodPocztowy
     */
    public function __construct(?string $plan = null, ?string $prefixKodPocztowy = null)
    {
        $this
            ->setPlan($plan)
            ->setPrefixKodPocztowy($prefixKodPocztowy);
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
     * @return \App\ElektronicznyNadawca\StructType\GetKierunki
     */
    public function setPlan(?string $plan = null): self
    {
        $this->plan = $plan;
        
        return $this;
    }
    /**
     * Get prefixKodPocztowy value
     * @return string|null
     */
    public function getPrefixKodPocztowy(): ?string
    {
        return $this->prefixKodPocztowy;
    }
    /**
     * Set prefixKodPocztowy value
     * @param string $prefixKodPocztowy
     * @return \App\ElektronicznyNadawca\StructType\GetKierunki
     */
    public function setPrefixKodPocztowy(?string $prefixKodPocztowy = null): self
    {
        $this->prefixKodPocztowy = $prefixKodPocztowy;
        
        return $this;
    }
}
