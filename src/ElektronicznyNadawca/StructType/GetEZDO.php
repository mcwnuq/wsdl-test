<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for getEZDO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetEZDO
{
    /**
     * The idEZDOPakiet
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public int $idEZDOPakiet;
    /**
     * Constructor method for getEZDO
     * @uses GetEZDO::setIdEZDOPakiet()
     * @param int $idEZDOPakiet
     */
    public function __construct(int $idEZDOPakiet)
    {
        $this
            ->setIdEZDOPakiet($idEZDOPakiet);
    }
    /**
     * Get idEZDOPakiet value
     * @return int
     */
    public function getIdEZDOPakiet(): int
    {
        return $this->idEZDOPakiet;
    }
    /**
     * Set idEZDOPakiet value
     * @param int $idEZDOPakiet
     * @return \App\ElektronicznyNadawca\StructType\GetEZDO
     */
    public function setIdEZDOPakiet(int $idEZDOPakiet): self
    {
        $this->idEZDOPakiet = $idEZDOPakiet;
        
        return $this;
    }
}
