<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for powodSzczegolowyType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PowodSzczegolowyType
{
    /**
     * The idPowodSzczegolowy
     * @var int|null
     */
    public ?int $idPowodSzczegolowy = null;
    /**
     * The powodSzczegolowyOpis
     * @var string|null
     */
    public ?string $powodSzczegolowyOpis = null;
    /**
     * Constructor method for powodSzczegolowyType
     * @uses PowodSzczegolowyType::setIdPowodSzczegolowy()
     * @uses PowodSzczegolowyType::setPowodSzczegolowyOpis()
     * @param int $idPowodSzczegolowy
     * @param string $powodSzczegolowyOpis
     */
    public function __construct(?int $idPowodSzczegolowy = null, ?string $powodSzczegolowyOpis = null)
    {
        $this
            ->setIdPowodSzczegolowy($idPowodSzczegolowy)
            ->setPowodSzczegolowyOpis($powodSzczegolowyOpis);
    }
    /**
     * Get idPowodSzczegolowy value
     * @return int|null
     */
    public function getIdPowodSzczegolowy(): ?int
    {
        return $this->idPowodSzczegolowy;
    }
    /**
     * Set idPowodSzczegolowy value
     * @param int $idPowodSzczegolowy
     * @return \App\ElektronicznyNadawca\StructType\PowodSzczegolowyType
     */
    public function setIdPowodSzczegolowy(?int $idPowodSzczegolowy = null): self
    {
        $this->idPowodSzczegolowy = $idPowodSzczegolowy;
        
        return $this;
    }
    /**
     * Get powodSzczegolowyOpis value
     * @return string|null
     */
    public function getPowodSzczegolowyOpis(): ?string
    {
        return $this->powodSzczegolowyOpis;
    }
    /**
     * Set powodSzczegolowyOpis value
     * @param string $powodSzczegolowyOpis
     * @return \App\ElektronicznyNadawca\StructType\PowodSzczegolowyType
     */
    public function setPowodSzczegolowyOpis(?string $powodSzczegolowyOpis = null): self
    {
        $this->powodSzczegolowyOpis = $powodSzczegolowyOpis;
        
        return $this;
    }
}
