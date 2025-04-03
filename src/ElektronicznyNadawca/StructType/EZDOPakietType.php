<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for EZDOPakietType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class EZDOPakietType
{
    /**
     * The idEZDOPakiet
     * @var int|null
     */
    public ?int $idEZDOPakiet = null;
    /**
     * The exported
     * @var string|null
     */
    public ?string $exported = null;
    /**
     * The idEZDOFile
     * @var string|null
     */
    public ?string $idEZDOFile = null;
    /**
     * Constructor method for EZDOPakietType
     * @uses EZDOPakietType::setIdEZDOPakiet()
     * @uses EZDOPakietType::setExported()
     * @uses EZDOPakietType::setIdEZDOFile()
     * @param int $idEZDOPakiet
     * @param string $exported
     * @param string $idEZDOFile
     */
    public function __construct(?int $idEZDOPakiet = null, ?string $exported = null, ?string $idEZDOFile = null)
    {
        $this
            ->setIdEZDOPakiet($idEZDOPakiet)
            ->setExported($exported)
            ->setIdEZDOFile($idEZDOFile);
    }
    /**
     * Get idEZDOPakiet value
     * @return int|null
     */
    public function getIdEZDOPakiet(): ?int
    {
        return $this->idEZDOPakiet;
    }
    /**
     * Set idEZDOPakiet value
     * @param int $idEZDOPakiet
     * @return \App\ElektronicznyNadawca\StructType\EZDOPakietType
     */
    public function setIdEZDOPakiet(?int $idEZDOPakiet = null): self
    {
        $this->idEZDOPakiet = $idEZDOPakiet;
        
        return $this;
    }
    /**
     * Get exported value
     * @return string|null
     */
    public function getExported(): ?string
    {
        return $this->exported;
    }
    /**
     * Set exported value
     * @param string $exported
     * @return \App\ElektronicznyNadawca\StructType\EZDOPakietType
     */
    public function setExported(?string $exported = null): self
    {
        $this->exported = $exported;
        
        return $this;
    }
    /**
     * Get idEZDOFile value
     * @return string|null
     */
    public function getIdEZDOFile(): ?string
    {
        return $this->idEZDOFile;
    }
    /**
     * Set idEZDOFile value
     * @param string $idEZDOFile
     * @return \App\ElektronicznyNadawca\StructType\EZDOPakietType
     */
    public function setIdEZDOFile(?string $idEZDOFile = null): self
    {
        $this->idEZDOFile = $idEZDOFile;
        
        return $this;
    }
}
