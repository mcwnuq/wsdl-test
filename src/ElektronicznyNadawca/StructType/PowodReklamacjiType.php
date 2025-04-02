<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for powodReklamacjiType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PowodReklamacjiType extends AbstractStructBase
{
    /**
     * The powodSzczegolowy
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \App\ElektronicznyNadawca\StructType\PowodSzczegolowyType[]
     */
    public array $powodSzczegolowy;
    /**
     * The idPowodGlowny
     * @var int|null
     */
    public ?int $idPowodGlowny = null;
    /**
     * The powodGlownyOpis
     * @var string|null
     */
    public ?string $powodGlownyOpis = null;
    /**
     * Constructor method for powodReklamacjiType
     * @uses PowodReklamacjiType::setPowodSzczegolowy()
     * @uses PowodReklamacjiType::setIdPowodGlowny()
     * @uses PowodReklamacjiType::setPowodGlownyOpis()
     * @param \App\ElektronicznyNadawca\StructType\PowodSzczegolowyType[] $powodSzczegolowy
     * @param int $idPowodGlowny
     * @param string $powodGlownyOpis
     */
    public function __construct(array $powodSzczegolowy, ?int $idPowodGlowny = null, ?string $powodGlownyOpis = null)
    {
        $this
            ->setPowodSzczegolowy($powodSzczegolowy)
            ->setIdPowodGlowny($idPowodGlowny)
            ->setPowodGlownyOpis($powodGlownyOpis);
    }
    /**
     * Get powodSzczegolowy value
     * @return \App\ElektronicznyNadawca\StructType\PowodSzczegolowyType[]
     */
    public function getPowodSzczegolowy(): array
    {
        return $this->powodSzczegolowy;
    }
    /**
     * Set powodSzczegolowy value
     * @param \App\ElektronicznyNadawca\StructType\PowodSzczegolowyType[] $powodSzczegolowy
     * @return \App\ElektronicznyNadawca\StructType\PowodReklamacjiType
     */
    public function setPowodSzczegolowy(array $powodSzczegolowy): self
    {
        $this->powodSzczegolowy = $powodSzczegolowy;
        
        return $this;
    }
    /**
     * Add item to powodSzczegolowy value
     * @throws InvalidArgumentException
     * @param \App\ElektronicznyNadawca\StructType\PowodSzczegolowyType $item
     * @return \App\ElektronicznyNadawca\StructType\PowodReklamacjiType
     */
    public function addToPowodSzczegolowy(\App\ElektronicznyNadawca\StructType\PowodSzczegolowyType $item): self
    {
        $this->powodSzczegolowy[] = $item;
        
        return $this;
    }
    /**
     * Get idPowodGlowny value
     * @return int|null
     */
    public function getIdPowodGlowny(): ?int
    {
        return $this->idPowodGlowny;
    }
    /**
     * Set idPowodGlowny value
     * @param int $idPowodGlowny
     * @return \App\ElektronicznyNadawca\StructType\PowodReklamacjiType
     */
    public function setIdPowodGlowny(?int $idPowodGlowny = null): self
    {
        $this->idPowodGlowny = $idPowodGlowny;
        
        return $this;
    }
    /**
     * Get powodGlownyOpis value
     * @return string|null
     */
    public function getPowodGlownyOpis(): ?string
    {
        return $this->powodGlownyOpis;
    }
    /**
     * Set powodGlownyOpis value
     * @param string $powodGlownyOpis
     * @return \App\ElektronicznyNadawca\StructType\PowodReklamacjiType
     */
    public function setPowodGlownyOpis(?string $powodGlownyOpis = null): self
    {
        $this->powodGlownyOpis = $powodGlownyOpis;
        
        return $this;
    }
}
