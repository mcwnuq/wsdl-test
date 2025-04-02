<?php

namespace App\ElektronicznyNadawca;

class EPOExtendedType extends EPOType
{

    /**
     * @var zasadySpecjalneEnum $zasadySpecjalne
     */
    protected $zasadySpecjalne = null;

    /**
     * @param zasadySpecjalneEnum $zasadySpecjalne
     */
    public function __construct($zasadySpecjalne)
    {
      $this->zasadySpecjalne = $zasadySpecjalne;
    }

    /**
     * @return zasadySpecjalneEnum
     */
    public function getZasadySpecjalne()
    {
      return $this->zasadySpecjalne;
    }

    /**
     * @param zasadySpecjalneEnum $zasadySpecjalne
     * @return \App\ElektronicznyNadawca\EPOExtendedType
     */
    public function setZasadySpecjalne($zasadySpecjalne)
    {
      $this->zasadySpecjalne = $zasadySpecjalne;
      return $this;
    }

}
