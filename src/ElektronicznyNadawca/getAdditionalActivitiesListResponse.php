<?php

namespace App\ElektronicznyNadawca;

class getAdditionalActivitiesListResponse
{

    /**
     * @var additionalActivityType $additionalActivity
     */
    protected $additionalActivity = null;

    /**
     * @var errorType $error
     */
    protected $error = null;

    /**
     * @param additionalActivityType $additionalActivity
     * @param errorType $error
     */
    public function __construct($additionalActivity, $error)
    {
      $this->additionalActivity = $additionalActivity;
      $this->error = $error;
    }

    /**
     * @return additionalActivityType
     */
    public function getAdditionalActivity()
    {
      return $this->additionalActivity;
    }

    /**
     * @param additionalActivityType $additionalActivity
     * @return \App\ElektronicznyNadawca\getAdditionalActivitiesListResponse
     */
    public function setAdditionalActivity($additionalActivity)
    {
      $this->additionalActivity = $additionalActivity;
      return $this;
    }

    /**
     * @return errorType
     */
    public function getError()
    {
      return $this->error;
    }

    /**
     * @param errorType $error
     * @return \App\ElektronicznyNadawca\getAdditionalActivitiesListResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
