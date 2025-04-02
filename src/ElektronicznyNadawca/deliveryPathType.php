<?php

namespace App\ElektronicznyNadawca;

class deliveryPathType
{

    /**
     * @var string $endNode
     */
    protected $endNode = null;

    /**
     * @var string $targetingNode
     */
    protected $targetingNode = null;

    /**
     * @var string $assistantNode
     */
    protected $assistantNode = null;

    /**
     * @var string $reloadingPoint
     */
    protected $reloadingPoint = null;

    /**
     * @var string $postOffice
     */
    protected $postOffice = null;

    /**
     * @var string $deliveryRegion
     */
    protected $deliveryRegion = null;

    /**
     * @param string $endNode
     * @param string $targetingNode
     * @param string $assistantNode
     * @param string $reloadingPoint
     * @param string $postOffice
     * @param string $deliveryRegion
     */
    public function __construct($endNode, $targetingNode, $assistantNode, $reloadingPoint, $postOffice, $deliveryRegion)
    {
      $this->endNode = $endNode;
      $this->targetingNode = $targetingNode;
      $this->assistantNode = $assistantNode;
      $this->reloadingPoint = $reloadingPoint;
      $this->postOffice = $postOffice;
      $this->deliveryRegion = $deliveryRegion;
    }

    /**
     * @return string
     */
    public function getEndNode()
    {
      return $this->endNode;
    }

    /**
     * @param string $endNode
     * @return \App\ElektronicznyNadawca\deliveryPathType
     */
    public function setEndNode($endNode)
    {
      $this->endNode = $endNode;
      return $this;
    }

    /**
     * @return string
     */
    public function getTargetingNode()
    {
      return $this->targetingNode;
    }

    /**
     * @param string $targetingNode
     * @return \App\ElektronicznyNadawca\deliveryPathType
     */
    public function setTargetingNode($targetingNode)
    {
      $this->targetingNode = $targetingNode;
      return $this;
    }

    /**
     * @return string
     */
    public function getAssistantNode()
    {
      return $this->assistantNode;
    }

    /**
     * @param string $assistantNode
     * @return \App\ElektronicznyNadawca\deliveryPathType
     */
    public function setAssistantNode($assistantNode)
    {
      $this->assistantNode = $assistantNode;
      return $this;
    }

    /**
     * @return string
     */
    public function getReloadingPoint()
    {
      return $this->reloadingPoint;
    }

    /**
     * @param string $reloadingPoint
     * @return \App\ElektronicznyNadawca\deliveryPathType
     */
    public function setReloadingPoint($reloadingPoint)
    {
      $this->reloadingPoint = $reloadingPoint;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostOffice()
    {
      return $this->postOffice;
    }

    /**
     * @param string $postOffice
     * @return \App\ElektronicznyNadawca\deliveryPathType
     */
    public function setPostOffice($postOffice)
    {
      $this->postOffice = $postOffice;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryRegion()
    {
      return $this->deliveryRegion;
    }

    /**
     * @param string $deliveryRegion
     * @return \App\ElektronicznyNadawca\deliveryPathType
     */
    public function setDeliveryRegion($deliveryRegion)
    {
      $this->deliveryRegion = $deliveryRegion;
      return $this;
    }

}
