<?php

namespace App\ElektronicznyNadawca;

class additionalActivityType
{

    /**
     * @var int $idActivity
     */
    protected $idActivity = null;

    /**
     * @var String127 $name
     */
    protected $name = null;

    /**
     * @var String1023 $description
     */
    protected $description = null;

    /**
     * @var boolean $critical
     */
    protected $critical = null;

    /**
     * @var int $order
     */
    protected $order = null;

    /**
     * @var date $validFrom
     */
    protected $validFrom = null;

    /**
     * @var date $validTo
     */
    protected $validTo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getIdActivity()
    {
      return $this->idActivity;
    }

    /**
     * @param int $idActivity
     * @return \App\ElektronicznyNadawca\additionalActivityType
     */
    public function setIdActivity($idActivity)
    {
      $this->idActivity = $idActivity;
      return $this;
    }

    /**
     * @return String127
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param String127 $name
     * @return \App\ElektronicznyNadawca\additionalActivityType
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return String1023
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param String1023 $description
     * @return \App\ElektronicznyNadawca\additionalActivityType
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCritical()
    {
      return $this->critical;
    }

    /**
     * @param boolean $critical
     * @return \App\ElektronicznyNadawca\additionalActivityType
     */
    public function setCritical($critical)
    {
      $this->critical = $critical;
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
     * @return \App\ElektronicznyNadawca\additionalActivityType
     */
    public function setOrder($order)
    {
      $this->order = $order;
      return $this;
    }

    /**
     * @return date
     */
    public function getValidFrom()
    {
      return $this->validFrom;
    }

    /**
     * @param date $validFrom
     * @return \App\ElektronicznyNadawca\additionalActivityType
     */
    public function setValidFrom($validFrom)
    {
      $this->validFrom = $validFrom;
      return $this;
    }

    /**
     * @return date
     */
    public function getValidTo()
    {
      return $this->validTo;
    }

    /**
     * @param date $validTo
     * @return \App\ElektronicznyNadawca\additionalActivityType
     */
    public function setValidTo($validTo)
    {
      $this->validTo = $validTo;
      return $this;
    }

}
