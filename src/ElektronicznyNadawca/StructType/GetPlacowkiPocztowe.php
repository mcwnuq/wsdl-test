<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for getPlacowkiPocztowe StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetPlacowkiPocztowe
{
    /**
     * The idWojewodztwo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public string $idWojewodztwo;
    /**
     * Constructor method for getPlacowkiPocztowe
     * @uses GetPlacowkiPocztowe::setIdWojewodztwo()
     * @param string $idWojewodztwo
     */
    public function __construct(string $idWojewodztwo)
    {
        $this
            ->setIdWojewodztwo($idWojewodztwo);
    }
    /**
     * Get idWojewodztwo value
     * @return string
     */
    public function getIdWojewodztwo(): string
    {
        return $this->idWojewodztwo;
    }
    /**
     * Set idWojewodztwo value
     * @param string $idWojewodztwo
     * @return \App\ElektronicznyNadawca\StructType\GetPlacowkiPocztowe
     */
    public function setIdWojewodztwo(string $idWojewodztwo): self
    {
        $this->idWojewodztwo = $idWojewodztwo;
        
        return $this;
    }
}
