<?php

namespace App\ElektronicznyNadawca;

class parcelContentType
{

    /**
     * @var int $IdParcelContent
     */
    protected $IdParcelContent = null;

    /**
     * @var int $order
     */
    protected $order = null;

    /**
     * @var nameParcelContentType $name
     */
    protected $name = null;

    /**
     * @var descriptionParcelContentType $description
     */
    protected $description = null;

    /**
     * @var int $idKarta
     */
    protected $idKarta = null;

    /**
     * @var guidType $guid
     */
    protected $guid = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getIdParcelContent()
    {
      return $this->IdParcelContent;
    }

    /**
     * @param int $IdParcelContent
     * @return \App\ElektronicznyNadawca\parcelContentType
     */
    public function setIdParcelContent($IdParcelContent)
    {
      $this->IdParcelContent = $IdParcelContent;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrder()
    {
      return $this->order;
    }

    /**
     * @param int $order
     * @return \App\ElektronicznyNadawca\parcelContentType
     */
    public function setOrder($order)
    {
      $this->order = $order;
      return $this;
    }

    /**
     * @return nameParcelContentType
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param nameParcelContentType $name
     * @return \App\ElektronicznyNadawca\parcelContentType
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return descriptionParcelContentType
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param descriptionParcelContentType $description
     * @return \App\ElektronicznyNadawca\parcelContentType
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdKarta()
    {
      return $this->idKarta;
    }

    /**
     * @param int $idKarta
     * @return \App\ElektronicznyNadawca\parcelContentType
     */
    public function setIdKarta($idKarta)
    {
      $this->idKarta = $idKarta;
      return $this;
    }

    /**
     * @return guidType
     */
    public function getGuid()
    {
      return $this->guid;
    }

    /**
     * @param guidType $guid
     * @return \App\ElektronicznyNadawca\parcelContentType
     */
    public function setGuid($guid)
    {
      $this->guid = $guid;
      return $this;
    }

}
