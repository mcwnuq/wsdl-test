<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for deliveryPathType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeliveryPathType extends AbstractStructBase
{
    /**
     * The endNode
     * @var string|null
     */
    public ?string $endNode = null;
    /**
     * The targetingNode
     * @var string|null
     */
    public ?string $targetingNode = null;
    /**
     * The assistantNode
     * @var string|null
     */
    public ?string $assistantNode = null;
    /**
     * The reloadingPoint
     * @var string|null
     */
    public ?string $reloadingPoint = null;
    /**
     * The postOffice
     * @var string|null
     */
    public ?string $postOffice = null;
    /**
     * The deliveryRegion
     * @var string|null
     */
    public ?string $deliveryRegion = null;
    /**
     * Constructor method for deliveryPathType
     * @uses DeliveryPathType::setEndNode()
     * @uses DeliveryPathType::setTargetingNode()
     * @uses DeliveryPathType::setAssistantNode()
     * @uses DeliveryPathType::setReloadingPoint()
     * @uses DeliveryPathType::setPostOffice()
     * @uses DeliveryPathType::setDeliveryRegion()
     * @param string $endNode
     * @param string $targetingNode
     * @param string $assistantNode
     * @param string $reloadingPoint
     * @param string $postOffice
     * @param string $deliveryRegion
     */
    public function __construct(?string $endNode = null, ?string $targetingNode = null, ?string $assistantNode = null, ?string $reloadingPoint = null, ?string $postOffice = null, ?string $deliveryRegion = null)
    {
        $this
            ->setEndNode($endNode)
            ->setTargetingNode($targetingNode)
            ->setAssistantNode($assistantNode)
            ->setReloadingPoint($reloadingPoint)
            ->setPostOffice($postOffice)
            ->setDeliveryRegion($deliveryRegion);
    }
    /**
     * Get endNode value
     * @return string|null
     */
    public function getEndNode(): ?string
    {
        return $this->endNode;
    }
    /**
     * Set endNode value
     * @param string $endNode
     * @return \App\ElektronicznyNadawca\StructType\DeliveryPathType
     */
    public function setEndNode(?string $endNode = null): self
    {
        $this->endNode = $endNode;
        
        return $this;
    }
    /**
     * Get targetingNode value
     * @return string|null
     */
    public function getTargetingNode(): ?string
    {
        return $this->targetingNode;
    }
    /**
     * Set targetingNode value
     * @param string $targetingNode
     * @return \App\ElektronicznyNadawca\StructType\DeliveryPathType
     */
    public function setTargetingNode(?string $targetingNode = null): self
    {
        $this->targetingNode = $targetingNode;
        
        return $this;
    }
    /**
     * Get assistantNode value
     * @return string|null
     */
    public function getAssistantNode(): ?string
    {
        return $this->assistantNode;
    }
    /**
     * Set assistantNode value
     * @param string $assistantNode
     * @return \App\ElektronicznyNadawca\StructType\DeliveryPathType
     */
    public function setAssistantNode(?string $assistantNode = null): self
    {
        $this->assistantNode = $assistantNode;
        
        return $this;
    }
    /**
     * Get reloadingPoint value
     * @return string|null
     */
    public function getReloadingPoint(): ?string
    {
        return $this->reloadingPoint;
    }
    /**
     * Set reloadingPoint value
     * @param string $reloadingPoint
     * @return \App\ElektronicznyNadawca\StructType\DeliveryPathType
     */
    public function setReloadingPoint(?string $reloadingPoint = null): self
    {
        $this->reloadingPoint = $reloadingPoint;
        
        return $this;
    }
    /**
     * Get postOffice value
     * @return string|null
     */
    public function getPostOffice(): ?string
    {
        return $this->postOffice;
    }
    /**
     * Set postOffice value
     * @param string $postOffice
     * @return \App\ElektronicznyNadawca\StructType\DeliveryPathType
     */
    public function setPostOffice(?string $postOffice = null): self
    {
        $this->postOffice = $postOffice;
        
        return $this;
    }
    /**
     * Get deliveryRegion value
     * @return string|null
     */
    public function getDeliveryRegion(): ?string
    {
        return $this->deliveryRegion;
    }
    /**
     * Set deliveryRegion value
     * @param string $deliveryRegion
     * @return \App\ElektronicznyNadawca\StructType\DeliveryPathType
     */
    public function setDeliveryRegion(?string $deliveryRegion = null): self
    {
        $this->deliveryRegion = $deliveryRegion;
        
        return $this;
    }
}
