<?php

namespace App\ElektronicznyNadawca;

class getPrintForParcelResponse
{

    /**
     * @var PrintResultType $printResult
     */
    protected $printResult = null;

    /**
     * @var errorType $error
     */
    protected $error = null;

    /**
     * @param PrintResultType $printResult
     * @param errorType $error
     */
    public function __construct($printResult, $error)
    {
      $this->printResult = $printResult;
      $this->error = $error;
    }

    /**
     * @return PrintResultType
     */
    public function getPrintResult()
    {
      return $this->printResult;
    }

    /**
     * @param PrintResultType $printResult
     * @return \App\ElektronicznyNadawca\getPrintForParcelResponse
     */
    public function setPrintResult($printResult)
    {
      $this->printResult = $printResult;
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
     * @return \App\ElektronicznyNadawca\getPrintForParcelResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
