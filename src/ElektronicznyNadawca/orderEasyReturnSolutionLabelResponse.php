<?php

namespace App\ElektronicznyNadawca;

class orderEasyReturnSolutionLabelResponse
{

    /**
     * @var guidType $guid
     */
    protected $guid = null;

    /**
     * @var errorType $error
     */
    protected $error = null;

    /**
     * @param guidType $guid
     * @param errorType $error
     */
    public function __construct($guid, $error)
    {
      $this->guid = $guid;
      $this->error = $error;
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
     * @return \App\ElektronicznyNadawca\orderEasyReturnSolutionLabelResponse
     */
    public function setGuid($guid)
    {
      $this->guid = $guid;
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
     * @return \App\ElektronicznyNadawca\orderEasyReturnSolutionLabelResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
