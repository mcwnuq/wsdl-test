<?php

declare(strict_types=1);

namespace App\ElektronicznyNadawca\StructType;



/**
 * This class stands for changePassword StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ChangePassword
{
    /**
     * The newPassword
     * @var string|null
     */
    public ?string $newPassword = null;
    /**
     * Constructor method for changePassword
     * @uses ChangePassword::setNewPassword()
     * @param string $newPassword
     */
    public function __construct(?string $newPassword = null)
    {
        $this
            ->setNewPassword($newPassword);
    }
    /**
     * Get newPassword value
     * @return string|null
     */
    public function getNewPassword(): ?string
    {
        return $this->newPassword;
    }
    /**
     * Set newPassword value
     * @param string $newPassword
     * @return \App\ElektronicznyNadawca\StructType\ChangePassword
     */
    public function setNewPassword(?string $newPassword = null): self
    {
        $this->newPassword = $newPassword;
        
        return $this;
    }
}
