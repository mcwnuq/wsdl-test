<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for zwrotType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ZwrotType
{
    /**
     * The zwrotPoLiczbieDni
     * @var int|null
     */
    public ?int $zwrotPoLiczbieDni = null;
    /**
     * The traktowacJakPorzucona
     * @var bool|null
     */
    public ?bool $traktowacJakPorzucona = null;
    /**
     * The sposobZwrotu
     * @var string|null
     */
    public ?string $sposobZwrotu = null;
    /**
     * Constructor method for zwrotType
     * @uses ZwrotType::setZwrotPoLiczbieDni()
     * @uses ZwrotType::setTraktowacJakPorzucona()
     * @uses ZwrotType::setSposobZwrotu()
     * @param int $zwrotPoLiczbieDni
     * @param bool $traktowacJakPorzucona
     * @param string $sposobZwrotu
     */
    public function __construct(?int $zwrotPoLiczbieDni = null, ?bool $traktowacJakPorzucona = null, ?string $sposobZwrotu = null)
    {
        $this
            ->setZwrotPoLiczbieDni($zwrotPoLiczbieDni)
            ->setTraktowacJakPorzucona($traktowacJakPorzucona)
            ->setSposobZwrotu($sposobZwrotu);
    }
    /**
     * Get zwrotPoLiczbieDni value
     * @return int|null
     */
    public function getZwrotPoLiczbieDni(): ?int
    {
        return $this->zwrotPoLiczbieDni;
    }
    /**
     * Set zwrotPoLiczbieDni value
     * @param int $zwrotPoLiczbieDni
     * @return \App\ElektronicznyNadawca\StructType\ZwrotType
     */
    public function setZwrotPoLiczbieDni(?int $zwrotPoLiczbieDni = null): self
    {
        $this->zwrotPoLiczbieDni = $zwrotPoLiczbieDni;
        
        return $this;
    }
    /**
     * Get traktowacJakPorzucona value
     * @return bool|null
     */
    public function getTraktowacJakPorzucona(): ?bool
    {
        return $this->traktowacJakPorzucona;
    }
    /**
     * Set traktowacJakPorzucona value
     * @param bool $traktowacJakPorzucona
     * @return \App\ElektronicznyNadawca\StructType\ZwrotType
     */
    public function setTraktowacJakPorzucona(?bool $traktowacJakPorzucona = null): self
    {
        $this->traktowacJakPorzucona = $traktowacJakPorzucona;
        
        return $this;
    }
    /**
     * Get sposobZwrotu value
     * @return string|null
     */
    public function getSposobZwrotu(): ?string
    {
        return $this->sposobZwrotu;
    }
    /**
     * Set sposobZwrotu value
     * @param string $sposobZwrotu
     * @return \App\ElektronicznyNadawca\StructType\ZwrotType
     */
    public function setSposobZwrotu(?string $sposobZwrotu = null): self
    {
        $this->sposobZwrotu = $sposobZwrotu;
        
        return $this;
    }
}
