<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for uslugiType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UslugiType extends AbstractStructBase
{
    /**
     * The id
     * @var string|null
     */
    public ?string $id = null;
    /**
     * The opis
     * @var string|null
     */
    public ?string $opis = null;
    /**
     * Constructor method for uslugiType
     * @uses UslugiType::setId()
     * @uses UslugiType::setOpis()
     * @param string $id
     * @param string $opis
     */
    public function __construct(?string $id = null, ?string $opis = null)
    {
        $this
            ->setId($id)
            ->setOpis($opis);
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \App\ElektronicznyNadawca\StructType\UslugiType
     */
    public function setId(?string $id = null): self
    {
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get opis value
     * @return string|null
     */
    public function getOpis(): ?string
    {
        return $this->opis;
    }
    /**
     * Set opis value
     * @param string $opis
     * @return \App\ElektronicznyNadawca\StructType\UslugiType
     */
    public function setOpis(?string $opis = null): self
    {
        $this->opis = $opis;
        
        return $this;
    }
}
